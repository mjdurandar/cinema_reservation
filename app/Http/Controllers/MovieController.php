<?php

namespace App\Http\Controllers;
use App\Models\Movie;
use Illuminate\Http\Request;
use App\Models\Reserved_ticket;

class MovieController extends Controller
{
    
    public function index()
    {   
        $data = Movie::get();
        return view('welcome',compact('data'));
    }

    public function ticket(Request $request){
        $data = new Reserved_ticket();
        $data->movie_name = $request->movie_name;
        $data->cinema = $request->cinema;
        $data->description = $request->description;
        $data->ticket_price = $request->ticket_price;
        $data->save();

        return redirect('/');
    }



}
