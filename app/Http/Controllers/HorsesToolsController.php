<?php

namespace App\Http\Controllers;

use App\Models\HorsesTools;
use Illuminate\Http\Request;

class HorsesToolsController extends Controller
{
    public function index(){
        return view('tools.all', [
            'title' => 'tools',
            'horses_tools' => HorsesTools::all()
        ]);
    }

    public function show ($showTools){
        return view ('tools.detail' ,[
            'title'=> 'detailTools',
            'horses_tools' => HorsesTools::find($showTools)
        ]);
    }
}
