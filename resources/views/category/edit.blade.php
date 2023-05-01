@extends('layouts.menu')

@section('title', 'Editar Categoría | Textil Export')

@section('content')
<div class="row">
    <form class="col s12">
        @csrf
        <div class="row">
            <div class="input-field col s12">
                <label for="id">ID:</label>
                <input type="text" name="id" id="id" class="validate">
            </div>
            <div class="input-field col s6">
                <label for="name">Nombre de la Categoría:</label>
                <input type="text" name="id" id="id" value="" readonly class="validate">
            </div>
            
            <divclass="input-field col s6">
                <label for="name">Nombre de la Categoría:</label>
                <input type="text" name="name" id="name" class="validate">
            </div>

                <input type="submit" value="Registrar Categoría" class="waves-effect waves-light btn">
        </div>
    </form>
</div>
@endsection