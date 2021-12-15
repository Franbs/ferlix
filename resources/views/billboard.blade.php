@extends("layouts.main")

@section("page-title", "Home")

@section("content")
{{-- @foreach ($movies as $movie)
<div>
    <img src="{{$movie['image']}}" alt="">
    <h2>{{$movie['title']}}</h2>
</div>
@endforeach --}}

<div class="album py-5 bg-light">
    <div class="container">

      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
        
        @foreach ($movies as $movie)
        <div class="col">
          <div class="card shadow-sm">
            <img class="card-img-top" src="{{$movie["image"]}}" alt="">
            <div class="card-body text-center">
              <h5 class="card-title">{{$movie["title"]}}</h5>
              <button class="btn btn-outline-danger" type="button">Ver</button>
            </div>
          </div>
        </div>
        @endforeach
        
      </div>
    </div>
  </div>

@endsection