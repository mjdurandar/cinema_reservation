@extends('layouts.app')
@extends('styles')

@section('content')
<div class="admin d-flex">
        <div class="sidebar">
            <ul>   
                <div class="logo"><img src="./images/greenapple.png" alt=""></div>
                <a href="{{ url('home')}}"><li style="border-top:2px solid white;">Master Data</li></a>
                <a href="{{ url('create_movie')}}"><li>Create Movie</li></a>
                <a href="{{ url('table')}}"><li>Table Data</li></a>
                <a href="{{ url('create_movie')}}"><li>Total Sales</li></a>
               
            </ul>   
        </div>
    
        <div class="create_movie">
            <form action="{{ url('movie/store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Movie Name: </label>
                <input type="text" name="movie_name" class="form-control" id="exampleFormControlInput1">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Cinema: </label>
                <input type="text" name="cinema" class="form-control" id="exampleFormControlInput1">
            </div>
            <div class="mb-3">
                <label for="formFile" class="form-label">Image: </label>
                <input class="form-control" name="" type="file" id="formFile">
            </div>
            <div class="mb-3">
                <label for="formFile" class="form-label">Description: </label>
                <input type="text" name="description" class="form-control" id="exampleFormControlInput1">
            </div>
            <div class="mb-3">
                <label for="formFile" class="form-label">Ticket Price: </label>
                <input type="number" name="ticket_price" class="form-control" id="exampleFormControlInput1">
            </div>

            <div class="my_button text-center">
                <button name="submit" type="submit" class="btn btn-primary">Submit</button>
            </div>
            </form>
        </div>
            
</div>

@endsection