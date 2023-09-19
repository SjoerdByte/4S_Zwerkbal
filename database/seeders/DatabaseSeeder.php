<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Tournament;
use App\Models\Team;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // Je kunt hier je eigen seeders invoegen:

        //Tournament 1
        $tournament = new Tournament();
        $tournament->name = "EK Zwerkbal " . date('Y');
        $tournament->date = date("Y-m-d", strtotime("+14 days"));
        $tournament->start_time = rand(1, 20) . ":00:00";
        $tournament->save();

        //Tournament 2
        $tournament = new Tournament();
        $tournament->name = "Zwerkbalcup";
        $tournament->date = date("Y-m-d", strtotime("-8 months"));
        $tournament->start_time = rand(1, 20) . ":00:00";
        $tournament->save();

        //Tournament 3
        $tournament = new Tournament();
        $tournament->name = "Scholentoernooi " . (date('Y')+1);
        $tournament->date = date("Y-m-d", strtotime("+13 months"));
        $tournament->start_time = rand(1, 20) . ":00:00";
        $tournament->save();

        //Tournament 4
        $tournament = new Tournament();
        $tournament->name = "ZwerkbalBeker";
        $tournament->date = date("Y-m-d");
        $tournament->start_time = rand(1, 20) . ":00:00";
        $tournament->save();

        //Tournament 5
        $tournament = new Tournament();
        $tournament->name = "ZwerkbalBeker" . (date('Y')+1);
        $tournament->date = date("Y-m-d", strtotime("-1 year"));
        $tournament->start_time = rand(1, 20) . ":00:00";
        $tournament->save();


        $team = new Team();
        $team->name = "Fc poes";
        $team->type = "Commercial";
        $team->place = "Ghent";
        $team->country = "Belgium";
        $team->save();

        $team = new Team();
        $team->name = "Fc Kater";
        $team->type = "School";
        $team->place = "Rotterdam";
        $team->country = "Netherlands";
        $team->save();

        $team = new Team();
        $team->name = "Fc Hond";
        $team->type = "Senior";
        $team->place = "Amsterdam";
        $team->country = "Netherlands";
        $team->save();

        $team = new Team();
        $team->name = "De Rooie Rakkers";
        $team->type = "Professionals";
        $team->place = "Gloucester";
        $team->country = "Scotland";
        $team->save();

        $team = new Team();
        $team->name = "De Groene Goblins";
        $team->type = "Country";
        $team->place = "Belfast";
        $team->country = "Ireland";
        $team->save();

        $team = new Team();
        $team->name = "De Blauwe Bliksems";
        $team->type = "Local";
        $team->place = "London";
        $team->country = "England";
        $team->save();



        //
        // NIETS AANPASSEN TUSSEN DEZE REGELS!
        // ~!@#$%^&**()_+
        // +_)(*&^%$#@!~
        // NIETS AANPASSEN TUSSEN DEZE REGELS!
        //
    }
}
