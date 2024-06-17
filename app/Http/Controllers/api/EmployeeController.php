<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $employees = Employe::orderBy('name', 'asc')->get();
        return response()->json([
            'message'   => 'Berhasil menampilkan data employee',
            'data'      => $employees
        ], 200);
    }

    /**
     * Store a newly created resource in storage.
     */
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
            'password'  => [
                'required',
                'min:8'
            ],
            'role'  => [
                'required',
                'in:admin,employee'
            ],
            // 'password_confirmation' => [
            //     'required',
            //     'same:password'
            // ],
            // 'avatar'    => [
            //     'nullable',
            //     'image',
            //     'mimes:jpg,jpeg,png',
            //     'max:2048' // 2MB
            // ]
        ]);

        // unggah avatar
        // if ($request->hasFile('avatar')) {
        //     $avatar = $request->file('avatar');
        //     $avatarPath = $avatar->store('avatars', 'public');

        //     $validated['avatar'] = $avatarPath;
        // }

        // membuat user baru
        $employees = Employee::create($validated);

        return response()->json([
            'message'   => 'Berhasil menambahkan employee baru',
            'data'      => $employee
        ], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $employees = Employee::find($id);
        return response()->json([
            'message'   => 'Berhasil menampilkan detail employee',
            'data'      => $employee
        ], 200);
    }


    /**
     * Update the specified resource in storage.
     */
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
            'password'  => [
                'nullable',
                'min:8'
            ],
            'role'  => [
                'required',
                'in:admin,employee'
            ],
            'phone_number'  => [
                'nullable',
            ],
            // 'password_confirmation' => [
            //     'required',
            //     'same:password'
            // ],
            // 'avatar'    => [
            //     'nullable',
            //     'image',
            //     'mimes:jpg,jpeg,png',
            //     'max:2048' // 2MB
            // ]
        ]);

        // unggah avatar
        // if ($request->hasFile('avatar')) {
        //     $avatar = $request->file('avatar');
        //     $avatarPath = $avatar->store('avatars', 'public');

        //     $validated['avatar'] = $avatarPath;
        // }

        // jika ada password baru, maka update password
        if ($request->filled('password')) {
            $validated['password'] = bcrypt($validated['password']);
        } else {
            unset($validated['password']);
        }

        $employee = Employee::find($id);
        $employee->update($validated);

        return response()->json([
            'message'   => 'Berhasil mengupdate data employee',
            'data'      => $employee
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     */
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
