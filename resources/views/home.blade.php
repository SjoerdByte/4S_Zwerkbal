@extends('layout')

@section('nav')
    <nav>
        <a href="/" class="active">Home</a>
        <a href="/tournaments">Toernooien</a>
        <a href="/teams">Teams</a>
        <a href="/players">Spelers</a>
        <a href="/upcoming">Opkomend</a>
        <a href="/schools">Scholen</a>
    </nav>
@endsection

@section('content')

    <h1>Test</h1>
    <p>Zwerkbal (Engels: Quidditch) is een sport voor tovenaars uit de Harry Potterboeken van J.K. Rowling. In de wereld van Harry Potter is Zwerkbal een populaire sport: veel mensen praten erover mee en zijn zeer enthousiast als er een groot toernooi wordt gespeeld. Ook heeft iedere heks of tovenaar wel een favoriet Zwerkbalteam.</p>
    <div class="container" style="display: flex">
        <div style="width: 50%;">
            <div class="card">
                <div class="card-body">
                    <p class="card-title">Aantal aankomende toernooien:</p>
                    <h1 class="card-text" style="font-weight: bolder; font-size: 40px">{{count($tournaments)}}</h1>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <p class="card-title">Totaal aantal teams:</p>
                    <h1 class="card-text" style="font-weight: bolder; font-size: 40px">{{count($teams)}}</h1>
                </div>
            </div>
        </div>
        <div style="width: 50%;">
            <div class="card">
                <div class="card-body">

                    <img class="img-fluid d-none d-sm-block" style="max-width: 100%; padding-bottom: 3%" src="img/snitch.png" alt="Zwerkbal">


                </div>
            </div>
        </div>



    </div>
@endsection


