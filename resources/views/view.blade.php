@extends('layout')

@section('title')
    <h1 style="font-family: Raleway;" class="title">Single Employee Data</h1>
@endsection

@section('content')
<div class="card">
    <div class="card-header">
     ID: {{ $employee->id}}
    </div>
    <div class="card-body">
      <h3 id="regForm2" class="card-title"> Employee Name: {{ $employee->name }}</h3>
      <p id="regForm2" class="card-text">Employee salary: {{ $employee->salary }}</p>
      <p id="regForm2" class="card-text"> Employee Age: {{ $employee->age }}</p>
      <a href="/employee" class="btn btn-outline-secondary">Back To Home Page</a>
    </div>
  </div>

@endsection