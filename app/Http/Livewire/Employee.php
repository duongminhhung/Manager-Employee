<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Employee extends Component
{
    public function render()
    {
        return view('livewire.admin.employee');
    }
    public function index()
    {
        return view('employee-app');
    }
    public function add(){
        return view('add_employee');
    }
}
