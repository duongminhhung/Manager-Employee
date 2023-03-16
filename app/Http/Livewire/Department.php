<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Department extends Component
{
    public function render()
    {
        return view('livewire.admin.department');
    }
    public function index(){
        return view('department');
    }
}
