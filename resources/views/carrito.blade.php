@extends('layouts.menu')

@section('title', 'Carrito de compra | Textil Export')

@section('content')

<h1>Lista de compras</h1>
<br>
<table>
    <thead>
        <th>Nombre</th>
        <th>Cantidad</th>
        <th>Total</th>
    </thead>
    <tbody>
        @foreach ( as )
            
        @endforeach
    </tbody>
</table>
<div>
    <a href="" class="waves-effect waves-light btn">Comprar</a>
</div>

@endsection