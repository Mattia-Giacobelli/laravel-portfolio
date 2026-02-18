<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $projects = Project::all();

        return view('projects.index', compact('projects'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('projects.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $data = $request->all();

        // dd($data);

        $newProject = new Project();

        $newProject->name = $data['name'];
        $newProject->languages = $data['languages'];
        $newProject->framework = $data['framework'];
        $newProject->category = $data['category'];
        $newProject->img = $data['img'];
        $newProject->description = $data['description'];
        $newProject->descrizione = $data['descrizione'];

        if (isset($data['front_end'])) {

            $newProject->front_end = true;
        } else {

            $newProject->front_end = false;
        }

        if (isset($data['back_end'])) {

            $newProject->back_end = true;
        } else {

            $newProject->back_end = false;
        }


        $newProject->save();

        return redirect()->route('admin.project', $newProject);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {

        // echo $id;

        $project = Project::find($id);

        // var_dump($project);

        return view('projects.show', compact('project'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Project $project)
    {

        // dd($project);

        return view('projects.edit', compact('project'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Project $project)
    {

        $data = $request->all();

        $project->name = $data['name'];
        $project->languages = $data['languages'];
        $project->framework = $data['framework'];
        $project->category = $data['category'];
        $project->img = $data['img'];
        $project->description = $data['description'];
        $project->descrizione = $data['descrizione'];

        if (isset($data['front_end'])) {

            $project->front_end = true;
        } else {

            $project->front_end = false;
        }

        if (isset($data['back_end'])) {

            $project->back_end = true;
        } else {

            $project->back_end = false;
        }


        $project->update();

        return redirect()->route('admin.project', $project->id);

        return 'update';
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Project $project)
    {

        // dd($project);

        $project->delete();

        return redirect()->route('admin.projects');
    }
}
