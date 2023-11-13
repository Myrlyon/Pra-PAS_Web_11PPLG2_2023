@extends('layouts.main')

@section('container')
    <h2 class="mb-md-5">Marlen Stable</h2>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Name</th>
                <th scope="col">Breed</th>
                <th scope="col">Speed Km/H</th>
                <th scope="col">Colour</th>
                <th scope="col">Date Buyyed</th>
                <th scope="col">Details</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($horses as $showHorses)
            <tr>
                <th scope="row">{{$showHorses['no']}}</th>
                <td>{{$showHorses['name']}}</td>
                <td>{{$showHorses['breed']}}</td>
                <td>{{$showHorses['speed']}}</td>
                <td>{{$showHorses['colour']}}</td>
                <td>{{$showHorses['buyyed']}}</td>
                <td><a type="button" class="btn btn-light" href="/stable/detail/{{ $showHorses -> id}}">Detail</a></td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection