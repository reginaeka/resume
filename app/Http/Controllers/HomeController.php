<?php

namespace App\Http\Controllers;

use App\Models\SocialMedia;
use Illuminate\Http\Request;
use App\Models\User;
class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::all();
        $sosmeds = SocialMedia::all();

        return view('home',[
            'user'=>$users->first(),
            'sosmeds'=>$sosmeds
        ]);
    }
}

