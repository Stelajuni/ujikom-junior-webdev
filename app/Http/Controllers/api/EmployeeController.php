<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function index()
    {
        $employees = Employee::orderBy('name', 'asc')->get();
        return response()->json([
            'message'   => 'Berhasil menampilkan data employee',
            'data'      => $employees
        ], 200);
    }

    public function store(Request $request)
    {
        // mmebuat validasi
        $validated = $request->validate([
            'name'      => [
                'required',
                'string',
                'min:3',
                'max:255'
            ],
            'email'     => [
                'required',
                'email',
                'unique:employees,email'
            ],
            'alamat'  => [
                'required',
                'string',
                'min:3',
                'max:255'
            ],
            'phone_number'  => [
                'nullable',
            ],
        ]);

        // membuat emoloyee baru
        $employee = Employee::create($validated);

        return response()->json([
            'message'   => 'Berhasil menambahkan employee baru',
            'data'      => $employee
        ], 201);
    }

    public function show(string $id)
    {
        $employee = Employee::find($id);
        return response()->json([
            'message'   => 'Berhasil menampilkan detail employee',
            'data'      => $employee
        ], 200);
    }

    public function update(Request $request, string $id)
    {
        $validated = $request->validate([
            'name'      => [
                'required',
                'string',
                'min:3',
                'max:255'
            ],
            'email'     => [
                'required',
                'email',
                'unique:employees,email,' . $id
            ],
            'alamat'  => [
                'required',
                'string',
                'min:3',
                'max:255'
            ],
            'phone_number'  => [
                'nullable',
            ],
        ]);

        $employee = Employee::find($id);
        $employee->update($validated);

        return response()->json([
            'message'   => 'Berhasil mengupdate data employee',
            'data'      => $employee
        ], 200);
    }

    public function destroy(string $id)
    {
        $employee = Employee::find($id);
        $employee->delete();

        return response()->json([
            'message'   => 'Berhasil menghapus data employee',
            'data'      => $employee
        ], 200);
    }
}
