@extends('layouts.menu')

@section('title', 'Registrar Cliente | Textil Export')

@section('content')
<div class="row">
    <h1>Ingresar nuevo cliente</h1>
    <br>
    <form action="{{route('client.store')}}" class="col s12" method="POST">
        @csrf
        <div class="row">
            <div class="input-field col s6">
                <label for="name">Nombres del Cliente:</label>
                <input type="text" name="name" id="name" class="validate">
                @error('name')
                    <p>{{$message}}</p>
                @enderror
            </div>

            <div class="input-field col s6">
                <label for="last_name">Apellidos del Cliente:</label>
                <input type="text" name="last_name" id="last_name" class="validate">
                @error('last_name')
                    <p>{{$message}}</p>
                @enderror
            </div>

            <div class="input-field col s12">
                <label for="email">Correo del Cliente:</label>
                <input type="email" name="email" id="email" class="validate">
                @error('email')
                    <p>{{$message}}</p>
                @enderror
            </div>

            <div class="input-field col s12">
                <label for="">Contraseña:</label>
                <input type="password" name="password" id="password" class="validate">
                @error('password')
                    <p>{{$message}}</p>
                @enderror
            </div>

            <div class="input-field col s12">
                <label for="">Confirmar Contraseña:</label>
                <input type="password" class="validate">
                @error('password')
                    <p>{{$message}}</p>
                @enderror
            </div>

            <input type="hidden" name="state" value="enable">

            <div>
                <input type="submit" value="Registrar Cliente" class="waves-effect waves-light btn">
            </div>
        </div>
    </form>
</div>
@endsection