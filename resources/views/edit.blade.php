@extends('layouts.app')
@extends('styles')
@section('content')
<div class="admin d-flex">
        <div class="sidebar">
            <ul>   
                <div class="logo"><img src="/images/greenapple.png" alt=""></div>
                <a href="{{ url('home')}}"><li style="border-top:2px solid white;">Master Data</li></a>
                <a href="{{ url('create_movie')}}"><li>Create Movie</li></a>
                <a href="{{ url('table')}}"><li>Table Data</li></a>
            </ul>   
        </div>
    
        <div class="create_movie">
            <form action="{{ url('movie/update') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <input type="hidden" name="id" value="{{ old('id') ?? $movie->id }}">
                <label for="exampleFormControlInput1" class="form-label">Movie Name: </label>
                <input type="text" name="movie_name"  value="{{ old('movie_name') ?? $movie->movie_name }}" class="form-control" id="exampleFormControlInput1">
            </div>
            <label for="exampleFormControlInput1" class="form-label">Cinema: </label>
            <div class="dropdown pb-3">
            <select class="form-select" name="cinema" value="{{ old('cinema') ?? $movie->cinema }}">
                <option value="Cinema 1"><a class="dropdown-item" href="#">Cinema 1</a></option>
                <option value="Cinema 2"><a class="dropdown-item" href="#">Cinema 2</a></option>
                <option value="Cinema 3"><a class="dropdown-item" href="#">Cinema 3</a></option>
            </select>
            </div>
            <div class="mb-3">
                <label for="formFile" class="form-label">Image: </label>
                <input class="form-control" name="image" type="file" id="formFile">
            </div>
            <div class="mb-3">
                <label for="formFile" class="form-label">Description: </label>
                <input type="text" name="description"  value="{{ old('description') ?? $movie->description }}" class="form-control" id="exampleFormControlInput1">
            </div>
            <div class="mb-3">
                <label for="formFile" class="form-label">Ticket Price: </label>
                <input type="number" name="ticket_price"  value="{{ old('ticket_price') ?? $movie->ticket_price }}" class="form-control" id="exampleFormControlInput1">
            </div>

            <div class="my_button text-center">
                <button name="submit" type="submit" class="btn btn-primary">Submit</button>
            </div>
            </form>
        </div>
            
</div>

@endsection