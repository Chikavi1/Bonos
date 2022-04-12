@extends('layouts.app')
    
    @section('content')
    <a href="/movements/create" class="btn btn-primary">Generar Movimiento</a>
    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Fecha</th>
            <th>Cantidad</th>
            <th>Estatus</th>
        </tr>
        @php
            $i = 0;
        @endphp
        @foreach ($movements as $movement)
            <tr>
                <td>{{ $reward->id }}</td>
                <td>{{ $reward->created_at }}</td>
                <td>{{ $reward->amount }}</td>
                <td>{{ $reward->status }}</td>
            </tr>
        @endforeach
    </table>


    <hr>
    {!! QrCode::size(250)->generate('ItSolutionStuff.com'); !!}

    @endsection