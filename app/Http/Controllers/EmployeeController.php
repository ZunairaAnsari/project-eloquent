<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $employees = Employee::Paginate(8);
        // $employees = Employee::where([
        //     ['salary', '>', 1000],
        //     ['city', '=' , 'Karachi']
           
        // ])->get();
        // dd($employees);
        return view('welcome', compact('employees'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       return view('add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email|unique:employees',
            'salary' => 'required|numeric',
            'city' => 'required|max:255',
        ]);

        Employee::create($request->all());

        return redirect()->route('employee.index')->with('message', 'Employee created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($employee)
    {
        $employee = Employee::findOrFail($employee);
        return view('view', compact('employee'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Employee $employee)
    {
        return view('edit', compact('employee'));
    }
    

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Employee $employee,)
    {
        $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email|unique:employees,email,'.$employee->id,
            'salary' => 'required|numeric',
            'city' => 'required|max:255',
        ]);

        $employee->update($request->all());

        return redirect()->route('employee.index')->with('message', 'Employee updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Employee $employee)
    {

        $employee->delete();
        return redirect()->route('employee.index')->with('message', 'Employee deleted successfully.');
    }
}
