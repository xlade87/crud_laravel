<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;

class EmployeeController extends Controller
{
    public function index()
    {
        $employees = Employee::all();
        return view('employees.index', compact('employees'));
    }

    public function create()
    {
        return view('employees.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'position' => 'required',
            'salary' => 'required|numeric',
        ]);

        Employee::create($request->all());

        return redirect()->route('employees.index')
            ->with('success', 'Empleado creado correctamente.');
    }

    public function show(string $id)
    {
        $employee = Employee::find($id);
        return view('employees.show', compact('employee'));
    }

    public function edit(string $id)
    {
        $employee = Employee::find($id);
        return view('employees.edit', compact('employee'));
    }

    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'position' => 'required',
            'salary' => 'required|numeric',
        ]);

        Employee::find($id)->update($request->all());
        return redirect()->route('employees.index')
            ->with('success', 'Empleado actualizado correctamente.');
    }

    public function destroy(string $id)
    {
        Employee::find($id)->delete();
        return redirect()->route('employees.index')
            ->with('success', 'Empleado eliminado correctamente.');
    }
}