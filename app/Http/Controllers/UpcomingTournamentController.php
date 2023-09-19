<?php

namespace App\Http\Controllers;

use App\Models\Tournament;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class UpcomingTournamentController extends Controller
{
    public function index(): \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|Application
    {
        return view('upcoming_tournaments/index');
    }

    public function create(): \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|Application
    {
        return view('upcoming_tournaments/create');
    }

    public function store(Request $request): \Illuminate\Http\RedirectResponse
    {
        $request->validate([
            'name'=>'required',
            'date'=>'required|date_format:Y-m-d',
            'start_time'=>'required|date_format:H:i'
        ]);


        $tournament = new Tournament();
        $tournament->name = $request->name;
        $tournament->save();

        return redirect()->route('tournaments.index');
    }

    public function edit(Tournament $tournament): \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|Application
    {
        return view('tournaments/edit')
                ->with('tournament', $tournament);
    }

    public function update(Request $request, Tournament $tournament): \Illuminate\Http\RedirectResponse
    {
        $request->validate([
            'name'=>'required',
            'date'=>'required|date_format:Y-m-d',
            'start_time'=>'required|date_format:H:i'
        ]);

        $tournament->name = $request->name;
        $tournament->save();

        return redirect()->route('tournaments.index');
    }

    public function destroy(Tournament $tournament): \Illuminate\Http\RedirectResponse
    {
        $tournament->delete();

        return redirect()->route('tournaments.index');
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param Tournament $tournament
     * @return Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function show(Tournament $tournament):\Illuminate\Contracts\View\View|\Illuminate\Contracts\View\Factory|Application
    {
        return view('tournaments/show')
                ->with('tournament', $tournament);
    }

}
