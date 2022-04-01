<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\mar;
use App\Models\tiburon;

class RelacionController extends Controller
{
    public function index(){
        $tubiron= tiburon::all();
        return view('index', compact('tiburon'));
    }
}
