<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('page-title')</title>
    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</head>
<body>
    <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">
        <div class="container   align-items-center flex-wrap align-items-center justify-content-center">
            <nav class="navbar navbar-expand-lg navbar-default navbar-light">
                <div class="container-fluid">
                    <a href="/" class="d-flex align-items-center col-md-3 mb-2 mb-md-0 text-dark text-decoration-none">
                        <svg height="40" width="200">
                            <text x="0" y="30" fill="red" font-weight="bold" font-size="1.5em">FERLIX</text>
                        </svg>
                    </a>
                    <div class="navbar-header ">
                        <button type="button" class="navbar-toggler" data-bs-toggle="collapse"
                            data-bs-target="#bs-example-navbar-collapse-1">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                    </div>
                    <div class="d-flex flex-row-reverse">
                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                            <ul class="navbar-nav me-2 mb-2 mb-lg-0">
                                <a href="{{ route('billboard') }}">
                                    <li class="nav-item active"><button type="button" class="btn btn-outline-danger me-3">Cartelera</button></li>
                                </a>
                                @auth
                                    <form action="{{ route('logout') }}" method="post">
                                        @csrf
                                        <button class="btn btn-outline-primary me-3" type="submit">Cerrar sesión</button>
                                    </form>
                                @endauth
                                @guest
                                    <a href="{{ route('login') }}">
                                        <li class="nav-item"><button type="button" class="btn btn-outline-primary me-3">Iniciar Sesión</button></li>
                                    </a>
                                    <a href="{{ route('register') }}">
                                        <li class="nav-item"><button type="button" class="btn btn-primary">Registrarse</button></li>
                                    </a>
                                @endguest

                            </ul>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </header>
    <section class="container">
        @yield("content")
    </section>
</body>
</html>