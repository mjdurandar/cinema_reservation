<?php

namespace App\Http\Controllers;
use App\Models\Movie;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    
    public function index()
    {   
        $data = Movie::get();
        return view('welcome',compact('data'));
    }

}
