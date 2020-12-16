<?php

namespace App\Http\Controllers;

use App\Models\Staff;
use Illuminate\Http\Request;

class StaffController extends Controller
{

    public function index()
    {
        $staffs = Staff::all();
        return view('staff.index',[
            'staffs' => $staffs
        ]);
    }

    public function create()
    {
        return view('staff.create');
    }

    public function store(Request $request)
    {
        Staff::create(request()->validate([
            'first_name' => 'required',
            'middle_name' => 'nullable',            
            'last_name' => 'required',
            'job_title' => 'required',
            'date_of_birth' => 'required',
            'date_joined' => 'required',
            'salary' => 'nullable',
            'email' => 'required|unique:staff',
            'gender' => 'nullable',
            'number' => 'required|unique:staff',
            'address' => 'nullable'
        ]));

        return redirect('/staff');
    }

    public function show(Staff $staff)
    {
        return view('staff.show',[
            'staff' => $staff
        ]);
    }

    public function edit(Staff $staff)
    {
        return view('staff.edit',[
            'staff' => $staff
        ]);
    }

    public function update(Request $request, Staff $staff)
    {
        $staff->update(request()->validate([
            'first_name' => 'required',
            'middle_name' => 'nullable',            
            'last_name' => 'required',
            'job_title' => 'required',
            'date_of_birth' => 'required',
            'date_joined' => 'required',
            'salary' => 'nullable',
            'email' => 'required',
            'gender' => 'nullable',
            'number' => 'required',
            'address' => 'nullable'
        ]));

        return redirect('/staff');
    }

    public function destroy(Staff $staff)
    {
        $staff->delete();
        return redirect('/staff');
    }
}
