<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\Technology;
use App\Models\Type;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

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

        $types = Type::all();

        $technologies = Technology::all();

        return view('projects.create', compact('types', 'technologies'));
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
        // $newProject->framework = $data['framework'];
        $newProject->category = $data['category'];
        $newProject->type_id = $data['type_id'];
        $newProject->description = $data['description'];
        $newProject->descrizione = $data['descrizione'];

        //Save img in public and save the path into the database

        // dd($data);

        if (array_key_exists('img', $data)) {

            $imgURL = Storage::putFile('projects', $data['img']);

            $newProject->img = $imgURL;
        }


        $newProject->save();

        $newProject->technologies()->attach($data['technologies']);

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

        $types = Type::all();

        $technologies = Technology::all();

        return view('projects.edit', compact('project', 'types', 'technologies'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Project $project)
    {

        $data = $request->all();

        $project->name = $data['name'];
        $project->languages = $data['languages'];
        // $project->framework = $data['framework'];
        $project->category = $data['category'];
        $project->type_id = $data['type_id'];
        $project->description = $data['description'];
        $project->descrizione = $data['descrizione'];


        //Save img in public and save the path into the database

        // dd($data);

        if (array_key_exists('img', $data)) {

            //Delete the old img

            Storage::delete($project->img);

            //Add the new image

            $imgURL = Storage::putFile('projects', $data['img']);



            $project->img = $imgURL;
        }



        $project->update();

        $project->technologies()->sync($data['technologies']);

        return redirect()->route('admin.project', $project->id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Project $project)
    {

        // dd($project);

        //Delete the related img
        Storage::delete($project->img);


        $project->delete();

        return redirect()->route('admin.projects');
    }
}
