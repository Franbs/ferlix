@extends("layouts.main")

@section("page-title", "Home")

@section("content")

<h1 class="text-center text-danger">Películas y Series</h1>

<div class="container mt-5">
  <form action="{{ route('search') }}" method="get">
    {{-- SEARCH BAR --}}
    <div class="row height d-flex justify-content-center align-items-center mb-4">
      <div class="col-md-6">
        <div>
          <input type="text" name="search" class="form-control form-input" placeholder="Buscar..."> 
        </div>
      </div>
      <div class="col-md-1">
        <button class="btn btn-primary">Enviar</button>            
      </div>
    </div>
    {{-- FILTERS --}}
    <div class="container">
      <div class="row justify-content-evenly ">
        <div class="dropdown mt-4 col-4 text-center">
          <select class="form-select" name="genre" id="genre_select">
            <option value="" {{ old('genre') == "" ? "selected" : ""}}>Todas las categorias</option>
            <option value="action" {{ old('genre') == "action" ? "selected" : ""}}>Acción</option>
            <option value="scienceFiction" {{ old('genre') == "scienceFiction" ? "selected" : ""}}>Ciencia Ficción</option>
            <option value="romance" {{ old('genre') == "romance" ? "selected" : ""}}>Romance</option>
            <option value="adventure" {{ old('genre') == "adventure" ? "selected" : ""}}>Aventuras</option>
            <option value="cartoon" {{ old('genre') == "cartoon" ? "selected" : ""}}>Dibujos animados</option>
          </select>
        </div>
        <div class="dropdown mt-4 col-4 text-center">
          <select class="form-select" name="dateSort" id="dateSort_select">
            <option value="asc" {{ old('dateSort') == "asc" ? "selected" : ""}}>Ascendiente</option>
            <option value="desc" {{ old('dateSort') == "desc" ? "selected" : ""}}>Descendiente</option>
          </select>
        </div>
        <div class="dropdown mt-4 col-4 text-center">
          <select class="form-select" name="type" id="type_select">
            <option value="" {{ old('type') == '' ? 'selected' : '' }}>Peliculas y series</option>
            <option value="pelicula" {{ old('type') == 'pelicula' ? 'selected' : '' }}>Pelicula</option>
            <option value="serie" {{ old('type') == 'serie' ? 'selected' : '' }}>Serie</option>
          </select>
        </div>
      </div>
    </div>
  </form>
  

  
</div>

<div class="album py-5 ">
  <div class="container">

    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">

      @if($movies->isNotEmpty())
        @foreach ($movies as $movie)
          <form action="{{ route('stream') }}" method="post">
          {{--<form action="{{ route('stream', $movie["title"]) }}" method="post">--}}
            @csrf
            <div class="col">
              <div class="card shadow-sm">
                <img class="card-img-top" src="{{$movie["image"]}}" alt="">
                <div class="card-body text-center">
                  <h5 class="card-title">{{$movie["title"]}}</h5>
                  {{--<a href="{{ route('stream', $movie) }}">--}}
                    {{--<button type="submit" class="btn btn-outline-danger">Ver</button>--}}
                    <input type="hidden" name="btnVer" value="{{ $movie["title"] }}">
                    <input class="btn btn-outline-danger" type="submit" value="Ver">
                  {{--</a>--}}
                </div>
              </div>
            </div>
          </form>
        @endforeach
      @else 
        <div>
          <h2>No posts found</h2>
        </div>
      @endif

    </div>
  </div>
</div>

@endsection