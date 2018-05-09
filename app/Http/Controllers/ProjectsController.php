<?php

namespace App\Http\Controllers;

use App\Company;
use App\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProjectsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        return view('projects.create', ['company_id' => $id]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if(Auth::check()) {
            $project = Project::create([
                'name'=>$request->input('name'),
                'description'=>$request->input('description'),
                'days'=>$request->input('days'),
                'company_id' => $request->input('company_id'),
                'user_id' => Auth::user()->id
            ]);
            
            if($project){
                $company = Company::find($request->input('company_id'));
                return redirect()->route('companies.show', ['company'=>$company])
                ->with('success','Projects added successfully!');
            }
        } else {
            return back()->withInput()->with('errors', ['Please loging to add new project']);
        }
        
        return back()->withInput()->with('errors', ['Error add new projects']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function show(Project $project)
    {
        $project = Project::find($project->id);
        //$projects = Project::find($company->id);
        return view('projects.show', ['project'=>$project]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function edit(Project $project)
    {
        $project = Project::find($project->id);
        return view('projects.edit', ['project'=>$project]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Project $project)
    {
        $projectUpdate = Project::where('id', $project->id)
        ->update([
            'name'=>$request->input('name'),
            'description'=>$request->input('description'),
            'days'=>$request->input('days')
        ]);
        
        if($projectUpdate){
            return redirect()->route('projects.show',['project'=>$project->id])
            ->with('success','Project updated successfully!');
        }
        
        return back()->withInput()->with('error', ['Project not updated']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function destroy(Project $project)
    {
        $findProject = Project::find($project->id);
        if($findProject->delete()) {
            return redirect()->route('companies.show', $project->company_id)
            ->with('success','Project deleted successfully!');
        }
        return back()->withInput()->with('error', ['Project not deleted']);
    }
}
