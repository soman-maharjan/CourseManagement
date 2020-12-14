<?php

namespace App\Http\Controllers;

use App\Models\Staff;
use Illuminate\Http\Request;

class StaffController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $staffs = Staff::all();
        return view('staff.index',[
            'staffs' => $staffs
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('staff.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
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

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Staff  $staff
     * @return \Illuminate\Http\Response
     */
    public function show(Staff $staff)
    {
        return view('staff.show',[
            'staff' => $staff
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Staff  $staff
     * @return \Illuminate\Http\Response
     */
    public function edit(Staff $staff)
    {
        return view('staff.edit',[
            'staff' => $staff
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Staff  $staff
     * @return \Illuminate\Http\Response
     */
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

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Staff  $staff
     * @return \Illuminate\Http\Response
     */
    public function destroy(Staff $staff)
    {
        $staff->delete();
        return redirect('/staff');
    }
}
