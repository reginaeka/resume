<?php

namespace App\Http\Controllers;

use App\Models\Education;
use App\Models\Experience;
use App\Models\Project;
use App\Models\SocialMedia;
use App\Models\User;
use Illuminate\Http\Request;

class ResumeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = User::first();
        $sosmeds = SocialMedia::all();       
        $educations = Education::all();
        $experiences = Experience::with('projects')->get();
        // dd($experiences->projects);
        // $projects = Project::with('experience')->get();

         return view('resume',[
            'user'=>$user,
            'sosmeds'=>$sosmeds,
            'educations'=>$educations,
            'experiences'=>$experiences
        ]);
    }
}
