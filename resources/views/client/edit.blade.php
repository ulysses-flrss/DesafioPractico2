@extends('layouts.menu')

@section('title', 'Registrar Cliente | Textil Export')

@section('content')
<div class="row">
    <form action="" class="col s12">
        @csrf
        <div class="row">
            <div class="input-field col s12">
                <label for="id">ID:</label>
                <input type="text" name="id" id="id" class="validate">
            </div>
            
            <div class="input-field col s6">
                <label for="name">Nombres del Cliente:</label>
                <input type="text" name="name" id="name" value="" class="validate">
            </div>

            <div class="input-field col s6">
                <label for="last_name">Apellidos del Cliente:</label>
                <input type="text" name="last_name" id="last_name" value="" class="validate">
            </div>

            <div class="input-field col s6">
                <label for="email">Correo del Cliente:</label>
                <input type="email" name="email" id="email" value="" class="validate">
            </div>

            <div class="input-field col s12">
                <label for="state">Estado:</label>
                <select name="" id="">
                    <option value="enable">Habilitado</option>
                    <option value="disable">Deshabilitado</option>
                </select>
            </div>
            
                <input type="submit" value="Modificar Cliente" class="waves-effect waves-light btn">
        </div>
    </form>
</div>
@endsection