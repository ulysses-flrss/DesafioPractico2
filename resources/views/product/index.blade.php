@extends('layouts.menu')

@section('title', 'Productos | Textil Export')

@section('content')
<div>
    <a href="{{route('product.create')}}" class="waves-effect waves-light btn" id="agregar">Agregar Producto</a>
    <table class="striped">
        <thead>
            <th>ID del Producto</th>
            <th>Imagen del Producto</th>
            <th>Nombre del Producto</th>
            <th>Descripción del Producto</th>
            <th>Categoría</th>
            <th>Precio</th>
            <th>Existencias</th>
        </thead>
        <tbody>
        @foreach ($products as $prod)
                    <tr>
                        <td>{{$prod['id']}}</td>
                        <td>{{$prod['img']}}</td>
                        <td>{{$prod['name']}}</td>
                        <td>{{$prod['description']}}</td>
                        <td>{{$prod['category']}}</td>
                        <td>${{$prod['price']}}</td>
                        <td>{{$prod['stock']}}</td>
                        <td>
                            <form method="POST" action="{{ route('product.destroy', ['product' => $prod]) }}">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="waves-effect waves-light btn">Eliminar</button>
                            </form>

                            <form method="GET" action="{{ route('product.edit', ['product' => $prod]) }}">
                                @csrf
                                @method('GET')
                                <button type="submit" class="waves-effect waves-light btn" id="eliminar">Modificar</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
        </tbody>
    </table>
</div>
@endsection