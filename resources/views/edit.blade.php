@extends('layout')

@section('title')
<h1 style="font-family: Raleway;">Update Employee</h1>
@endsection

@section('content')
<div class="container" style="width: 700px">
    <form method="POST" action="{{ route('employee.update', ['employee' => $employee->id]) }}">
        @csrf
        @method('PUT')
        <div class="mb-3 mt-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" id="name" placeholder="Enter name" name="name"  value="{{ $employee->name }}">
          </div>
    
          <div class="mb-3 mt-3">
            <label for="email" class="form-label">Email:</label>
            <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" value="{{ $employee->email }}">
          </div>
    
          <div class="mb-3 mt-3">
            <label for="salary" class="form-label">salary</label>
            <input type="text" class="form-control" id="salary" placeholder="Enter salary" name="salary" value="{{ $employee->salary }}">
          </div>
    
          <div class="mb-3 mt-3">
            <label for="age" class="form-label">age</label>
            <input type="text" class="form-control" id="age" placeholder="Enter age" name="age" value="{{ $employee->age }}"> 
          </div>
          <div class="mb-3 mt-3">
            <label for="city" class="form-label">city</label>
            <input type="text" class="form-control" id="city" placeholder="Enter city" name="city" value="{{ $employee->city }}">
          </div>
      <button type="submit" class="btn btn-outline-success">Submit</button>
    </form>
  </div>
@endsection





