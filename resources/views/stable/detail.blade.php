@extends('layouts.main')

@section('container')
    <h3 class="mt-5">{{$horses -> name}}</h3>
    <p>Breed : {{$horses -> breed}}</p>
    <p>Speed : {{$horses -> speed}}</p>
    <p>Colour : {{$horses -> colour}}</p>
    <p>Buyyed at : {{$horses -> buyyed}}</p>
    <p>Total Raced : {{$horses -> totalrace}}</p>
@endsection