@extends('layouts.app')
 
@section('content')

@if ($message = Session::get('success'))
<div class="alert alert-success">
    <p>{{ $message }}</p>
</div>
@endif

{!! QrCode::size(250)->generate('ItSolutionStuff.com'); !!}

<a href="{{ url('rewards/create') }}">Crear Regalo</a>
    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Nombre</th>
            <th>Descripción</th>
            <th>Condiciones</th>
            <th>Fotos</th>
            <th width="280px">Action</th>
        </tr>
        @php
            $i = 0;
        @endphp
        @foreach ($rewards as $reward)
            <tr>
                <td>{{ $reward->id }}</td>
                <td>{{ $reward->name }}</td>
                <td>{{ $reward->description }}</td>
                <td>{{ $reward->conditions }}</td>
                <td><img style="width:200px;" src="{{ $reward->photos }}" alt="">  </td>                
                <td>
                    <form action="{{ route('rewards.destroy') }}" method="POST">
                        <a class="btn btn-info" href="{{ route('rewards.show',$reward->id) }}">Ver</a>
                        <a class="btn btn-primary" href="{{ route('rewards.edit',$reward->id) }}">Editar</a>
                        @csrf
                        <input type="hidden" name="id" value="{{ $reward->id }}">
                        <button type="submit" class="btn btn-danger">Eliminar</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>

@endsection
