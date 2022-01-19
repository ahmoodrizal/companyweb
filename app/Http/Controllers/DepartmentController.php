<?php

namespace App\Http\Controllers;

use App\Models\department;
use Illuminate\Http\Request;
use PDF;

class DepartmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Halaman utama Department
        $department = department::all();
        return view('depart.index', compact('department'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //Halaman Create Depart
        return view('depart.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Insert Data
        $validate_data = $request->validate([
            'dept_id' => ['required'],
            'dept_name' => ['required'],
            'number_of_emp' => ['required', 'integer'],
            'dept_email' => ['required'],
            'manager_name' => ['required'],
        ]);

        department::create($validate_data);

        return redirect()->route('depart.index')
            ->with('success', 'Data Department Berhasil Ditambah');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\department  $depart
     * @return \Illuminate\Http\Response
     */
    public function show(department $depart)
    {
        return view('depart.show', compact('depart'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\department  $depart
     * @return \Illuminate\Http\Response
     */
    public function edit(department $depart)
    {
        return view('depart.edit', compact('depart'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\department  $depart
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, department $depart)
    {
        $validate_data = $request->validate([
            'dept_id' => ['required'],
            'dept_name' => ['required', 'string'],
            'number_of_emp' => ['required', 'integer'],
            'dept_email' => ['required', 'email'],
            'manager_name' => ['required', 'string'],
        ]);

        $depart->update($validate_data);

        return redirect()->route('depart.index')
            ->with('success', 'Data Department Berhasil Diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\department  $depart
     * @return \Illuminate\Http\Response
     */
    public function destroy(department $depart)
    {
        $depart->delete();

        return redirect()->route('depart.index')
            ->with('success', 'Data Department Berhasil Dihapus');
    }

    public function cetakdept()
    {
        $depart = department::all();
        $pdf = PDF::loadview('depart.cetakdept', ['depart' => $depart]);
        return $pdf->download('LAPORAN_DEPARTMENT.pdf');
    }
}
