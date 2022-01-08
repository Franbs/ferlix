@extends("layouts.main")

@section("page-title", "Home")

@section("content")
<div class="container col-xxl-8 px-4 py-5">
    <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
      <div class="col-10 col-sm-8 col-lg-6">
        <img src="/img/home/films-mosaic.png" class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes" loading="lazy" width="700" height="500">
      </div>
      <div class="col-lg-6">
        <h1 class="display-5 fw-bold lh-1 mb-3">
            {{-- <img src="/img/logo-transparent.png" class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes" loading="lazy" height="500"> --}}
            Si no está en Ferlix, no existe
        </h1>
        {{-- <h2>Si no está en Ferlix, no existe2</h2> --}}
        {{-- <div class="d-grid gap-2 d-md-flex justify-content-md-start">
          <button type="button" class="btn btn-primary btn-lg px-4 me-md-2">Primary</button>
          <button type="button" class="btn btn-outline-secondary btn-lg px-4">Default</button>
        </div> --}}
      </div>
    </div>
  </div>
@endsection