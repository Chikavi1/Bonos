@extends('layouts.app')
 
@section('content')
    <div class="row">
        <div class="col-lg-11">
            <h2 class="text-capitalize">{{ $reward->name }}</h2>
        </div>
        <div class="col-lg-1">
            <a class="btn btn-primary" href="{{ url('rewards') }}"> Regresar</a>
        </div>
    </div>
    <table class="table table-bordered">
        <tr>
            <th>Nombre</th>
            <td>{{ $reward->name }}</td>
        </tr>
        <tr>
            <th>Descripción</th>
            <td>{{ $reward->description }}</td>
        </tr>
        <tr>
            <th>Condiciones</th>
            <td>{{ $reward->conditions }}</td>
        </tr>
        <tr>
            <th>Fotos</th>
            <td> <img style="width:200px;" src="{{ $reward->photos }}" alt=""> </td>
        </tr>
 
    </table>
@endsection