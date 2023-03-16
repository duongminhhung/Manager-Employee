<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use OpenAI\Laravel\Facades\OpenAI;

class ChatController extends Controller
{
    public function index()
    {
        $messages = collect(session('messages', []))->reject(fn ($message) => $message['role'] === 'system');

        return view('welcome', [
            'messages' => $messages
        ]);
    }
    public function store(Request $request)
    {
        $messages = $request->session()->get('messages', [
            ['role' => 'system', 'content' => 'You are LaravelGPT - A ChatGPT clone. Answer as concisely as possible.']
        ]);

        $messages[] = ['role' => 'user', 'content' => $request->input('message')];

        $response = OpenAI::chat()->create([
            'model' => 'gpt-3.5-turbo',
            'messages' => $messages
        ]);
        dd($messages);
        $messages[] = ['role' => 'assistant', 'content' => $response->choices[0]->message->content];

        $request->session()->put('messages', $messages);

        return redirect('/');
    }
}
