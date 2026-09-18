<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    /**
     * Display a listing of projects.
     */
    public function index()
    {
        $projects = Project::latest()->get();
        return view('projects.index', compact('projects'));
    }

    /**
     * Show the form for creating a new project.
     */
    public function create()
    {
        return view('projects.create');
    }

    /**
     * Store a newly created project in database.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title'       => 'required|max:200',
            'description' => 'required',
        ]);

        Project::create($request->only(['title', 'description']));

        return redirect()->route('projects.index')->with('success', 'Proyek berhasil ditambahkan!');
    }

    /**
     * Display the specified project detail.
     */
    public function show($id)
    {
        $project = Project::findOrFail($id);
        return view('projects.show', compact('project'));
    }

    /**
     * Show the form for editing the specified project.
     */
    public function edit($id)
    {
        $project = Project::findOrFail($id);
        return view('projects.edit', compact('project'));
    }

    /**
     * Update the specified project in database.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'title'       => 'required|max:200',
            'description' => 'required',
        ]);

        $project = Project::findOrFail($id);
        $project->update($request->only(['title', 'description']));

        return redirect()->route('projects.show', $project->id)->with('success', 'Proyek berhasil diperbarui!');
    }

    /**
     * Remove the specified project from database.
     */
    public function destroy($id)
    {
        $project = Project::findOrFail($id);
        $project->delete();

        return redirect()->route('projects.index')->with('success', 'Proyek berhasil dihapus!');
    }
}
