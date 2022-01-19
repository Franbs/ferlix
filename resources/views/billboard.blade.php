@extends("layouts.main")

@section("page-title", "Home")

@section("content")

<h1 class="text-center text-danger">Películas y Series</h1>

<div class="container mt-5">
  <form action="{{ route('search') }}" method="get">
    {{-- SEARCH BAR --}}
    <div class="row height d-flex justify-content-center align-items-center">
      <div class="col-md-6">
        <div>
          <input type="text" name="search" class="form-control form-input" placeholder="Buscar..."> 
          <button class="btn btn-primary">Enviar</button>            
        </div>
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
          <select class="form-select" name="movieSerie" id="movieSerie_select">
            <option value="movie">Pelicula</option>
            <option value="serie">Serie</option>
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
      @else 
        <div>
          <h2>No posts found</h2>
        </div>
      @endif

    </div>
  </div>
</div>

@endsection