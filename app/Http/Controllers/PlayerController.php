<?php

namespace App\Http\Controllers;

use App\Models\Player;
use App\Models\Team;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Response;
use Illuminate\Http\Request;

class PlayerController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View
     */
    public function index(): View|Factory|Application
    {
        $players = Player::all();
        return view('Players/index', [
            'players' => $players,
        ]);

    }


    public function create(): Factory|View|Application
    {
        return view('Players/create');
    }

    public function store(Request $request): \Illuminate\Http\RedirectResponse
    {

        $request->validate([
            'name' => 'required',
            'country' => 'required',
            'role' => 'required',
            'team_id' => 'required'
        ]);

        $player = new Player();
        $player->name = $request->name;
        $player->country = $request->country;
        $player->role = $request->role;
        $player->team_id = $request->team_id;
        $player->save();

        return redirect()->route('players.index');
    }

    public function edit($id)
    {
        $player = Player::find($id);
        $teams = Team::all();
        return view('Players/edit')
            ->with('player', $player)
            ->with('teams', $teams);

    }

    public function update(Request $request, $id): \Illuminate\Http\RedirectResponse
    {

        $request->validate([
            'name' => 'required',
            'country' => 'required',
            'role' => 'required',
            'team_id' => 'required'
        ]);

        $player = Player::find($id);
        $player->name = $request->name;
        $player->country = $request->country;
        $player->role = $request->role;
        $player->team_id = $request->team_id;

        $player->save();
        return redirect()->route('players.index');
    }

    public function destroy($id)
    {
        $player = Player::find($id);
        $player->delete();
        return redirect()->route('players.index');
    }






}
