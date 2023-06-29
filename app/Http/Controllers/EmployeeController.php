<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $employees = Employee::all();
        return view('admin.employee.index', compact('employees'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.employee.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // validate request for name, nip, and position
        $request->validate([
            'name' => 'required',
            'nip' => 'required|unique:employees|min:18|max:18',
            'position' => 'required'
        ], [
            'name.required' => 'Nama tidak boleh kosong',
            'nip.required' => 'NIP tidak boleh kosong',
            'nip.unique' => 'NIP sudah terdaftar',
            'position.required' => 'Jabatan tidak boleh kosong'
        ]);
        $employee = Employee::create([
            'name' => $request->name,
            'nip' => $request->nip,
            'position' => $request->position
        ]);
        return redirect()->route('employee.index')->with('success', 'Data pegawai berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $employee = Employee::findOrfail($id);
        return view('admin.employee.edit', compact('employee'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // validate request for name, nip, and position
        $request->validate([
            'name' => 'required',
            'nip' => 'required|min:18|max:18',
            'position' => 'required'
        ], [
            'name.required' => 'Nama tidak boleh kosong',
            'nip.required' => 'NIP tidak boleh kosong',
            'nip.unique' => 'NIP sudah terdaftar',
            'position.required' => 'Jabatan tidak boleh kosong'
        ]);
        $employee = Employee::findOrfail($id);
        $employee->update([
            'name' => $request->name,
            'nip' => $request->nip,
            'position' => $request->position
        ]);
        return redirect()->route('employee.index')->with('success', 'Data pegawai berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // find employee by id
        $employee = Employee::findOrfail($id);
        // delete employee
        $employee->delete();
        return redirect()->route('employee.index')->with('success', 'Data pegawai berhasil dihapus');
    }
}
