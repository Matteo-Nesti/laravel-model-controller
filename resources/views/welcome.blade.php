@extends('layouts.main')

@section('title', 'home')

@section('main')

    <div class="row gap-3">
        @foreach ($movies as $movie)
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">Titolo</h5>
                    <div class="card-title">{{ $movie['title'] }}</div>
                    <h5 class="card-title">Titolo originale</h5>
                    <div class="card-title">{{ $movie['original_title'] }}</div>
                    <h5 class="card-title">Nazionalita`</h5>
                    <div class="card-title">{{ $movie['nationality'] }}</div>
                    <h5 class="card-title">Data di uscita</h5>
                    <div class="card-title">{{ $movie['date'] }}</div>
                    <h5 class="card-title">Voto</h5>
                    <div class="card-title">{{ $movie['vote'] }}</div>
                </div>
            </div>
        @endforeach
    </div>

@endsection
