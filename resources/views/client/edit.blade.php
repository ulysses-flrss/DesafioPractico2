@extends('layouts.menu')

@section('title', 'Registrar Cliente | Textil Export')

@section('content')
<div class="row">
    <h1>Modifica datos del cliente</h1>
    <form action="{{route('client.update', ['client'=>$client])}}" class="col s12" method="POST">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="input-field col s12">
                <label for="id">ID:</label>
                <input type="text" readonly name="id" id="id" class="validate" value="{{$client->id}}">
            </div>
            
            <div class="input-field col s6">
                <label for="name">Nombres del Cliente:</label>
                <input type="text" name="name" id="name"  class="validate" value="{{$client->name}}">
                @error('name')
                    <p>{{$message}}</p>
                @enderror
            </div>

            <div class="input-field col s6">
                <label for="last_name">Apellidos del Cliente:</label>
                <input type="text" name="last_name" id="last_name" class="validate" value="{{$client->last_name}}">
                @error('last_name')
                    <p>{{$message}}</p>
                @enderror
            </div>

            <div class="input-field col s12">
                <label for="email">Correo del Cliente:</label>
                <input type="email" name="email" id="email" class="validate" value="{{$client->email}}">
                @error('email')
                    <p>{{$message}}</p>
                @enderror
            </div>

            <div class="input-field col s12">
                <label for="state">Estado:</label>
                <select name="state" id="state">
                    @if ($client->state=="enable")
                        <option value="enable" selected>Habilitado</option>
                        <option value="disable">Deshabilitado</option>

                    @endif
                    @if ($client->state=="disable")
                        <option value="enable">Habilitado</option>
                        <option value="disable" selected>Deshabilitado</option>
                    @endif

                    
                </select>
                @error('state')
                    <p>{{$message}}</p>
                @enderror
            </div>
            
                <input type="submit" value="Modificar Cliente" class="waves-effect waves-light btn">
        </div>
    </form>
</div>
@endsection