<?php

namespace App\Http\Controllers;

use App\Models\Staff;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Carbon;

class StaffController extends Controller
{

    public function index()
    {
        $staffs = Staff::paginate(10);
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
        User::create([
            'name' => request()->input('first_name'),
            'email' => request()->input('email'),
            'password' => Hash::make(request()->input('number')),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        
        User::where('email', request()->input('email'))->update(['role_id' => 1]);

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
        User::where('email',$staff->email)->delete();
        $staff->delete();
        return redirect('/staff');
    }
}
