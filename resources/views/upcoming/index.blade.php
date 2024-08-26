@extends('layout')

@section('nav')
    <nav>
        <a href="/">Home</a>
        <a href="/tournaments">Toernooien</a>
        <a href="/teams">Teams</a>
        <a href="/players">Spelers</a>
        <a href="/upcoming" class="active">Opkomend</a>
        <a href="/schools">Scholen</a>

    </nav>
@endsection

@section('content')
    <h1><b>Eerstvolgende toernooi</b></h1>
    <p>Kom ook zwerkbal spelen op het volgende toernooi!</p>

    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-body" style="padding-bottom: 15%">
                        <p class="card-title">Aankomend toernooi:</p>
                        <h1 class="card-text" style="font-weight: bolder; font-size: 40px;">
                            @if($nextTournament == null)
                                <p>Er is geen toernooi gepland</p>
                            @else
                                {{ $nextTournament->name }}</h1>
                                <h4>Van</h4>
                                <h3 style="font-style: italic">{{ \Carbon\Carbon::parse($nextTournament->date)->format('d-m-Y')}}</h3>
                                <h4>tot</h4>
                                <h5 style="font-style: italic">{{ \Carbon\Carbon::parse($nextTournament->start_time)->format('H:i:s') }} - {{ \Carbon\Carbon::parse($nextTournament->end_time)->format('H:i:s') }}</h5>
                        @endif
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
    </div>

@endsection
