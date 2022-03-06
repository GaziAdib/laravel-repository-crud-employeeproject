<?php

namespace App\Repository;

use Illuminate\Support\Facades\Request;

interface IEmployeeRepository {

    public function getAllEmployees();

    public function createEmployee(array $data);

    public function editEmployee($id);

    public function updateEmployee($id, array $data);

    public function deleteEmployee($id);

}

?>
