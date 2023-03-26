<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreEplRequest;
use App\Models\Admin;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{

    public function index()
    {
        $employess = DB::table('user')->whereIn('role', [0])->get();
        $department = DB::table('department')->get();
        $count_department = $department->count();
        $count_employee = $employess->count();
        // dd($admin[0]);
        return view('admin.home', compact('count_employee', 'count_department',));
    }
    public function employee()
    {
        return view('admin.employee');
    }
    public function add_employee()
    {
        $province = DB::table('province')->get();
        $department = DB::table('department')->get();
        return view('admin.add_employee', compact('province', 'department'));
    }
    public function add_employee_process(Request $request)
    {
        
        $name = $request->get('name');
        $password = $request->get('password');
        $email = $request->get('email');
        $id_dp = $request->get('department');
        $province = $request->get('province');
        $job = $request->get('job');
        DB::table('user')->insert(
            ['name' => $name, 
            'password' => $password, 
            'email' => $email,
            'id_dp' => $id_dp,
            'status'=> '0',
            'province' => $province,
            'job' => $job,
            // 'status' => 'asdfsadf'
            ]
        );
        

        return redirect()->route('add_employee')->with('success', 'Successfully added employees');;
    }
}