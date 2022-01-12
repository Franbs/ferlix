@extends("layouts.main")

@section("page-title", "Register")

@section("content")

<section class="vh-100">
  <div class="container py-5 h-100">
    <div class="row d-flex align-items-center justify-content-center h-100">
     
      <div class="col-md-7 col-lg-5 col-xl-5 offset-xl-1">
        <div class="text-center mb-2">
          <img src="/img/logo-transparent.png" alt="Logo" srcset="" height="200" style="background: transparent;">
        </div>
        <x-auth-validation-errors class="mb-4" :errors="$errors" />
        
        {{-- Form --}}
        <form action="{{ route('register') }}" class="row d-flex justify-content-center align-items-center" method="POST" >
          @csrf
          <!-- UserName input -->
          <div class="form-outline mb-4">
            <input type="text" id="userName_input" name="userName" class="form-control form-control-lg" placeholder="Nombre de usuario" value="{{old("userName")}}"/>
          </div>

          {{-- Name input--}}
          <div class="form-outline mb-4">
            <input type="text" id="name_input" name="name" class="form-control form-control-lg" placeholder="Nombre" value="{{old("name")}}"/>
          </div>

          {{-- Email input--}}
          <div class="form-outline mb-4">
            <input type="email" id="email_input" name="email" class="form-control form-control-lg" placeholder="Correo electrónico" value="{{old("email")}}"/>
          </div>

          <!-- Password input (hash) -->
          <div class="form-outline mb-4">
            <input type="password" id="password_input" name="hash" class="form-control form-control-lg" placeholder="Contraseña" value="{{old("hash")}}"/>
            {{-- <label class="form-label" for="form1Example23">Contraseña</label> --}}
          </div>

          <!-- Submit button -->
          <button type="submit" class="btn btn-primary btn-lg btn-block mb-4">Registrarse</button>
          <a href="{{ route('login') }}" class="btn btn-outline-secondary btn-lg btn-block mb-4">
            Iniciar sesión
          </a>

        </form>
      </div>
    </div>
  </div>
</section>

@endsection