@extends('layouts.menu')

@section('title', 'Editar Usuario | Textil Export')

@section('content')
<div class="row">
<form action="" class="col s12">
        <div class="row">
            <div class="input-field col s6">
                <label for="">ID</label>
                <input type="text" name="id" id="id" class="validate">
            </div>

            <div class="input-field col s6">
                <label for="">Nombres</label>
                <input type="text" name="name" id="name" class="validate">
            </div>
    
            <div class="input-field col s6">
                <label for="">Apellidos</label>
                <input type="text" name="last_name" id="last_name" class="validate">
            </div>
    
            <div class="input-field col s12">
                <label for="">Correo</label>
                <input type="text" name="email" id="email" class="validate">
            </div>
    
            <div class="input-field col s12">
                <label for="">Contraseña</label>
                <input type="text" name="password" id="password" class="validate">
            </div>
    
            <div class="input-field col s12">
                <label for="">Tipo de Usuario</label>
                <select name="" id="">
                    <option value="">Administrador</option>
                    <option value="">Empleado</option>
                </select>
            </div>

            <input type="submit" value="Modificar Usuario" class="waves-effect waves-light btn">
    </form>
</div>
@endsection