<?php

namespace App\Http\Controllers;

use App\Models\Horses;
use Illuminate\Http\Request;

class HorsesController extends Controller
{
    public function index () {
        return view('stable.all', [
            'title' => 'Stable',
            'horses' => Horses::all()
        ]);
    }

    public function show ($showHorses){
        return view ('stable.detail' ,[
            'title'=> 'detailStable',
            'horses' => Horses::find($showHorses)
        ]);
    }
}
