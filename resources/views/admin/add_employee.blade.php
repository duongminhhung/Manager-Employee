@extends('layouts.master')
@section('title', 'Add Employee')
@section('content')

<div class="page-wrapper">
            <div class="content container-fluid">
                <div class="row">
                    <div class="col-xl-12 col-sm-12 col-12 ">
                        <div class="breadcrumb-path mb-4">
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('index') }}">Home</a>
                                </li>
                                <li class="breadcrumb-item active"> <a href="{{ route('employee') }}">Employees</a></li>
                            </ul>
                            <h3>Create Employees</h3>
                        </div>
                        @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
                        <form action="{{ route('add_employee_process') }}" method="POST">
                    </div>
                        @csrf
                        <div class="col-xl-12 col-sm-12 col-12 ">
                            <div class="card">
                                <div class="card-header">
                                    <h2 class="card-titles">Basic Details <span>Organized and secure.</span></h2>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-xl-12 col-sm-12 col-12  ">
                                            <div class="form-group">
                                                <input type="text" placeholder="Full Name" name="name">
                                            </div>
                                        </div>
                                        
                                    </div>
                                    <div class="row">
                                        <div class="col-xl-12 col-sm-12 col-12  ">
                                            <div class="form-group">
                                                <input type="text" placeholder="Email" name="email">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xl-12 col-sm-12 col-12  ">
                                            <div  class="form-group">
                                                <input style="width: 100%;padding: 17px;" type="password" placeholder="Password" name="password">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-12 col-sm-12 col-12 ">
                            <div class="card ">
                                <div class="card-header">
                                    <h2 class="card-titles">Employment Details<span>Let everyone know the essentials so
                                            they're fully prepared.</span></h2>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-xl-6 col-sm-12 col-12 ">
                                            <div class="form-group">
                                                <select class="select" name="province">
                                                     @foreach ($province as $province )
                                                         <option value="{{ $province->name }}">{{ $province->name }}</option>
                                                     @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-sm-12 col-12 ">
                                            <div class="form-group">
                                                <input type="text" placeholder="Start Date">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xl-6 col-sm-12 col-12 ">
                                            <div class="form-group">
                                                <input type="text" name="job"  placeholder="Job Title">
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-sm-12 col-12 ">
                                            <div class="form-group">
                                                <select class="select" name="department">
                                                    @foreach ($department as $department)
                                                    <option value="{{ $department->id_dp }}">{{ $department->name }}</option>
                                                        
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-12 col-sm-12 col-12 ">
                            {{-- <div class="card">
                                <div class="card-header">
                                    <h2 class="card-titles">Salary Details<span>Stored securely, only visible to Super
                                            Admins, Payroll Admins, and themselves.</span></h2>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-xl-6 col-sm-12 col-12 ">
                                            <div class="form-group">
                                                <select class="select">
                                                    <option value="Select leave">Currency </option>
                                                    <option value="leave">$</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-sm-12 col-12 ">
                                            <div class="form-group">
                                                <select class="select">
                                                    <option value="Select leave">Frequency </option>
                                                    <option value="leave">Annualy</option>
                                                    <option value="leave">Monthly</option>
                                                    <option value="leave">Weekly</option>
                                                    <option value="leave">Daily</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xl-6 col-sm-12 col-12 ">
                                            <div class="form-group">
                                                <input type="text" placeholder="Start Date">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> --}}
                            <div class="row">
                                <div class="col-xl-12 col-sm-12 col-12 ">
                                    <div class="form-btn">
                                        <button class="btn btn-apply w-auto">Add Team Member</button>
                                        <a href="" class="btn btn-secondary">Cancel</a>
                                    </div>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
        @endsection()
