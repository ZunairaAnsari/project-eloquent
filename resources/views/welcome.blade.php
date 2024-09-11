@extends('layout')

@section('title')
    All Employess Data
@endsection

@section('content')
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
          <td class="table-success"><a class="btn btn-sm btn-outline-secondary" href="">View</a></td>
          <td class="table-success"><a class="btn btn-sm btn-outline-secondary" href="">Update</a></td>
          <td class="table-success"><a class="btn btn-sm btn-outline-secondary" href="">Delete</a></td>
      </tr>
      @endforeach
  </tbody>
</table>

<div class="col-6 d-flex justify-content-end mb-3">
  {{ $employees->links() }}
</div>

<a class="btn btn-sm btn-outline-secondary" href="{{ route('employee.create')}}">Add new Employee</a>
@endsection