<?php

namespace App\Http\Controllers;

use App\Models\Tournament;
use Illuminate\Http\Response;
use Illuminate\Http\Request;

class TournamentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $tournaments = Tournament::all();
        return view('Tournaments/index')
                ->with('tournaments', $tournaments);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {

        return view('tournaments.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'date'=>'required|date_format:Y-m-d',
            'start_time'=>'required|date_format:H:i',
            'end_time'=>'required|date_format:H:i'
        ]);

        $tournament = new Tournament();
        $tournament->name = $request->name;
        $tournament->date = $request->date;
        $tournament->start_time = $request->start_time;
        $tournament->end_time = $request->end_time;
        $tournament->save();

        return redirect()->route('tournaments.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Tournament $tournament
     * @return Response
     */
    public function edit(Tournament $tournament)
    {
        return view('tournaments/edit')
            ->with('tournament', $tournament);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param Tournament $tournament
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, Tournament $tournament)
    {
        $request->validate([
            'name'=>'required',
            'date'=>'required',
            'start_time'=>'required',
            'end_time'=>'required'
        ]);

        $tournament->name = $request->name;
        $tournament->date = $request->date;
        $tournament->start_time = $request->start_time;
        $tournament->end_time = $request->end_time;
        $tournament->save();

        return redirect()->route('tournaments.index');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param Tournament $tournament
     * @return Response
     */
    public function destroy(Tournament $tournament)
    {
        $tournament->delete();

        return redirect()->route('tournaments.index');
    }
}
