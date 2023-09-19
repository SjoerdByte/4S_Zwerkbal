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

    <h1>Test</h1>
    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Minus, eligendi porro! Asperiores odio deleniti voluptatibus obcaecati corporis tempora quos numquam molestiae! Dolorum quis hic doloribus debitis nesciunt minima, quisquam optio.</p>

    <div class="container" style="display: flex">
        <div style="width: 50%;">
            <div class="card">
                <div class="card-body">
                    <p class="card-title">Aantal aankomende toernooien:</p>
                    <h1 class="card-text" style="font-weight: bolder; font-size: 40px">5</h1>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <p class="card-title">Totaal aantal teams:</p>
                    <h1 class="card-text" style="font-weight: bolder; font-size: 40px">26</h1>
                </div>
            </div>
        </div>
        <div style="width: 50%;">
            <div class="card">
                <div class="card-body">

                    <img class="img-fluid d-none d-sm-block" style="max-width: 100%" src="img/snitch.png" alt="Zwerkbal">


                </div>
            </div>
        </div>



    </div>
@endsection


