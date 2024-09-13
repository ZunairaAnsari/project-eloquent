@extends('layout')

@section('title')
    <h1 style="font-family: Raleway;">All Employess Data</h1>
@endsection

@section('content')
@if (session('message'))
    <div class="alert alert-success">{{ session('message') }}</div>
@endif
{{-- <table class="table table-bordered table-striped">
    <thead>
        <tr>
            <th class="table-dark">Name</th>
            <th class="table-dark">Email</th>
            <th class="table-dark">Salary</th>
            <th class="table-dark">Age</th>
            <th class="table-dark">City</th>
            <th class="table-dark">View</th>
            <th class="table-dark">Update</th>
            <th class="table-dark">Delete</th>
          </tr>
      </thead>
      <tbody>
      @foreach ($employees as $item)
      <tr>
          <td class="table-success">{{ $item->name }}</td>
          <td class="table-success">{{ $item->email }}</td>
          <td class="table-success">{{ $item->salary }}</td>
          <td class="table-success">{{ $item->age }}</td>
          <td class="table-success">{{ $item->city }}</td>
          <a class="btn btn-sm btn-outline-secondary" href="{{ route('employee.show', ['employees' => $employees->id]) }}">View</a>
          <td class="table-success"><a class="btn btn-sm btn-outline-secondary" href="">Update</a></td>
          <td class="table-success"><a class="btn btn-sm btn-outline-secondary" href="">Delete</a></td>
      </tr>
      @endforeach
  </tbody>
</table> --}}

<table class="table table-bordered table-striped">
    <thead>
        <tr>
            <th class="table-dark">Name</th>
            <th class="table-dark">Email</th>
            <th class="table-dark">Salary</th>
            <th class="table-dark">Age</th>
            <th class="table-dark">City</th>
            <th class="table-dark">View</th>
            <th class="table-dark">Update</th>
            <th class="table-dark">Delete</th>
          </tr>
    </thead>
    <tbody>
    @foreach ($employees as $item)
    <tr>
        <td class="table-success">{{ $item->name }}</td>
        <td class="table-success">{{ $item->email }}</td>
        <td class="table-success">{{ $item->salary }}</td>
        <td class="table-success">{{ $item->age }}</td>
        <td class="table-success">{{ $item->city }}</td>
        <td class="table-success">
            <a class="btn btn-sm btn-outline-secondary" href="{{ route('employee.show', ['employee' => $item->id]) }}">View</a>
        </td>
        <td class="table-success">
            <a class="btn btn-sm btn-outline-secondary" href="{{ route('employee.edit', ['employee' => $item->id]) }}">Update</a>
        </td>
        <td class="table-success">
            <form action="{{ route('employee.destroy', ['employee' => $item->id]) }}" method="POST" style="display:inline;">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-sm btn-outline-secondary">Delete</button>
            </form>
        </td>
    </tr>
    @endforeach
</tbody>
</table>


<div class="col-6 d-flex justify-content-end mb-3">
  {{ $employees->links() }}
</div>

<a class="btn btn-sm btn-outline-secondary" href="{{ route('employee.create')}}">Add new Employee</a>
@endsection