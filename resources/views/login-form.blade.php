@extends("layouts.forms")

@section("page-title", "Login")

@section("content")

<section class="vh-100">
  <div class="container py-5 h-100">
    <div class="row d-flex align-items-center justify-content-center h-100">
     
      <div class="col-md-7 col-lg-5 col-xl-5 offset-xl-1">
        <div class="text-center mb-2">
          <img src="/img/logo-transparent.png" alt="Logo" srcset="" height="200" style="background: transparent;">
        </div>
        <form class="row d-flex justify-content-center align-items-center">
          <!-- Email input -->
          <div class="form-outline mb-4">
            <input type="text" id="userName_input" class="form-control form-control-lg" placeholder="Nombre de usuario" />
            {{-- <label class="form-label" for="form1Example13">Nombre de usuario</label> --}}
          </div>

          <!-- Password input -->
          <div class="form-outline mb-4">
            <input type="password" id="password_input" class="form-control form-control-lg" placeholder="Contraseña" />
            {{-- <label class="form-label" for="form1Example23">Contraseña</label> --}}
          </div>

          <div class="d-flex justify-content-around align-items-center mb-4">
            <!-- Checkbox -->
            {{-- <div class="form-check">
              <input
                class="form-check-input"
                type="checkbox"
                value=""
                id="form1Example3"
                checked
              />
              <label class="form-check-label" for="form1Example3"> Remember me </label>
            </div> --}}
            {{-- <a href="#!">Forgot password?</a> --}}
          </div>

          <!-- Submit button -->
          <button type="submit" class="btn btn-primary btn-lg btn-block mb-4">Iniciar sesión</button>
          <button type="button" class="btn btn-secondary btn-lg btn-block">Registrarse</button>

        </form>
      </div>
    </div>
  </div>
</section>

@endsection