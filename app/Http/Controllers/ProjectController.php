<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;
use PDF;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projects = Project::latest()->paginate(8);
        return view('project.index', compact('projects'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('project.create');
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
            'title' => ['required'],
            'leader' => ['required', 'string'],
            'link' => ['required', 'string'],
            'language' => ['required'],
        ]);

        Project::create($validate_data);

        return redirect()->route('project.index')
            ->with('success', 'Data Project Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function show(Project $project)
    {
        return view('project.show', compact('project'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function edit(Project $project)
    {
        return view('project.edit', compact('project'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Project $project)
    {
        $validate_data = $request->validate([
            'title' => ['required'],
            'leader' => ['required', 'string'],
            'link' => ['required', 'string'],
            'language' => ['required'],
        ]);

        $project->update($validate_data);

        return redirect()->route('project.index')
            ->with('success', 'Data Project Berhasil Diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function destroy(Project $project)
    {
        $project->delete();

        return redirect()->route('project.index')
            ->with('success', 'Data Project Berhasil Dihapus');
    }

    public function cetakproj()
    {
        $project = Project::all();
        $pdf = PDF::loadview('project.cetakproj', ['project' => $project]);
        return $pdf->download('LAPORAN_PROJECT.pdf');
    }
}
