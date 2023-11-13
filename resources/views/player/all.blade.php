@extends('layouts.main')

@section('container')
<h2 class="mb-md-5">Top Player</h2>
<table class="table">
    <thead>
        <tr>
            <th scope="col">No</th>
            <th scope="col">Name</th>
            <th scope="col">Nationality</th>
            <th scope="col">Age</th>
            <th scope="col">Total Win</th>
            <th scope="col">First Joined</th>
            <th scope="col">Details</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($racers as $showRacers)
        <tr>
            <th scope="row">{{$showRacers['racer_id']}}</th>
            <td>{{$showRacers['racer_name']}}</td>
            <td>{{$showRacers['nationality']}}</td>
            <td>{{$showRacers['age']}}</td>
            <td>{{$showRacers['total_wins']}}</td>
            <td>{{$showRacers['first_race_date']}}</td>
            <td><a type="button" class="btn btn-light" href="/player/detail/{{ $showRacers -> id}}">Detail</a></td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection