@extends("layouts.main")

@section("page-title", "Favoritos")

@section("content")

<div class="row mt-5">
    <div class="col text-center">
        <h1>Favoritos</h1>
    </div>
</div>

<!-- https://mdbootstrap.com/snippets/jquery/ascensus/135508 -->

<div class="album py-5 ">
    <div class="container">
  
      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
  
        {{-- {{dd($movies);}} --}}
        @empty(!$movies)
          @foreach ($movies as $movie)
            <div class="col">
              <div class="card shadow-sm">
                <img class="card-img-top" src="{{$movie["image"]}}" alt="">
                <div class="card-body text-center">
                  <h5 class="card-title">{{$movie["title"]}}</h5>
                  <a href="{{ route('stream', ['id' => $movie["id"]]) }}">
                    <button type="button" class="btn btn-outline-danger">Ver</button>
                  </a>
                </div>
              </div>
            </div>
          @endforeach
        @else 
          <div>
            <h2>No posts found</h2>
          </div>
        @endempty
  
      </div>
    </div>
  </div>

@endsection