<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ProjectFormRequest;
use App\User;
use App\Project;

class ProjectController extends Controller
{

    public function index()
    {
      $project = Project::all();
      return view('project.project', compact('project'));
   }
    public function create()
    {
      $users = User::pluck('fullname', 'id');
      return view('project.create', compact('users'));
   }
   public function store(ProjectFormRequest $request)
   {
      $project = new Project([
         'title'=>$request->get('title'),
         'description'=>$request->get('description'),
         'type'=>$request->get('type'),
         'client'=>$request->get('client'),
         'due_date'=>$request->get('due_date'),
         'cost'=>$request->get('cost'),
         'user_id'=>$request->get('user_id')
      ]);
      $project->save();
      return redirect('project/create')->with('status','Project created successfully');

   }
}
