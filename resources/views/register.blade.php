@extends('layouts.menu')

@section('title', 'Registro | Textil Export')

@section('content')
<h1>Nueva Cuenta</h1>
<div class="row">
    <form action="{{route('register.client')}}" class="col s12" method="POST">
    @csrf    

    <div class="row">
        <div class="input-field col s12">
            <label for="name">Nombre:</label>
            <input type="text" name="name" id="name" class="validate">

            @error('name')
                <p>{{$message}}</p>
            @enderror
        </div>
        <div class="input-field col s12">
            <label for="last_name">Apellidos:</label>
            <input type="text" name="last_name" id="last_name" class="validate">
            @error('last_name')
                <p>{{$message}}</p>
            @enderror
        </div>
        <div class="input-field col s12">
            <label for="email">Correo:</label>
            <input type="email" name="email" id="email" class="validate">
            @error('email')
                <p>{{$message}}</p>
            @enderror
        </div>

        <div class="input-field col s12">
            <label for="password">Contraseña:</label>
            <input type="password" name="password" id="password" class="validate">
            @error('password')
                <p>{{$message}}</p>
            @enderror
        </div>

        <div class="input-field col s12">
            <label for="password_confirmation">Confirmar Contraseña:</label>
            <input type="password" name="password_confirmation" id="password_confirmation" class="validate">
            @error('password_confirmation')
                <p>{{$message}}</p>
            @enderror
        </div>
        <div class="input-field col s12">
            <label for="state">Estado:</label>
            <input type="hidden" name="state" id="state" value="enable" class="validate">
        </div>
            <input type="submit" value="Crear Cuenta" class="waves-effect waves-light btn">
        </form>

        <a href="{{route('login')}}" class="waves-effect waves-light btn">Ya tengo cuenta</a>

    </div>

</div>

@endsection