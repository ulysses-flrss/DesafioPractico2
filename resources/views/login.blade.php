@extends('layouts.layout')

@section('title', 'Inicia Sesión | Textil Export')

@section('content')
<h1>Iniciar Sesión</h1>
<div class="row">
    <form action="" class="col s12">
    @csrf    

    <div class="row">
        <div class="input-field col s12">
            <label for="email">Correo:</label>
            <input type="email" name="email" id="email" class="validate">
        </div>

        <div class="input-field col s12">
            <label for="password">Contraseña:</label>
            <input type="password" name="password" id="password" class="validate">
        </div>
        
            <input type="submit" value="Iniciar sesión" class="waves-effect waves-light btn">
        </form>

        <a href="{{route()}}" class="waves-effect waves-light btn">No tengo cuenta</a>
    </div>

    </div>
@endsection