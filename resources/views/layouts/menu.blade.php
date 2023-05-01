@extends('layouts.layout')


@section('menu')
    <nav>
        <div  class="nav-wrapper">
            <ul id="nav-mobile" class="right hide-on-med-and-down">
                <li><a href="{{route('product.index')}}">Inventario</a></li>
                <li><a href="{{route('category.index')}}">Categoria</a></li>
                <li><a href="{{route('sale.index')}}">Ventas</a></li>
                <li><a href="{{route('user.index')}}">Usuarios</a></li>
                <li><a href="{{route('client.index')}}">Clientes</a></li>
            </ul>
        </div>
    </nav>
@endsection