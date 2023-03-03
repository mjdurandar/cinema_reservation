

<div class="now_showing container" id="nowshowing">
            <div class="text_title" style="color:white;">Now Showing</div>
            <div class="movies">                 
                    <div class="row">
                    @foreach($data as $item)
                        <div class="col-4 p-1 pb-4">
                            <div class="card" style="width: 20rem; height:100%;">
                                <img src="{{asset('storage/images/'.$item->image)}}" class="card-img-top" alt="..." >
                                    <div class="card-body">
                                        <h5 class="card-title">{{$item['movie_name']}}</h5>
                                        <p class="card-text">{{$item['cinema']}}</p>
                                        <p class="card-text">{{$item['description']}}</p>
                                        <p class="card-text">{{$item['ticket_price']}}</p>
                                        <div class="text-center pt-2">
                                        <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#movie{{$item['id']}}">Buy Ticket</button>                                        </div>
                                    </div>
                            </div>
                        </div>
                    <!-- Modal -->
                    <div class="modal fade" id="movie{{$item['id']}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Buy Ticket</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="card-body">
                                    <h5 class="card-title">{{$item['movie_name']}}</h5>
                                    <p class="card-text">{{$item['description']}} 
                                        <br>
                                        {{$item['cinema']}}
                                    </p>
                                    <p class="card-text">{{$item['ticket_price']}}</p>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <form action="{{url('/ticket')}}" method ="POST">
                                @csrf
                                <input type="text" value="{{$item['id']}}" name="id">
                                <input type="text" value="{{$item['movie_name']}}" name="movie_name">
                                <input type="text" value="{{$item['cinema']}}" name="cinema">
                                <input type="text" value="{{$item['description']}}" name="description">
                                <input type="text" value="{{$item['ticket_price']}}" name="ticket_price">
                                <button type="submit" class="btn btn-success">Confirm</button>
                            </form>
                        </div>
                        </div>
                    </div>
                    </div>
                        @endforeach
                    </div>              
            </div>
        </div>




