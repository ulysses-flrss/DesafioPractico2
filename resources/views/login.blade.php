@extends('layouts.menu')

@section('title', 'Inicia Sesión | Textil Export')

@section('content')
<div class="row">
    
    <h1>Iniciar Sesión</h1>
    <form action="{{route('login.store')}}" class="col s12" method="POST">
    @csrf    
    @if (session('mensaje'))
        <p class="error-message">{{session('mensaje')}}</p>
    @endif
    <div class="row">
        <div class="input-field col s12">
            <label for="email">Correo:</label>
            <input type="email" name="email" id="email" class="validate">
            @error('email')
                <p class="error-message">{{$message}}</p>
            @enderror
        </div>

        <div class="input-field col s12">
            <label for="password">Contraseña:</label>
            <input type="password" name="password" id="password" class="validate">
            @error('password')
                <p class="error-message">{{$message}}</p>
            @enderror
        </div>
        
            <input type="submit" value="Iniciar sesión" class="waves-effect waves-light btn">
        </form>

        <a href="{{route('client.register')}}" class="waves-effect waves-light btn">No tengo cuenta</a>
    </div>

    </div>
@endsection