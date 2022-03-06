@extends('layouts.index')

@section('content')

<div class="container mt-5 mb-5">

    <h2>Employee</h2>
    <hr>

    <table class="table">
        <thead>
          <tr>
            <th scope="col">Id</th>
            <th scope="col">Name</th>
            <th scope="col">Salary</th>
            <th scope="col">Designation</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($employees as $employee)
                <tr>
                    <th scope="row">{{ $employee->id }}</th>
                    <td>{{ $employee->name }}</td>
                    <td>{{ $employee->salary }}</td>
                    <td>{{ $employee->designation }}</td>
                    <td>
                        <a href="{{ route('employees.edit', $employee->id) }}" class="btn btn-primary">Edit</a>
                        <form action="{{ route('employees.destroy', $employee->id) }}" method="POST">
                            @method('DELETE')
                            @csrf
                            <button type="submit" class="btn btn-outline-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
      </table>
</div>



@endsection
