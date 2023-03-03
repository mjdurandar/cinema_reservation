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
            </ul>   
        </div>
        <div class="display">
            <div class="text-center pt-5">
                <h1>Master Data</h1>
            </div>
            <div class="boxes p-5">
                <div class="row text-center">
                    <div class="col-12 col-lg-4">
                        <div class="box_1">
                            <b>MOVIES</b>  
                            <div class="pt-3">
                            <span style="font-size:60px;">{{$movie_total}}</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-4">
                        <div class="box_2">
                            <b>TOTAL</b>  
                            <div class="pt-3">
                            <span style="font-size:60px;">{{$sum[0]['total']}}</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-4">
                        <div class="box_3">
                            <b>RESERVATION</b> 
                            <div class="pt-3">
                            <span style="font-size:60px;">{{$sum[0]['total_res']}}</span>
                            </div> 
                        </div>
                    </div>
                </div>
                <div class="row text-center mt-5">
                    <div class="col-12 col-lg-4">
                        <div class="box_1">
                            <b>CINEMA 1</b>  
                            <div class="pt-3">
                            <span style="font-size:60px;">{{20 - $cinema[0]['total'] }}</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-4">
                        <div class="box_2">
                            <b>CINEMA 2</b>  
                            <div class="pt-3">
                            <span style="font-size:60px;">{{20 - $cinema[1]['total'] }}</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-4">
                        <div class="box_3">
                            <b>CINEMA 3</b> 
                            <div class="pt-3">
                            <span style="font-size:60px;">{{20 - $cinema[2]['total'] }}</span>
                            </div> 
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
