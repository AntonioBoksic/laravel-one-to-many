<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//questo lo aggiungiamo noi chiaramente
use App\Models\Project;

class MainController extends Controller
{
    public function index() {
        $projects = Project :: all();

        return view("project.index", compact("projects"));
    }

    

    public function show($id) {
    
        $project = Project :: findOrFail($id);

        return view("project.show", compact("project"));
    }

   
}
