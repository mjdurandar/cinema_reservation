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

                <div class="my_table">
                    <table class="table">
                        <thead>
                            <tr>
                            <th scope="col">#</th>
                            <th scope="col">Movie</th>
                            <th scope="col">Cinema</th>
                            <th scope="col">Description</th>
                            <th scope="col">Ticket Price</th>
                            <th scope="col">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 

                            $i=1;

                            ?>
                            @foreach($data as $item)
                            <tr>
                                <th scope="row">{{$i++}}</th>
                                <td>{{$item['movie_name']}}</td>
                                <td>{{$item['cinema']}}</td>
                                <td>{{$item['description']}}</td>
                                <td>{{$item['ticket_price']}}</td>
                                <td>
                                    <a href="{{ url('movie/edit/' . $item['id']) }}" class="btn btn-primary">Edit</a>
                                    <a href="{{ url('movie/destroy/' . $item['id']) }}" class="btn btn-danger">Delete</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

</div>

@endsection