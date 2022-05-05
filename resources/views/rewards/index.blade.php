@extends('layouts.app')
 
@section('content')

@if ($message = Session::get('success'))
<div class="alert alert-success">
    <p>{{ $message }}</p>
</div>
@endif

@if(Auth::user()->type === 0)

<a href="{{ url('rewards/create') }}" class="btn btn-primary mb-2">Crear Regalo</a>
    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Nombre</th>
            <th>Puntos</th>
            <th>Descripción</th>
            <th>Condiciones</th>
            <th>Fotos</th>
            <th width="280px">Acciones</th>
        </tr>
        @php
            $i = 0;
        @endphp
        @foreach($rewards as $reward)
            <tr>
                <td>{{ $reward->id }}</td>
                <td>{{ $reward->name }}</td>
                <td>{{ $reward->points }}</td>
                <td>{!! $reward->description !!}</td>
                <td>{!! $reward->conditions !!}</td>
                <td><img style="width:200px;" src="{{ URL::asset('public/photos/'.$reward->photos) }}" alt="imagen del regalo">  </td>                
                <td>
                    <form action="{{ route('rewards.destroy') }}" method="POST">
                        <a class="btn btn-outline-info" href="{{ route('rewards.show',$reward->id) }}"><i class="fa-solid fa-eye"></i></a>
                        <a class="btn btn-outline-primary" href="{{ route('rewards.edit',$reward->id) }}"><i class="fa-solid fa-pencil"></i></a>
                        @csrf
                        <input type="hidden" name="id" value="{{ $reward->id }}">
                        <button onClick="alert('¿estás seguro?')" type="submit" class="btn btn-outline-danger"><i class="fa-solid fa-trash-can"></i></button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
    @elseif(Auth::user()->type === 1)
    <h2>Regalos que tenemos para ti</h2>
    @foreach($rewards as $reward)
    <div class="card" style="width: 18rem;">
        <img class="card-img-top" src="{{ URL::asset('public/photos/'.$reward->photos) }}"  alt="Imagenes del regalo">
        <div class="card-body">
            <h5 class="card-title">{{ $reward->name }}</h5>
            <p class="text-success">Puntos {{ $reward->points }}</p>
            <p class="card-text">{!! $reward->description !!}</p>
            @if(Auth::user()->points > $reward->points)
            <p class="text-center "><a class="text-success" href="{{ route('rewards.show',$reward->id) }}">Canjear</a></p>
            @endif
            <p class="text-center"><a href="{{ route('rewards.show',$reward->id) }}">Ver</a></p>

        </div>
        </div>
    @endforeach
    @endif
@endsection
