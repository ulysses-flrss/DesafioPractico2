@extends('layouts.layout')

@section('title', 'Registro | Textil Export')

@section('content')
<h1>Nueva Cuenta</h1>
<div class="row">
    <form action="" class="col s12">
    @csrf    

    <div class="row">
        <div class="input-field col s12">
            <label for="name">Nombre:</label>
            <input type="text" name="name" id="name" class="validate">
        </div>
        <div class="input-field col s12">
            <label for="last_name">Apellidos:</label>
            <input type="text" name="last_name" id="last_name" class="validate">
        </div>
        <div class="input-field col s12">
            <label for="email">Correo:</label>
            <input type="email" name="email" id="email" class="validate">
        </div>

        <div class="input-field col s12">
            <label for="password">Contraseña:</label>
            <input type="password" name="password" id="password" class="validate">
        </div>
        <div class="input-field col s12">
            <label for="state">Estado:</label>
            <input type="hidden" name="state" id="state" class="validate">
        </div>
        
        
            <input type="submit" value="Crear Cuenta" class="waves-effect waves-light btn">
        </form>

    </div>

</div>

@endsection