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
        $movie_total = Movie::count();
        $ticket_min = 500 - Movie::count();
        return view('home',compact('movie_total','ticket_min'));
    }

    public function reserve()
    {   
        $reserve_total = Movie::count();
        return view('reserve',compact('reserve_total'));
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
        ],
        [
            'movie_name.required' => 'This Field is required',
            'cinema.required' => 'required',
            'description.required' => 'required',
            'ticket_price.required' => 'required'
        ]
        );

        $image = $request->file('image')->getClientOriginalName();

        $request->file('image')->storeAs('public/images/', $image);
        $data = new Movie();
        $data->movie_name = $request->movie_name;
        $data->cinema = $request->cinema;
        $data->description = $request->description;
        $data->ticket_price = $request->ticket_price;
        $data->image = $image;
        $data->save();

        return redirect('/home')->withInput();
    }

    
    public function destroy(Movie $movie){
        $movie->delete();
        return redirect('/table');
    }

    public function edit(Movie $movie){
        $data = Movie::get();
        return view('/edit' , compact('data', 'movie'));
    }

    public function update(Request $request){
        
        $request->validate([
            'movie_name' => 'required',
            'cinema' => 'required',
            'description' => 'required',
            'ticket_price' => 'required'
        ],
        [
            'movie_name.required' => 'This Field is required',
            'cinema.required' => 'required',
            'description.required' => 'required',
            'ticket_price.required' => 'required'
        ]
        );


        $data = Movie::where('id', $request->id)->first();
        $data->movie_name = $request->movie_name;
        $data->cinema = $request->cinema;
        $data->description = $request->description;
        $data->ticket_price = $request->ticket_price;
        $data->save();

        return redirect('/table')->with('success', 'Success!')->withInput();
    }

    
}
