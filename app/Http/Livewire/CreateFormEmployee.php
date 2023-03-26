<?php

namespace App\Http\Livewire;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rules\Password;
use Livewire\Component;

class CreateFormEmployee extends Component
{
    public $email,$name,$password,$job, $province, $department, $address;
    public $selectedOption;
    public function render()
    {
        $data = DB::table('province')->get();
        $data1 = DB::table('department')->get();
        return view('livewire.create-form-employee',['data'=>$data,'data1'=>$data1]);
    }
    


    public function updated($fields)
    {
        $this->validateOnly($fields, [

            'name' => 'required',
            'password' => [
                'required',
                Password::min(8)
                ->letters()
                ->mixedCase()
                ->numbers()
                ->symbols()
                ->uncompromised()
            ],
            'email' => 'required|email:rfc,dns|unique:user',

            // 'job' => 'required',
        ]);
    }
   
    public function addPost(Request $request)
    {


        $this->validate([
            
            'name' => 'required',
            'password' => [
                'required',
                Password::min(8)
                    ->letters()
                    ->mixedCase()
                    ->numbers()
                    ->symbols()
                    ->uncompromised()
            ],
            'email' => 'required|email:rfc,dns|unique:user',

           

        ]);

        
        $post = [
            'name' => $this->name,
            'password' => $this->password,
            'email' => $this->email,
            'address' => $this->address,
        ];

        $name = $this->name;
        $email = $this->email;
        $password = $this->password;
        $address = $this->address;
        $selectedOption = $this->selectedOption;
        DB::table('user')->insert(
            [
                'name' => $name,
                'password' => $password,
                'email' => $email,
                'id_dp' => $selectedOption,
                'status' => '0',
                'province' => $address,
                'job'=>'0',
            ]
        );
        return redirect()->route('add_employee')->with('success', 'Successfully added employees');;
        


    }

}