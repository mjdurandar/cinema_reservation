<?php

namespace App\Http\Controllers;
use App\Models\Movie;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function home()
    {   
        return view('home');
        
    }

    public function create_movie()
    {
        return view('create_movie');
    }
    
    public function table()
    {   
        $data = Movie::get();
        return view('table',compact('data'));
    }

    public function store(Request $request){
        $data = Movie::get();
        $request->validate([
            'movie_name' => 'required',
            'cinema' => 'required',
            'description' => 'required',
            'ticket_price' => 'required'
        ]);

        $data = new Movie();
        $data->movie_name = $request->movie_name;
        $data->cinema = $request->cinema;
        $data->description = $request->description;
        $data->ticket_price = $request->ticket_price;
        $data->save();

        return redirect('/home')->withInput();
    }

    
    public function destroy(Movie $movie){
        $movie->delete();
        return redirect('/table');
    }
}
