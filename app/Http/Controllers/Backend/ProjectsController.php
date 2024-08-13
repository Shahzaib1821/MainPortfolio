<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Project;
use Illuminate\Http\Request;

class ProjectsController extends Controller
{
    public function index()
    {
        $projects = Project::all();
        return view('backend.projects.index', compact('projects'));
    }

    public function create()
    {
        return view('backend.projects.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'nullable',
            'image_path' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'project_link' => 'nullable|url',
            'stacks' => 'nullable|string',
            'company' => 'nullable|string',
            'background_color' => 'nullable|string',
        ]);

        $project = new Project();
        $project->title = $request->title;
        $project->description = $request->description; // Make sure description is handled correctly
        $project->stacks = $request->stacks;
        $project->company = $request->company;
        $project->background_color = $request->background_color;

        if ($request->hasFile('image_path')) {
            $image = $request->file('image_path');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('uploads/projects'), $imageName);
            $project->image_path = 'uploads/projects/' . $imageName;
        }

        $project->project_link = $request->project_link;
        $project->save();

        return redirect()->route('projects.index')
            ->with('success', 'Project created successfully.');
    }

    public function show(Project $project)
    {
        return view('backend.projects.show', compact('project'));
    }

    public function edit($id)
    {
        $project = Project::findOrFail($id);
        return view('backend.projects.edit', compact('project'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'nullable',
            'image_path' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'project_link' => 'nullable|url',
            'stacks' => 'nullable|string',
            'company' => 'nullable|string',
            'background_color' => 'nullable|string',
        ]);

        $project = Project::findOrFail($id);
        $project->title = $request->title;
        $project->description = $request->description; // Ensure description is handled correctly
        $project->stacks = $request->stacks;
        $project->company = $request->company;
        $project->background_color = $request->background_color;

        if ($request->hasFile('image_path')) {
            // Delete old image if exists
            if (file_exists(public_path($project->image_path))) {
                unlink(public_path($project->image_path));
            }

            // Upload new image
            $image = $request->file('image_path');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('uploads/projects'), $imageName);
            $project->image_path = 'uploads/projects/' . $imageName;
        }

        $project->project_link = $request->project_link;
        $project->save();

        return redirect()->route('projects.index')
            ->with('success', 'Project updated successfully.');
    }

    public function destroy($id)
    {
        $project = Project::findOrFail($id);

        // Delete associated image if exists
        if (file_exists(public_path($project->image_path))) {
            unlink(public_path($project->image_path));
        }

        $project->delete();

        return redirect()->route('projects.index')
            ->with('success', 'Project deleted successfully.');
    }
}
