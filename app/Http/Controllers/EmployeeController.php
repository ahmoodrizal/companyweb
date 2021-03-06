<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;
use PDF;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $employees = Employee::latest()->paginate(10);
        return view('employee.index', compact('employees'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('employee.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validate_data = $request->validate([
            'emp_id' => ['required'],
            'emp_fullname' => ['required', 'string'],
            'emp_email' => ['required', 'email'],
            'emp_address' => ['required'],
            'emp_department' => ['required'],
            'salary' => ['required', 'integer'],
            'gender' => ['required', 'string'],
        ]);

        Employee::create($validate_data);

        return redirect()->route('employee.index')
            ->with('success', 'Data Karyawan Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function show(Employee $employee)
    {
        return view('employee.show', compact('employee'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function edit(Employee $employee)
    {
        return view('employee.edit', compact('employee'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Employee $employee)
    {
        $validate_data = $request->validate([
            'emp_id' => ['required'],
            'emp_fullname' => ['required', 'string'],
            'emp_email' => ['required', 'email'],
            'emp_address' => ['required'],
            'emp_department' => ['required'],
            'salary' => ['required', 'integer'],
            'gender' => ['required', 'string'],
        ]);

        $employee->update($validate_data);

        return redirect()->route('employee.index')
            ->with('success', 'Data Karyawan Berhasil Diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function destroy(Employee $employee)
    {
        $employee->delete();

        return redirect()->route('employee.index')
            ->with('success', 'Data Karyawan Berhasil Dihapus');
    }

    public function cetakpdf()
    {
        $employees = employee::all();

        $pdf = PDF::loadview('employee.cetakpdf', ['employees' => $employees]);

        return $pdf->download('LAPORAN_EMPLOYEES.pdf');
    }

    public function generate($id)
    {
        $employee = Employee::findOrFail($id);

        $qrcode = QrCode::size(250)->email($employee->emp_email);

        return view('employee.qrcode', compact('qrcode'));
    }
}
