@extends('layouts.menu')

@section('title', 'Productos en venta | Textil Export')

@section('content')

<div class="row">
  <form action="{{route('busqueda')}}" method="GET" class="col s12">
    <div class="row">
      <div class="input-field col s6">
        <input type="text" name="termino" placeholder="Buscar..." class="validate">
        <button type="submit"  class="waves-effect waves-light btn">Buscar</button>
      </div>
    </div>
  </form>
</div>

<h1>Productos en venta...</h1>
<div></div>
@foreach ($products as $product)

<div class="row">
    <div class="col s12 m6">
      <div class="card">
        <div class="card-image">
          <img src="{{asset($product->img)}}">
          <span class="card-title">{{$product->name}}</span>
          <a class="btn-floating halfway-fab waves-effect waves-light red"><i class="material-icons">+</i></a>
        </div>
        <div class="card-content">
            <p>ID: {{$product->id}}</p>
            <p></p>
            <p>Descripción: {{$product->description}}</p>
            <p>Categoría: {{$product->category}}</p>
            <p>Precio: {{$product->price}}</p>
            <p>Existencias: {{$product->stock}}</p>
      </div>
    </div>
  </div>
@endforeach
    
</div>

@endsection