@extends('layouts.menu')

@section('title', 'Registrar Usuario | Textil Export')

@section('content')

<div class="row">
    <h1>Ingresa un nuevo usuario</h1>
    <form action="{{route('user.store')}}" class="col s12" method="POST">
        @csrf
        <div class="row">
        <div class="input-field col s6">
            <label for="">Nombres</label>
            <input type="text" name="name" id="name" class="validate">

            @error('name')
                <p>{{ $message }}</p>
            @enderror
        </div>

        <div class="input-field col s6">
            <label for="">Apellidos</label>
            <input type="text" name="last_name" id="last_name" class="validate">
            @error('last_name')
                <p>{{ $message }}</p>
            @enderror
        </div>

        <div class="input-field col s12">
            <label for="">Correo</label>
            <input type="text" name="email" id="email" class="validate">
            @error('email')
                <p>{{ $message }}</p>
            @enderror
        </div>

        <div class="input-field col s12">
            <label for="">Contraseña</label>
            <input type="password" name="password" id="password" class="validate">
            @error('password')
                <p>{{ $message }}</p>
            @enderror
        </div>

        <div class="input-field col s12">
            <select name="user_type" id="user_type">
                <option value="administrador">Administrador</option>
                <option value="empleado">Empleado</option>
            </select>
            @error('user_type')
            <p>{{ $message }}</p>
            @enderror
            <label for="user_type">Tipo de Usuario</label>
        </div>  


        <input type="submit" value="Agregar Usuario" class="waves-effect waves-light btn">
    </form>
        </div>
</div>



<script src="{{asset('js/materialize.js')}}"></script>

@endsection