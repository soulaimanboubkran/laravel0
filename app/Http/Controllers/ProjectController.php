<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProjectRequest;
use App\Http\Requests\UpdateProjectRequest;
use App\Http\Resources\ProjectRecource;
use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProjectController extends Controller
{
    //
    public function show(Request $request, Project $project){
        return new  ProjectRecource($project);
    }
    public function store(StoreProjectRequest $request){
        $validated = $request->validated();
        $project = Auth::user()->projects()->create($validated);
        return new ProjectRecource($project);
    }

    public function update(UpdateProjectRequest $request,Project $project){
        $validated = $request->validated();
        $project->update($validated);
        return new ProjectRecource($project);
    }
}
