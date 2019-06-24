<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Olevel;

class OlevelController extends Controller
{
    public function index()
    {

        return view('')->with('olevel', Olevel::all());
    }

   
}
