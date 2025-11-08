<?php

namespace App\Http\Controllers;

use App\Models\Education;
use App\Models\Experience;
use App\Models\Skill;
use App\Models\SocialMedia;
use App\Models\User;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

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

         return view('resume',[
            'user'=>$user,
            'sosmeds'=>$sosmeds,
            'educations'=>$educations,
            'experiences'=>$experiences
        ]);
    }

    public function downloadPdf(){
        // dd('masuk sini');
        $user = User::first();
        $sosmeds = SocialMedia::all();       
        $educations = Education::all();
        $skills = Skill::all();
        $experiences = Experience::with('projects')->get();

         $pdf = Pdf::loadView('components.pdf.resume', [
            'user' => $user,
            'sosmeds' => $sosmeds,
            'skills' => $skills,
            'educations' => $educations,
            'experiences' => $experiences            
         ]);
         
         return $pdf->stream('resume.pdf');
        //  return $pdf->download('resume.pdf');
        
    
    }

    public function resumeGenerate(){
        $user = User::first();
        $sosmeds = SocialMedia::all();       
        $educations = Education::all();
        $skills = Skill::all();
        $experiences = Experience::with('projects')->get();

         return view('components.pdf.resume', [
            'user' => $user,
            'sosmeds' => $sosmeds,
            'skills' => $skills,
            'educations' => $educations,
            'experiences' => $experiences            
         ]);
    }
    
    public function download()
    {
        $url = asset('assets/resume/Regina-Resume.pdf');
        return response()->download($url, 'Regina-Resume.pdf');
    }

    public function resumeJadi()
    {
        return asset('storage/app/temp/1338584231-0327600001761923295/index.html');
    }
}
