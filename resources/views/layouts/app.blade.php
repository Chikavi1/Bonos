<!DOCTYPE html>
<html lang="en">
<head>
    <title>Bonos</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet"
/>
<!-- Google Fonts -->
<link
  href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
  rel="stylesheet"
/>
<!-- MDB -->
<link
  href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/4.0.0/mdb.min.css"
  rel="stylesheet"
/>

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
       
        @if(Auth::user()->type == 1)
        <li class="nav-item">
          <p class="nav-link active" style="color:#17202F;font-weight:bold;">{{Auth::user()->points}} Puntos</p>
        </li>
        @endif

        @if(Auth::user()->type != 2)
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/rewards">Premios</a>
        </li>
        @endif

        @if(Auth::user()->type == 3)
        <li class="nav-item">
          <a class="nav-link" href="/movements">Generar Movimiento</a>
        </li>
        @endif
        <li class="nav-item">
          <a class="nav-link" href="/profile">Perfil</a>
        </li>

        <form method="POST" action="{{ route('logout') }}">
          @csrf
          <input type="submit" class="btn btn-link"  style="color:red;text-decoration:none;"value="Cerrar sesi??n"></input>
        </form>


        
      </ul>
    @endif
    </div>
  </div>
</nav>
<div class="container mt-4">
    @yield('content')
</div>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="{{ asset('/vendors/ckeditor/ckeditor.js') }}"></script>
</body>
</html>