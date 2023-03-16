<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Calendar extends Component
{
    public function render()
    {
        return view('livewire.admin.calendar');
    }
    public function index(){
        return view('calendar-app');
    }
}
