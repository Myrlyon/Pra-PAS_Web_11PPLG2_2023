@extends('layouts.main')

@section('container')
    <h3 class="mt-5">{{$horses_tools -> name}}</h3>
    <p>Breed : {{$horses_tools -> function}}</p>
    <p>Speed : {{$horses_tools -> stock}}</p>
    <p>Colour : {{$horses_tools -> price}}</p>
    <p>Buyyed at : {{$horses_tools -> date_buyyed}}</p>
@endsection