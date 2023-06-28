<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Admin\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index(){
        $posts = Project::All();

        return response()->json([
            'success' => true,
            'posts' => $posts 
        ]);
    }
}
