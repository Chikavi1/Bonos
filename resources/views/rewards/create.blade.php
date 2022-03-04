@extends('layouts.app')
 
@section('content')
<h1>Crear</h1>

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
    <form action="{{ url('rewards/store') }}" method="POST">
        @csrf
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="txtFirstName">Nombre:</label>
                    <input type="text" class="form-control"  placeholder="Ingresa nombre" name="name">
                </div>
            </div>
        </div>
       
        
        <div class="form-group">
            <label for="txtAddress">Descripción:</label>
            <textarea class="form-control"  name="description" rows="10" placeholder="Ingresa descripción"></textarea>
        </div>

        <div class="form-group">
            <label for="txtAddress">Condiciones:</label>
            <textarea class="form-control"  name="conditions" rows="10" placeholder="Ingresa Condiciones"></textarea>
        </div>

        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="txtFirstName">Fotos:</label>
                    <input type="text" class="form-control"  placeholder="Ingresa foto" name="photos">
                </div>
            </div>
        </div>
        <button type="submit" class="btn btn-default">Crear</button>
    </form>
@endsection
