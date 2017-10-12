<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Project;

class ProfileController extends Controller
{
    //
    public function profile($username){
    $project = Project::find($username);
   

     return view('user.profile', compact('project','share'));
 }
}
