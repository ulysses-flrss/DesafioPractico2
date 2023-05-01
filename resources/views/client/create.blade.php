@extends('layouts.menu')

@section('title', 'Registrar Cliente | Textil Export')

@section('content')
<div class="row">
    <form action="{{route('client.store')}}" class="col s12" method="POST">
        @csrf
        <div class="row">
            <div class="input-field col s6">
                <label for="name">Nombres del Cliente:</label>
                <input type="text" name="name" id="name" class="validate">
            </div>

            <div class="input-field col s6">
                <label for="last_name">Apellidos del Cliente:</label>
                <input type="text" name="last_name" id="last_name" class="validate">
            </div>

            <div class="input-field col s12">
                <label for="email">Correo del Cliente:</label>
                <input type="email" name="email" id="email" class="validate">
            </div>

            <div class="input-field col s12">
                <label for="">Contraseña:</label>
                <input type="text" name="password" id="password" class="validate">
            </div>

            <div class="input-field col s12">
                <label for="">Confirmar Contraseña:</label>
                <input type="text" class="validate">
            </div>

            <div>
                <input type="submit" value="Registrar Cliente" class="waves-effect waves-light btn">
            </div>
        </div>
    </form>
</div>
@endsection