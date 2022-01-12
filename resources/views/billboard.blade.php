@extends("layouts.main")

@section("page-title", "Home")

@section("content")

<h1 class="text-center text-danger">Películas y Series</h1>

<div class="container mt-5">
  {{-- Search bar --}}
  <form action="{{ route('search') }}" method="get">
    <div class="row height d-flex justify-content-center align-items-center">
      <div class="col-md-6">
        <div class="form"> <i class="fa fa-search"></i> <input type="text" name="search" class="form-control form-input"
            placeholder="Buscar..."> <span class="left-pan"><i class="fa fa-microphone"></i></span> </div>
      </div>
    </div>
  </form>

  <div class="container">
    <div class="row justify-content-evenly ">
      <div class="dropdown mt-4 col-4 text-center">
        <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="genre_dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
          Género
        </a>
        <ul class="dropdown-menu" aria-labelledby="genre_dropdownMenuLink">
          <li><a class="dropdown-item" href="#">Acción</a></li>
          <li><a class="dropdown-item" href="#">Ciencia Ficción</a></li>
          <li><a class="dropdown-item" href="#">Romance</a></li>
          <li><a class="dropdown-item" href="#">Aventuras</a></li>
          <li><a class="dropdown-item" href="#">Dibujos animados</a></li>
        </ul>
      </div>
      <div class="dropdown mt-4 col-4 text-center">
        <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="date_dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
          Fecha
        </a>
        <ul class="dropdown-menu" aria-labelledby="date_dropdownMenuLink">
          <li><a class="dropdown-item" href="#">Ascendente</a></li>
          <li><a class="dropdown-item" href="#">Descendente</a></li>
        </ul>
      </div>
      <div class="dropdown mt-4 col-4 text-center">
        <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="filmOrMovie_dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
          Pelicula / Serie
        </a>
        <ul class="dropdown-menu" aria-labelledby="filmOrMovie_dropdownMenuLink">
          <li><a class="dropdown-item" href="#">Pelicula</a></li>
          <li><a class="dropdown-item" href="#">Serie</a></li>
        </ul>
      </div>
    </div>
  </div>
  

  
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