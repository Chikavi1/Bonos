@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row ">
        <div class="col-md-4">
            <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="../public/pattern.png" alt="Card image cap">
                <div class="card-body">
                    <p class="card-text">Hola, <a href="/profile">{{ $user->name }}</a>.</p>
                </div>
            </div>
        </div>
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    Premios
                </div>
                <div class="card-body">
                    <h5 class="card-title">Descubre los premios que tenemos para ti.</h5>
                    <p class="card-text">Tus compras generan puntos, averigua cuales son los premios que tenemos disponibles para ti.</p>
                    <a href="/rewards"class="btn btn-primary">Ver Premios</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
