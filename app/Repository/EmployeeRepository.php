<?php

namespace App\Repository;

use App\Repository\IEmployeeRepository;
use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeRepository implements IEmployeeRepository {

    protected $employee = null;

    public function getAllEmployees()
    {
        return Employee::all();
    }



    public function createEmployee($data)
    {
        $employee = new Employee();
        $employee->name = $data['name'];
        $employee->salary = $data['salary'];
        $employee->designation = $data['designation'];
        return $employee->save();

    }




    public function editEmployee($id)
    {
        $employee = Employee::find($id);
        return $employee;
    }

    public function updateEmployee($id, array $data)
    {

        Employee::find($id)->update([
            'name' => $data['name'],
            'salary' => $data['salary'],
            'designation' => $data['designation']
        ]);

    }

    public function deleteEmployee($id)
    {
        return Employee::find($id)->delete();
    }

}




?>
