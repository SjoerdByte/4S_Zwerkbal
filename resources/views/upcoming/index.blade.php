@extends('layout')

@section('nav')
    <nav>
        <a href="/" class="active">Home</a>
        <a href="/tournaments">Toernooien</a>
        <a href="/teams">Teams</a>
        <a href="/players">Spelers</a>
    </nav>
@endsection

@section('content')

    <h1><b>Eerstvolgende toernooi</b></h1>
    <p>Kom ook zwerkbal spelen op het volgende toernooi!</p>

    <div class="container" style="width: 75%; display: flex;">

        <div class="col-lg-6" style="margin-right: 5%">
            <div class="card">
                <div class="card-body">
                    <p class="card-title">Aantal aankomende toernooien:</p>
                    <h1 class="card-text" style="font-weight: bolder; font-size: 40px">5</h1>
                    <h4></h4>
                </div>
            </div>
        </div>

        <div class="col-lg-6">
            <div class="card">
                <div class="card-body">
                    <img class="img-fluid d-none d-sm-block" src="/img/snitch.png" alt="Zwerkbal">
                </div>
            </div>
        </div>

    </div>

@endsection
