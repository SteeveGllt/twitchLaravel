<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SceneControllerRyry extends Controller
{
    public function startingRyry(){
        return view('/streamRyry/starting');
    }
    public function offlineRyry(){
        return view('/streamRyry/offline');
    }
    public function overlayRyry(){
        return view('/streamRyry/overlay');
    }
    public function overlaychatRyry(){
        return view('/streamRyry/overlaychat');
    }
}
