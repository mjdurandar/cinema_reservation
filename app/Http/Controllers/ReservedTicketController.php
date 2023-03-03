<?php

namespace App\Http\Controllers;

use App\Models\Reserved_ticket;
use Illuminate\Http\Request;

class ReservedTicketController extends Controller
{
    public function ticket(Reserved_ticket $movie_id){
        dd($movie_id);

    }
}
