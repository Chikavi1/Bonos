    @extends('layouts.app')
    
    @section('content')
    <div class="row">
        <div class="col-md-3">
        <ul class="list-group">
            <li class="list-group-item">Editar perfil </li>
            <li class="list-group-item">Convertirte en provedor</li>
            <li class="list-group-item">FAQ</li>
            <li class="list-group-item">Atención al cliente</li>
            <li class="list-group-item">Cerrar sesión</li>
        </ul>

        </div>
    
        <div class="col-md-9">
            {{ $user->name }}
        </div>
    </div>
    @endsection