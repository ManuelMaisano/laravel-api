<?php

namespace App\Http\Controllers\Admin;
use App\Models\Project;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $projects=Project::all();
        return view('admin.projects.index', compact('projects'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
      
        return view('admin.projects.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request -> validate([
            'title' => 'required|max:255',
            'content' => 'required',
            'cover_image' => 'image|nullable|',
        ]);
        $form_data = $request->all();
        $form_data['slug'] = Project::generateSlug($form_data['title']);
        $newProject = Project::create($form_data);
        return redirect()->route('admin.projects.show', $newProject->slug)->with('message', 'New project created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Project $projects)
    {
        return view('admin.projects.show', compact('projects'));
    
    }

    /**
     * Show the form for editing the specified resource.
     * 
     */
    public function edit(Project $projects)
    {
        return view('admin.projects.edit', compact('projects'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Project $project)
    {
        $form_data = $request->all();
        if ($project->title !== $form_data['title']) {
            $form_data['slug'] = Project::generateSlug($form_data['title']);
        }
        $project->update($form_data);
        return redirect()->route('admin.projects.show', $project->slug);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Project $projects)
    {
        $projects->delete();
        return redirect()->route('admin.projects.index')->with('message', $projects->title . ' è stato eliminato');
    }
}
