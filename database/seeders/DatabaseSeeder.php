<?php

Namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Tournament;
use App\Models\Team;
use App\Models\School;
use App\Models\Player;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */

//    Tournament data

//    NVT

//    Team data
    private $playerNames = [
        "Aaliyah", "Aaron", "Abigail", "Adam", "Addison", "Adrian", "Aiden", "Alex", "Alexa", "Alexander", "Alexandra", "Alexis", "Alice", "Allison", "Alyssa", "Amelia", "Andrew", "Angel", "Anna", "Anthony", "Aria", "Ariana", "Arianna", "Asher", "Ashley", "Aubrey", "Audrey", "Austin", "Ava", "Avery", "Bailey", "Benjamin", "Bentley", "Blake", "Brayden", "Braylon", "Brianna", "Brody", "Brooke", "Brooklyn", "Bryson", "Caleb", "Cameron", "Camila", "Caroline", "Carson", "Carter", "Charlie", "Charlotte", "Chase", "Chloe", "Christian", "Christopher", "Claire", "Clara", "Cole", "Colton", "Connor", "Cooper", "Daniel", "David", "Declan", "Dominic", "Dylan", "Easton", "Eleanor", "Elena", "Eli", "Elias", "Elijah", "Elizabeth", "Ella", "Ellie", "Emily", "Emma", "Emmanuel", "Ethan", "Eva", "Evan",
    ];
    private $types = [
        "Commercial", "School", "Senior", "Professionals", "Country", "Local"
    ];
    private $countries = [
        "Belgium", "Netherlands", "Scotland", "Ireland", "England", "France", "Germany", "Italy", "Spain", "Portugal", "Poland", "Sweden", "Norway", "Denmark", "Finland", "Iceland", "Switzerland", "Austria", "Hungary", "Czech Republic", "Slovakia", "Slovenia", "Croatia", "Bosnia and Herzegovina", "Serbia", "Montenegro", "Albania", "Greece", "Bulgaria", "Romania", "Moldova", "Ukraine", "Belarus", "Russia", "Turkey", "Georgia", "Armenia", "Azerbaijan", "Cyprus", "Malta", "United Kingdom", "Iceland", "Greenland", "Faroe Islands", "Estonia", "Latvia", "Lithuania", "Kazakhstan", "Uzbekistan", "Turkmenistan", "Tajikistan", "Kyrgyzstan", "Afghanistan", "Pakistan", "India", "Nepal", "Bhutan", "Bangladesh", "Sri Lanka", "Myanmar", "Thailand", "Cambodia", "Laos", "Vietnam", "Malaysia", "Singapore", "Indonesia", "Brunei", "Philippines", "East Timor", "China", "Mongolia", "North Korea", "South Korea", "Japan", "Taiwan", "Hong Kong", "Macau", "Australia", "New Zealand", "Papua New Guinea", "Fiji", "Solomon Islands", "Vanuatu", "New Caledonia", "French Polynesia", "Samoa", "Kiribati", "Tonga", "Tuvalu", "Micronesia", "Marshall Islands", "Palau", "Nauru", "Cook Islands", "Niue", "American Samoa", "Tokelau", "Wallis and Futuna", "Pitcairn Islands", "Guam", "Northern Mariana Islands", "Puerto Rico", "U.S. Virgin Islands", "American Samoa", "Baker Island", "Howland Island", "Jarvis Island", "Johnston Atoll", "Kingman Reef", "Midway Atoll", "Navassa Island", "Palmyra Atoll", "Wake Island"
    ];
    private $places = [
        "Ghent", "Rotterdam", "Amsterdam", "Gloucester", "Belfast", "London", "Paris", "Stockholm", "New York", "Amazon Rainforest", "Minami Iwo Jima", "Mountains of the Moon"
    ];
    private $functions = [
        "Chaser", "Seeker", "Keeper", "Beater"
    ];

