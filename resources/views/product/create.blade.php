@extends('layouts.menu')

@section('title', 'Registrar Producto | Textil Export')

@section('content')

<h1>Registrar Productos</h1>
<br>
<div class="row">
    <form action="{{route('product.store')}}" class="col s12" method="POST">
    @csrf    

    <div class="row">
        <div class="input-field col s12">
            <label for="id">ID:</label>
            <input type="text" name="id" id="id" class="validate">
            @error('id')
                    <p>{{$message}}</p>
            @enderror
        </div>

        <div class="input-field col s12">
            <label for="name">Nombre:</label>
            <input type="text" name="name" id="name" class="validate">
            @error('name')
                    <p>{{$message}}</p>
            @enderror
        </div>

        <div class="input-field col s12">
            <label for="description">Descripcion:</label>
            <textarea id="textarea1" name="description" class="materialize-textarea"></textarea>
            @error('description')
                    <p>{{$message}}</p>
            @enderror
        </div>
        {{-- <div class="file-field input-field">
            <div class="btn">
                <span>Subir imagen</span>
                <input type="file" accept="image/png,image/jpeg,image/jpg">
                @error('file')
                    <p>{{$message}}</p>
                @enderror
            </div>
            <div class="file-path-wrapper">
                <input class="file-path validate" type="text">
            </div>
        </div> --}}
        <div class="input-field col s12">
            <select name="category" id="category">
                @foreach ($categories as $cat)
                <option value="{{$cat->id}}" >{{$cat->name}}</option>
                @endforeach
            </select>
            @error('category')
            <p>{{$message}}</p>
            @enderror
            <label for="category">Categoria:</label>
        </div>

        <div class="input-field col s12">
            <label for="price">Precio:</label>
            <input type="number" step="0.01" name="price" id="price" class="validate">
            @error('price')
                    <p>{{$message}}</p>
            @enderror
        </div>

        <div class="input-field col s12">
            <label for="stock">Existencias:</label>
            <input type="number" step="1" name="stock" id="stock" class="validate">
            @error('stock')
                    <p>{{$message}}</p>
            @enderror
        </div>

            <input type="submit" value="Registrar Producto" class="waves-effect waves-light btn">
        </form>

    </div>
</div>
    
@endsection