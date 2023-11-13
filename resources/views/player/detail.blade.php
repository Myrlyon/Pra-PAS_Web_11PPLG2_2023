@extends('layouts.main')

@section('container')
<h3 class="mt-5">{{$racers -> racer_name}}</h3>
<p>Nationality : {{$racers -> nationality}}</p>
<p>Age : {{$racers -> age}}</p>
<p>Total Wins at : {{$racers -> total_wins}}</p>
<p>First Race : {{$racers -> first_race_date}}</p>
@endsection