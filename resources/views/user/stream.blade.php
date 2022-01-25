@extends("layouts.main")

@section("page-title", "Stream")

@section("content")
{{--<div class="container-fluid">
    <a href="/" class="d-flex justify-content-center text-dark text-decoration-none">
        <svg width="173" height="140">
            <text class="text-align-center" x="0" y="100" fill="red" font-weight="bold" font-size="3em">FERLIX</text>
        </svg>
    </a>
</div>--}}

<div class="container mt-4">
    <div class="row">
        <div class="col-11">
            <h1>Text</h1>
        </div>
        <div class="col-1">
            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-star float-end" viewBox="0 0 16 16">
                <path d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.522-3.356c.33-.314.16-.888-.282-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767-3.686 1.894.694-3.957a.565.565 0 0 0-.163-.505L1.71 6.745l4.052-.576a.525.525 0 0 0 .393-.288L8 2.223l1.847 3.658a.525.525 0 0 0 .393.288l4.052.575-2.906 2.77a.565.565 0 0 0-.163.506l.694 3.957-3.686-1.894a.503.503 0 0 0-.461 0z"/>
            </svg>
        </div>
    </div>
    <div class="row">
        <div class="col text-center">
            <video width="1280" height="720" controls>
                <source src="" type="video/mp4">
                Tu navegador no soporta este formato de video.
            </video>
        </div>
    </div>
    <div class="row mt-5">
        <div class="col">
            <h2>Descripción</h2>
        </div>
        <div class="col">
            <button class="btn btn-primary float-end">Siguiente episodio</button>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col">
            <p>Some text</p>
        </div>
    </div>
</div>

@endsection