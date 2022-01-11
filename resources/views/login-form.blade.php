@extends("layouts.main")

@section("page-title", "Login")

@section("content")

<section class="vh-100">
  <div class="container py-5 h-100">
    <div class="row d-flex align-items-center justify-content-center h-100">
     
      <div class="col-md-7 col-lg-5 col-xl-5 offset-xl-1">
        <div class="text-center mb-2">
          <img src="/img/logo-transparent.png" alt="Logo" srcset="" height="200" style="background: transparent;">
        </div>

        <form class="row d-flex justify-content-center align-items-center" method="POST">
          @csrf
          
          <!-- Email input -->
          <div class="form-outline mb-4">
            <input type="text" name="userName" id="userName" class="form-control form-control-lg" placeholder="Username" />
            {{-- <label class="form-label" for="form1Example13">Nombre de usuario</label> --}}
          </div>

          <!-- Password input -->
          <div class="form-outline mb-4">
            <input type="password" name="password" id="password" class="form-control form-control-lg" placeholder="Password" />
            {{-- <label class="form-label" for="form1Example23">Contraseña</label> --}}
          </div>

          @error('message')
            <div class="alert alert-danger" role="alert">
              Error
            </div>
          @enderror

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
          <div class="container">
            <div class="row">
              <div class="col text-center">
                <button type="submit" class="btn btn-primary justify-content-center ps-5 pe-5 pt-2 pb-2">Log in</button>
                <button type="button" class="btn btn-secondary justify-content-center ps-5 pe-5 pt-2 pb-2">Sign up</button>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</section>

@endsection