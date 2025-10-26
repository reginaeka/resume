<?php

namespace App\Http\Controllers;

use App\Models\SocialMedia;
use App\Models\User;
use Illuminate\Http\Request;

class ContactController extends Controller
{
     /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = User::first();
        $sosmeds = SocialMedia::all();       
    
         return view('contact',[
            'user'=>$user,
            'sosmeds'=>$sosmeds
        ]);
    }
}
