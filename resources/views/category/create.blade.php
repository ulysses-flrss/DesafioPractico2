@extends('layouts.menu')

@section('title', 'Registrar Categoría | Textil Export')

@section('content')
<div class="row">
    <h1>Ingresa una nueva categoria</h1>
    <br>
    <form action="{{route('category.store')}}" class="col s12" method="post">
        @csrf
        <div class="row">
            <div class="input-field col s6">
                <label for="name">Nombre de la Categoría:</label>
                <input type="text" name="name" id="name" class="validate">
                @error('name')
                    <p>{{$message}}</p>
                @enderror    
                <input type="submit" value="Registrar Categoría" class="waves-effect waves-light btn">
            </div>
            
        </div>
    </form>
</div>
@endsection