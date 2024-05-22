<?php

namespace App\Http\Controllers\Admin;

use App\Models\Project;
use App\Http\Requests\StoreProjectRequest;
use App\Http\Requests\UpdateProjectRequest;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;



class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $projects = Project::orderByDesc('id')->paginate('2');
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
    public function store(StoreProjectRequest $request)
    {
        $val_data = $request->validated();

        if ($request->has('preview_image')) {
            $image_path = Storage::put('uploads', $val_data['preview_image']);
            $val_data['preview_image'] = $image_path;
        }
        
        
        Project::create($val_data);
        return to_route('admin.projects.index')->with('message', "New Project Created!");
    }

    /**
     * Display the specified resource.
     */
    public function show(Project $project)
    {
        return view('admin.projects.show', compact('project'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Project $project)
    {
        return view('admin.projects.edit', compact('project'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProjectRequest $request, Project $project)
    {
        $val_data = $request->validated();
        if($request->has('preview_image')) {
            

            if($project->preview_image){
                Storage::delete($project->preview_image);
            }
            $image_path = Storage::put('uploads', $val_data['preview_image']);
            $val_data['preview_image'] = $image_path;

        }   


        $project->update($val_data);
        return to_route('admin.projects.index', $project)->with('message', "$project->project_name has been updated");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Project $project)
    {

        if($project->preview_image){
            Storage::delete($project->preview_image);
        }
        $project->delete();
        return to_route('admin.projects.index', $project)->with('message', "$project->project_name has been deleted");
    }
}
