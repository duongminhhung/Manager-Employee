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
        // $data = $request->except('_token');
        // // dd($data);
        

        // $user = new Admin();
        // // dd($user);
        // $user->name = $request->get('name');
        // $user->password = $request->get('password');
        // // dd($user->password);
        // $user->email = $request->get('email');
        // $user->id_dp = $request->get('id_dp');
        // $user->address = $request->get('address');
        // $user->job = $request->get('job');
        // $user->status_job = $request->get('status_job');
        $name = $request->get('name');
        $password = $request->get('password');
        $email = $request->get('email');
        $id_dp = $request->get('department');
        $province = $request->get('province');
        // dd($id_dp, $province);
        $namejob = $request->get('namejob');
        $status_job = $request->get('status_job');
        DB::table('user')->insert(
            ['name' => $name, 
            'password' => $password, 
            'email' => $email,
            'id_dp' => $id_dp,
            'address' => $province,
            'job' => $namejob,
            'status_job' => $status_job,
            ]
        );
        

        // return redirect()->route('index');
    }
}