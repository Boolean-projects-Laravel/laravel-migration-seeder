<?php

namespace App\Http\Controllers\Guest;

use App\Models\Train;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        return view('homepage');
    }

    public function movies()
    {
        // il controller chiama il Model per recuperare i dati dal database
        $arrMovies = Train::all();


        return view('movies', compact('arrMovies'));
    }
}