@extends('layouts.menu')

@section('title', 'Editar Categoría | Textil Export')

@section('content')
<div class="row">
    <h1>Modificar categoria</h1>
    <br>
    <form action="{{route('category.update', ['category'=>$category])}}" class="col s12" method="POST">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="input-field col s12">
                <label for="id">ID:</label>
                <input type="text" name="id" id="id" class="validate" readonly value="{{$category->id}}">
            </div>
            <div class="input-field col s6">
                <label for="name">Nombre de la Categoría:</label>
                <input type="text" name="name" id="name" class="validate" value="{{$category->name}}">

                @error('name')
                    <p>{{$message}}</p>
                @enderror
                <input type="submit" value="Modificar Categoría" class="waves-effect waves-light btn">
            </div>
            
        </div>
    </form>
</div>
@endsection