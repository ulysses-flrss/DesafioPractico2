@extends('layouts.menu')

@section('title', 'Editar Producto | Textil Export')

@section('content')
<div class="row">
<form action="" class="col s12">
    @csrf    

    <div class="row">
        <div class="input-field col s12">
            <label for="id">ID:</label>
            <input type="text" name="idProducto" id="idProducto" class="validate">
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
                <input type="file" accept="image/png,image/jpeg,image/jpg" class="validate">
            </div>
            <div class="file-path-wrapper">
                <input class="file-path validate" type="text">
            </div>
        </div>
        <!-- TERMINAR LO DEL SELECT*/ -->
        <div class="input-field col s12">
            <label for="category">Categoria:</label>
            <select name="category" id="category">
                
            </select>
        </div>




            <input type="submit" value="Modificar Producto" class="waves-effect waves-light btn">
    </form>
</div>
@endsection