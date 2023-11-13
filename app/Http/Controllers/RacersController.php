<?php

namespace App\Http\Controllers;

use App\Models\Racers;
use Illuminate\Http\Request;

class RacersController extends Controller
{
    public function index () {
        return view('player.all', [
            'title' => 'Player',
            'racers' => Racers::all()
        ]);
    }

    public function show ($showRacers){
        return view ('player.detail' ,[
            'title'=> 'detailPlayer',
            'racers' => Racers::find($showRacers)
        ]);
    }
}
