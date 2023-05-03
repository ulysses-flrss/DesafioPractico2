@extends('layouts.menu')

@section('title', 'Editar Producto | Textil Export')

@section('content')
<div class="row">
    <h1>Modifica datos del producto</h1>
<form action="{{route('product.update', ['product'=>$product])}}" class="col s12" method="POST">
    @csrf    
    @method('PUT')
    <div class="row">
        <div class="input-field col s12">
            <label for="id">ID:</label>
            <input type="text" name="id" id="id" readonly class="validate" value="{{$product->id}}">
        </div>
        <div class="input-field col s12">
            <label for="name">Nombre:</label>
            <input type="text" name="name" id="name" class="validate" value="{{$product->name}}">
            @error('name')
                    <p>{{$message}}</p>
            @enderror
        </div>
        <div class="input-field col s12">
            <label for="description">Descripcion:</label>
            <textarea id="textarea1" name="description" class="materialize-textarea">{{$product->description}}</textarea>
            @error('description')
                    <p>{{$message}}</p>
            @enderror
        </div>
        {{-- <div class="file-field input-field">
            <div class="btn">
                <span>Subir imagen</span>
                <input type="file" id="image" accept="image/png,image/jpeg,image/jpg" class="validate" value="{{$product->image}}">
                @error('file')
                    <p>{{$message}}</p>
                @enderror
            </div>
            <div class="file-path-wrapper">
                <input class="file-path validate" type="text">
                @error('text')
                    <p>{{$message}}</p>
                @enderror
            </div>
        </div> --}}
        <!-- TERMINAR LO DEL SELECT*/ -->
        <div class="input-field col s12">
            <select name="category" id="category">
                @foreach ($categories as $cat)
                    <option value="{{$cat->id}}" {{ $cat->id == $product->category ? 'selected' : '' }}>{{$cat->name}}</option>
                @endforeach
            </select>
            @error('category')
            <p>{{$message}}</p>
            @enderror
            <label for="category">Categoria:</label>
        </div>

        <div class="input-field col s12">
            <label for="price">Precio:</label>
            <input type="number" step="0.01" name="price" id="price" class="validate" value="{{$product->price}}">
            @error('price')
                    <p>{{$message}}</p>
            @enderror
        </div>

        <div class="input-field col s12">
            <label for="stock">Existencias:</label>
            <input type="number" step="1" name="stock" id="stock" class="validate" value="{{$product->stock}}">
            @error('stock')
                    <p>{{$message}}</p>
            @enderror
        </div>




            <input type="submit" value="Modificar Producto" class="waves-effect waves-light btn">
    </form>
</div>
@endsection