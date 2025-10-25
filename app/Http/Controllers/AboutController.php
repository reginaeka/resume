<?php

namespace App\Http\Controllers;

use App\Models\Skill;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\SocialMedia;
use Carbon\Carbon;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = User::first();
        $dob = Carbon::parse($user->dob);
        $dateNow = Carbon::now('Asia/Jakarta');
        $age = round(($dob->diffInMonths($dateNow))/12); 
        $user->age = $age;
        
        $sosmed = SocialMedia::all();       

        $skills = Skill::all();

        // dd($users);
        return view('about',[
            'user'=>$user,
            'sosmed'=>$sosmed,
            'skills'=>$skills
        ]);
    }
}
