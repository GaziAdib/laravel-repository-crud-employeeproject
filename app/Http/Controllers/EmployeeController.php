<?php

namespace App\Http\Controllers;

use App\Repository\IEmployeeRepository;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{

    public $employee;

    public function __construct(IEmployeeRepository $employee)
    {
        $this->employee = $employee;
    }


    public function index()
    {

        $employees = $this->employee->getAllEmployees();
        return view('employees.index')->with('employees', $employees);

    }


    public function create()
    {
        return view('employees.create');
    }


    public function store(Request $request)
    {

        $request->validate([
            'name' => 'required',
            'salary' => 'required',
            'designation' => 'required'
        ]);

        $this->employee->createEmployee($request->all());

        return redirect('/employees');

    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {

       $employee = $this->employee->editEmployee($id);
       return view('employees.edit')->with('employee', $employee);

        // $employee = Employee::find($id);
        // return view('employees.edit')->with('employee', $employee); //old way
    }


    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'salary' => 'required',
            'designation' => 'required'
        ]);

        $data = $request->all();

        $this->employee->updateEmployee($id, $data);

        return redirect('/employees');

        // Employee::find($id)->update([
        //     'name' => $request->name,
        //     'salary' => $request->salary,
        //     'designation' => $request->designation //old way
        // ]);




    }


    public function destroy($id)
    {
        //Employee::find($id)->delete(); //old way

        $this->employee->deleteEmployee($id);

        return redirect('/employees');
    }
}