//    School data
    private $schools = [
        "College of Wizardry", "Hogwarts School of Witchcraft and Wizardry", "Beauxbatons Academy of Magic", "Durmstrang Institute", "Ilvermorny School of Witchcraft and Wizardry", "Castelobruxo", "Mahoutokoro School of Magic", "Uagadou School of Magic"
    ];



    public function run()
    {
        // Je kunt hier je eigen seeders invoegen:

        //Tournament 1
        $tournament = new Tournament();
        $tournament->name = "EK Zwerkbal " . date('Y');
        $tournament->date = date("Y-m-d", strtotime("+14 days"));
        $tournament->start_time = rand(1, 20) . ":00:00";
        $tournament->end_time = date("H:i:s", strtotime($tournament->start_time) + rand(1, 5) * 3600);
        $tournament->save();

        //Tournament 2
        $tournament = new Tournament();
        $tournament->name = "Zwerkbalcup";
        $tournament->date = date("Y-m-d", strtotime("-8 months"));
        $tournament->start_time = rand(1, 20) . ":00:00";
        $tournament->end_time = date("H:i:s", strtotime($tournament->start_time) + rand(1, 5) * 3600);
        $tournament->save();

        //Tournament 3
        $tournament = new Tournament();
        $tournament->name = "Scholentoernooi " . (date('Y')+1);
        $tournament->date = date("Y-m-d", strtotime("+13 months"));
        $tournament->start_time = rand(1, 20) . ":00:00";
        $tournament->end_time = date("H:i:s", strtotime($tournament->start_time) + rand(1, 5) * 3600);
        $tournament->save();

        //Tournament 4
        $tournament = new Tournament();
        $tournament->name = "ZwerkbalBeker";
        $tournament->date = date("Y-m-d");
        $tournament->start_time = rand(1, 20) . ":00:00";
        $tournament->end_time = date("H:i:s", strtotime($tournament->start_time) + rand(1, 5) * 3600);
        $tournament->save();

        //Tournament 5
        $tournament = new Tournament();
        $tournament->name = "ZwerkbalBeker" . (date('Y')+1);
        $tournament->date = date("Y-m-d", strtotime("-1 year"));
        $tournament->start_time = rand(1, 20) . ":00:00";
        $tournament->end_time = date("H:i:s", strtotime($tournament->start_time) + rand(1, 5) * 3600);
        $tournament->save();


        $team = new Team();
        $team->name = "Fc poes";
        $team->type = $this->types[rand(0, count($this->types)-1)];
        $team->place = $this->places[rand(0, count($this->places)-1)];
        $team->country =$this->countries[rand(0, count($this->countries)-1)];
        $team->save();

        $team = new Team();
        $team->name = "Fc Kater";
        $team->type = $this->types[rand(0, count($this->types)-1)];
        $team->place = $this->places[rand(0, count($this->places)-1)];
        $team->country =$this->countries[rand(0, count($this->countries)-1)];
        $team->save();

        $team = new Team();
        $team->name = "Fc Hond";
        $team->type = $this->types[rand(0, count($this->types)-1)];
        $team->place = $this->places[rand(0, count($this->places)-1)];
        $team->country =$this->countries[rand(0, count($this->countries)-1)];
        $team->save();

        $team = new Team();
        $team->name = "De Rooie Rakkers";
        $team->type = $this->types[rand(0, count($this->types)-1)];
        $team->place = $this->places[rand(0, count($this->places)-1)];
        $team->country =$this->countries[rand(0, count($this->countries)-1)];
        $team->save();

        $team = new Team();
        $team->name = "De Blauwe Bliksems";
        $team->type = $this->types[rand(0, count($this->types)-1)];
        $team->place = $this->places[rand(0, count($this->places)-1)];
        $team->country =$this->countries[rand(0, count($this->countries)-1)];
        $team->save();

        $team = new Team();
        $team->name = "De Groene Goblins";
        $team->type = $this->types[rand(0, count($this->types)-1)];
        $team->place = $this->places[rand(0, count($this->places)-1)];
        $team->country =$this->countries[rand(0, count($this->countries)-1)];
        $team->save();

        $school = new School();
        $school->name = $this->schools[rand(0, count($this->schools)-1)];
        $school->location = 'Ghent';
        $school->save();

        $school = new School();
        $school->name = $this->schools[rand(0, count($this->schools)-1)];
        $school->location = 'Rotterdam';
        $school->save();

        $school = new School();
        $school->name = $this->schools[rand(0, count($this->schools)-1)];
        $school->location = 'Amsterdam';
        $school->save();

        $school = new School();
        $school->name = $this->schools[rand(0, count($this->schools)-1)];
        $school->location = 'Gloucester';
        $school->save();

        $school = new School();
        $school->name = $this->schools[rand(0, count($this->schools)-1)];
        $school->location = 'Belfast';
        $school->save();

        $school = new School();
        $school->name = $this->schools[rand(0, count($this->schools)-1)];
        $school->location = 'London';
        $school->save();

        $school = new School();
        $school->name = $this->schools[rand(0, count($this->schools)-1)];
        $school->location = 'Paris';
        $school->save();

        $school = new School();
        $school->name = $this->schools[rand(0, count($this->schools)-1)];
        $school->location = 'Stockholm';
        $school->save();

        $player = new Player();
        $player->name = "Harry Potter";
        $player->country = "England";
        $player->role = "Seeker";
        $player->team_id = $team->id;
        $player->school_id = $school->id;
        $player->tournament_id = $tournament->id;
        $player->save();

        $player = new Player();
        $player->name = "Ron Weasley";
        $player->country = "England";
        $player->role = "Keeper";
        $player->team_id = $team->id;
        $player->school_id = $school->id;
        $player->tournament_id = $tournament->id;
        $player->save();

        $player = new Player();
        $player->name = "Hermione Granger";
        $player->country = "England";
        $player->role = "Chaser";
        $player->team_id = $team->id;
        $player->school_id = $school->id;
        $player->tournament_id = $tournament->id;
        $player->save();

        $player = new Player();
        $player->name = "Draco Malfoy";
        $player->country = "England";
        $player->role = "Beater";
        $player->team_id = $team->id;
        $player->school_id = $school->id;
        $player->tournament_id = $tournament->id;

        $player->save();

        $player = new Player();
        $player->name = "Cedric Diggory";
        $player->country = "England";
        $player->role = "Seeker";
        $player->team_id = $team->id;
        $player->school_id = $school->id;
        $player->tournament_id = $tournament->id;
        $player->save();

        $player = new Player();
        $player->name = "Cho Chang";
        $player->country = "England";
        $player->role = "Chaser";
        $player->team_id = $team->id;
        $player->school_id = $school->id;
        $player->tournament_id = $tournament->id;
        $player->save();

        $player = new Player();
        $player->name = "Ginny Weasley";
        $player->country = "England";
        $player->role = "Chaser";
        $player->team_id = $team->id;
        $player->school_id = $school->id;
        $player->tournament_id = $tournament->id;
        $player->save();


        //
        // NIETS AANPASSEN TUSSEN DEZE REGELS!
        // ~!@#$%^&**()_+
        // +_)(*&^%$#@!~
        // NIETS AANPASSEN TUSSEN DEZE REGELS!
        //
    }
}
