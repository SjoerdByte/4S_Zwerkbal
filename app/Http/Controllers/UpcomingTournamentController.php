<?php

namespace App\Http\Controllers;

use App\Models\Tournament;
use Carbon\Carbon;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class UpcomingTournamentController extends Controller
{
    public function upcoming(): \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|Application
    {
        $nextTournament = Tournament::where('date', '>=', Carbon::now())
            ->orderBy('date', 'asc')
            ->first();


        return view('upcoming.index', ['nextTournament' => $nextTournament]);
    }


}
