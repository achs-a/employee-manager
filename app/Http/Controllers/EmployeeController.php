<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;

class EmployeeController extends Controller
{
    public function index(){
        $employees = Employee::all();
        return view('employees.index',['employees'=> $employees]);
    }

    public function create(){
        return view('employees.create');
    }
    public function store(Request $request){
        //validate
        $request->validate([
            'name'=>'required',
            'position'=>'required',
            'department'=>'required',
            'email'=>'required|email|unique:employees,email',
        ]);
        //create employee
         Employee::create($request->all());

        //  redirect
        return redirect()->route('employees.index');
    }
    public function edit(Employee $employee){
        return view('employees.edit', ['employee'=>$employee]);
    }
    public function update(Request $request, Employee $employee){
      
      //validate
       $info = $request->only(['name', 'position', 'department', 'email']);
      //update
      $employee->update($info);
      //redirect
     return redirect()->route('employees.index');
     }
    public function destroy(Employee $employee){
        $employee->delete();
        return redirect()->route('employees.index');
    }
}
