<?php

namespace App\Http\Controllers;

use App\Models\Team;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $teams = Team::all();
        return view('Teams/index')
            ->with('teams', $teams);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view ('teams/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'type' => 'required',
            'place' => 'required',
            'country' => 'required'
        ]);

        $team = new Team();
        $team->name = $request->name;
        $team->type = $request->type;
        $team->place = $request->place;
        $team->country = $request->country;

        $team->save();

        return redirect()->route('teams.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Team  $team
     * @return Response
     */
    public function edit(Team $team)
    {
            return view('teams/edit')
                ->with('team', $team);
    }



    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param  \App\Models\Team  $team
     * @return Response
     */
    public function update(Request $request, Team $team)
    {
            $request->validate([
                'name' => 'required',
                'type' => 'required',
                'place' => 'required',
                'country' => 'required'
            ]);

            $team->name = $request->name;
            $team->type = $request->type;
            $team->place = $request->place;
            $team->country = $request->country;
            $team->save();

            return redirect()->route('teams.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Team  $team
     * @return Response
     */
    public function destroy(Team $team)
    {
            $team->delete();
            return redirect()->route('teams.index');
    }

}
