@extends('layouts.app')
    
    @section('content')
    <button type="button" class="btn btn-primary">Generar Movimiento</button>
<hr>
    {!! QrCode::size(250)->generate('ItSolutionStuff.com'); !!}

    @endsection