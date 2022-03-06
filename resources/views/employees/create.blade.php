@extends('layouts.index')



@section('content')

    <div class="container mt-5 mb-5">

        <h2>Create Employee</h2>
        <hr>

        <form action="/employees/store" method="POST">
            @csrf

            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" name="name" id="name" placeholder="Enter Name">
              </div>

              <div class="mb-3">
                <label for="salary" class="form-label">Salary</label>
                <input type="text" class="form-control" name="salary" id="salary" placeholder="Enter Salary">
              </div>

              <div class="mb-3">
                <label for="designation" class="form-label">Designation</label>
                <input type="text" class="form-control" name="designation" id="designation" placeholder="Enter Designation">
              </div>

              <button type="submit" class="btn btn-primary">Create</button>

        </form>



    </div>

@endsection
