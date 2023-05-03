@extends('layouts.menu')

@section('title', 'Editar Usuario | Textil Export')

@section('content')
<div class="row">
    <h1>Modifica los datos del usuario</h1>
    <form action="{{route('user.update', ['user'=>$user])}}" class="col s12" method="POST" >
        @csrf
        @method('PUT')
        <div class="row">
            <div class="input-field col s12">
                <label for="">ID</label>
                <input type="text" name="id" id="id" class="validate" readonly value="{{$user->id}}">
            </div>

            <div class="input-field col s6">
                <label for="">Nombres</label>
                <input type="text" name="name" id="name" class="validate"  value="{{$user->name}}">
                @error('name')
                    <p>{{$message}}</p>
                @enderror
            </div>
    
            <div class="input-field col s6">
                <label for="">Apellidos</label>
                <input type="text" name="last_name" id="last_name" class="validate"  value="{{$user->last_name}}">
                @error('last_name')
                    <p>{{$message}}</p>
                @enderror
            </div>
    
            <div class="input-field col s12">
                <label for="">Correo</label>
                <input type="text" name="email" id="email" class="validate"  value="{{$user->email}}">
                @error('email')
                    <p>{{$message}}</p>
                @enderror
            </div>
    
            {{-- <div class="input-field col s12">
                <label for="">Contraseña</label>
                <input type="password" name="password" id="password" class="validate"  value="{{ $user->password}}">
                @error('password')
                    <p>{{$message}}</p>
                @enderror
            </div> --}}
    
            <div class="input-field col s12">
                <label for="">Tipo de Usuario</label>
                <select name="user_type" id="user_type">
                    @if ($user->user_type=="administrador")
                        <option value="" selected>Administrador</option>
                        <option value="">Empleado</option>
                    @endif$use->

                    @if ($user->user_type=="empleado")
                        <option value="">Administrador</option>
                        <option value="" selected>Empleado</option>
                    @endif
                </select>
                @error('user_type')
                    <p>{{$message}}</p>
                @enderror
            </div>

            <input type="submit" value="Modificar Usuario" class="waves-effect waves-light btn">
    </form>
</div>
@endsection