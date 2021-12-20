@extends("layouts.main")

@section("page-title", "Favorites")

@section("content")

<div class="row mt-5">
    <div class="col text-center">
        <h1>Favorites</h1>
    </div>
</div>

<!-- https://mdbootstrap.com/snippets/jquery/ascensus/135508 -->

<div class="row mt-5">
    <div class="col">
        @foreach ($movies as $movie)
            <h2>{{ $movie['title'] }}</h2>
        @endforeach
    </div>
</div>

@endsection