<?php

namespace App\Http\Controllers;

use App\Models\Tournament;
use App\Models\Team;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $tournaments = Tournament::all();
        $teams = Team::all();

        return view('home', ['tournaments' => $tournaments], ['teams' => $teams]);

    }
}
