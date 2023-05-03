@extends('layouts.layout')


@section('menu')
    @auth
        @if (Auth::user()->user_type == "administrador")
        <nav>
            <div  class="nav-wrapper">
                <ul id="nav-mobile" class="right hide-on-med-and-down">
                    <li><a href="{{route('product.index')}}">Inventario</a></li>
                    <li><a href="{{route('category.index')}}">Categoria</a></li>
                    <li><a href="{{route('sale.index')}}">Ventas</a></li>
                    <li><a href="{{route('user.index')}}">Usuarios</a></li>
                    <li><a href="{{route('client.index')}}">Clientes</a></li>
                    <li><a href="{{route('logout')}}">Cerrar Sesión</a></li>
                </ul>
            </div>
        </nav>
        @elseif (Auth::user()->user_type == "empleado")
        <nav>
            <div  class="nav-wrapper">
                <ul id="nav-mobile" class="right hide-on-med-and-down">
                    <li><a href="{{route('product.index')}}">Inventario</a></li>
                    <li><a href="{{route('sale.index')}}">Ventas</a></li>
                    <li><a href="{{route('logout')}}">Cerrar Sesión</a></li>
                </ul>
            </div>
        </nav>
        @else
        <nav>
            <div  class="nav-wrapper">
                <ul id="nav-mobile" class="right hide-on-med-and-down">
                    <li><a href="{{route('client.listar')}}">Productos</a></li>
                    <li><a href="{{route('client.carrito')}}">Carrito de Compras</a></li>
                    <li><a href="{{route('logout')}}">Cerrar Sesión</a></li>
                </ul>
            </div>
        </nav>
        @endif
    @endauth

    @guest
    <nav>
        <div  class="nav-wrapper">
            <ul id="nav-mobile" class="right hide-on-med-and-down"> 
                <li><a href="{{route('login')}}">Iniciar Sesión</a></li>
                <li><a href="{{route('client.register')}}">Crear Cuenta</a></li>
            </ul>
        </div>
    </nav>
    @endguest    
@endsection