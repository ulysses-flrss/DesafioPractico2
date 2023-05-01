@extends('layouts.menu')

@section('title', 'Registrar Producto | Textil Export')

@section('content')

<h1>Registrar Productos</h1>
<div class="row">
    <form action="{{route('product.store')}}" class="col s12" method="POST">
    @csrf    

    <div class="row">
        <div class="input-field col s12">
            <label for="id">ID:</label>
            <input type="text" name="id" id="id" class="validate">
        </div>
        <div class="input-field col s12">
            <label for="name">Nombre:</label>
            <input type="text" name="name" id="name" class="validate">
        </div>
        <div class="input-field col s12">
            <label for="description">Descripcion:</label>
            <textarea id="textarea1" class="materialize-textarea"></textarea>
        </div>
        <div class="file-field input-field">
            <div class="btn">
                <span>Subir imagen</span>
                <input type="file" accept="image/png,image/jpeg,image/jpg">
            </div>
            <div class="file-path-wrapper">
                <input class="file-path validate" type="text">
            </div>
        </div>
        <div class="input-field col s12">
            <label for="category">Categoria:</label>
            <select name="category" id="category">
                
            </select>
        </div>

            <input type="hidden" name="state" id="state" class="validate" value="enable">

            <input type="submit" value="Registrar Producto" class="waves-effect waves-light btn">
        </form>

    </div>
</div>
    
@endsection