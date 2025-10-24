<?php

namespace App\Http\Controllers;

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

        dd($users);

        if (request('keyword')) {
            $posts->where('title','like','%'.request('keyword').'%');
        }
        // dd($posts);
        return view('dashboard.index',['posts'=>$posts->paginate(5)->withQueryString()]);
    }
}
