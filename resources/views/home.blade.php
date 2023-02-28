@extends('layouts.app')
@extends('styles')

@section('content')
     <div class="admin d-flex">
        <div class="sidebar">
            <ul>   
                <div class="logo"><img src="./images/greenapple.png" alt=""></div>
                <a href="{{ url('home')}}"><li class="my_li" style="border-top:2px solid white;">Master Data</li></a>
                <a href="{{ url('create_movie')}}"><li class="my_li">Create Movie</li></a>
                <a href="{{ url('table')}}"><li class="my_li">Table Data</li></a>
                <a href="{{ url('create_movie')}}"><li class="my_li">Total Sales</li></a>
            </ul>   
        </div>
        <div class="display">
            <div class="boxes p-5">
                <div class="row text-center">
                    <div class="col-12 col-lg-4">
                        <div class="box_1">
                            <b>MOVIES</b>  
                            <div class="pt-3">
                            <span style="font-size:60px;">14</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-4">
                        <div class="box_2">
                            <b>TICKETS</b>  
                            <div class="pt-3">
                            <span style="font-size:60px;">500</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-4">
                        <div class="box_3">
                            <b>COLLECTED</b> 
                            <div class="pt-3">
                            <span style="font-size:60px;">30</span>
                            </div> 
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
