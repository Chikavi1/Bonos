@extends('layouts.app')
 
@section('content')
<h1>Editar</h1>

@if ($errors->any())
        <div class="alert alert-danger">
            <strong>Lo sentimos!</strong> Hay algunos errores, por favor, verifica estos campos.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{ url('rewards/update') }}" method="POST">
        @method('PATCH')    
        @csrf
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="txtFirstName">Nombre:</label>
                    <input type="text" class="form-control"  placeholder="Ingresa nombre" value="{{ $reward->name }}" name="name">
                </div>
            </div>
        </div>
       
        
        <div class="form-group">
            <label for="txtAddress">Descripción:</label>
            <textarea class="form-control"  name="description" rows="10" placeholder="Ingresa descripción">
            {{ $reward->description }}
            </textarea>
        </div>

        <div class="form-group">
            <label for="txtAddress">Condiciones:</label>
            <textarea class="form-control"  name="conditions" rows="10" placeholder="Ingresa Condiciones">
            {{ $reward->conditions }}
            </textarea>
        </div>

        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="txtFirstName">Fotos:</label>
                    <input type="text" class="form-control" value="{{ $reward->photos }}" placeholder="Ingresa foto" name="photos">
                </div>
            </div>
        </div>
        <input type="hidden" class="form-control"  value="{{ $reward->id }}" name="id">

        <button type="submit" class="btn btn-default">Editar</button>
    </form>
@endsection
