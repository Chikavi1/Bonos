@extends('layouts.app')
 
@section('content')

@if ($message = Session::get('success'))
<div class="alert alert-success">
    <p>{{ $message }}</p>
</div>
@endif

@if(Auth::user()->type === 0);

<a href="{{ url('rewards/create') }}" class="btn btn-primary mb-2">Crear Regalo</a>
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
        @foreach($rewards as $reward)
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
    @elseif(Auth::user()->type === 1)
    <h2>Regalos que tenemos para ti</h2>
    @foreach($rewards as $reward)
    <div class="card" style="width: 18rem;">
        <img class="card-img-top" src="{{ $reward->photos }}" alt="Imagenes del regalo">
        <div class="card-body">
            <h5 class="card-title">{{ $reward->name }}</h5>
            <p class="card-text">{{ $reward->description }}</p>
        </div>
        </div>
    @endforeach
    @endif
@endsection
