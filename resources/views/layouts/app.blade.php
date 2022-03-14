<!DOCTYPE html>
<html lang="en">
<head>
    <title>Bonos</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid right" >
    <a class="navbar-brand" href="/home">Bonos</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
      @if(Auth::user())
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/rewards">Premios</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/movements">Generar Movimiento</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/profile">Perfil</a>
        </li>

        <form method="POST" action="{{ route('logout') }}">
          @csrf
          <input type="button" class="btn btn-link"  style="color:red;"value="Cerrar sesión"></input>
        </form>


        
      </ul>
    @endif
    </div>
  </div>
</nav>
<div class="container">
    @yield('content')
</div>
</body>
</html>