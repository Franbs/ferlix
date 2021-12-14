@extends("layouts.main")

@section("page-title", "Home")

@section("content")
@foreach ($movies as $movie)
<div>
    <img src="baseDatos" alt="">
    <h2>{{$movie}}</h2>
</div>
@endforeach

@endsection