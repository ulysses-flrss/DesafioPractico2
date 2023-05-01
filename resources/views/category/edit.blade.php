@extends('layouts.menu')

@section('title', 'Editar Categoría | Textil Export')

@section('content')
<div class="row">
    <form action="{{route('category.update', ['category'=>$category])}}" class="col s12">
        @csrf
        <div class="row">
            <div class="input-field col s12">
                <label for="id">ID:</label>
                <input type="text" name="id" id="id" class="validate" value="{{$category->id}}">
            </div>
            <div class="input-field col s6">
                <label for="name">Nombre de la Categoría:</label>
                <input type="text" name="name" id="name" value="" readonly class="validate" value="{{$category->name}}">
            </div>
            

                <input type="submit" value="Modificar Categoría" class="waves-effect waves-light btn">
        </div>
    </form>
</div>
@endsection