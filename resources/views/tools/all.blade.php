@extends('layouts.main')
@section('container')
<h2 class="mb-md-5">Inventory</h2>
<table class="table">
    <thead>
        <tr>
            <th scope="col">No</th>
            <th scope="col">Name</th>
            <th scope="col">Function</th>
            <th scope="col">Stock</th>
            <th scope="col">Price</th>
            <th scope="col">Date Buyyed</th>
            <th scope="col">Details</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($horses_tools as $showTools)
        <tr>
            <th scope="row">{{$showTools['tool_number']}}</th>
            <td>{{$showTools['name']}}</td>
            <td>{{$showTools['function']}}</td>
            <td>{{$showTools['stock']}}</td>
            <td>{{$showTools['price']}}</td>
            <td>{{$showTools['date_buyyed']}}</td>
            <td><a type="button" class="btn btn-light" href="/tools/detail/{{ $showTools -> id}}">Detail</a></td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection