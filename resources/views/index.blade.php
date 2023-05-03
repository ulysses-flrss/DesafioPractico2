@extends('layouts.menu')

@section('title', 'Productos en venta | Textil Export')

@section('content')

<h1>Productos en venta...</h1>
<div></div>
@foreach ($products as $product)

<div class="row">
    <div class="col s12 m6">
      <div class="card">
        <div class="card-image">
          <img src="{{asset('img/prueba1.jpg')}}">
          <span class="card-title">{{$product->name}}</span>
          <a class="btn-floating halfway-fab waves-effect waves-light red"><i class="material-icons">+</i></a>
        </div>
        <div class="card-content">
            <p>ID: {{$product->id}}</p>
            {{-- <p>{{$product->img}}</p> --}}
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