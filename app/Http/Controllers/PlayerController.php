<?php

namespace App\Http\Controllers;

use App\Models\Team;
use Illuminate\Http\Response;

class PlayerController
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        //get all data from team and make a collection of it for player
        $teams = Team::all();
        return view('Players/index')
            ->with('teams', $teams);

    }


}
