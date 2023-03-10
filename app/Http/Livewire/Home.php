<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Home extends Component
{
    // public $a =5;
    public function render()
    {
        return view('livewire.home');
    }

    public function index()
    {
        return view('index-app');
    }
    public function test()
    {
    }
}
