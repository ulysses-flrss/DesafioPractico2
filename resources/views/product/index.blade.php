@extends('layouts.menu')

@section('title', 'Productos | Textil Export')

@section('content')
<div>
    <a href="{{route('product.create')}}" class="waves-effect waves-light btn">Agregar Producto</a>
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
                        <td>{{$prod['name']}}</td>
                        <td>{{$prod['description']}}</td>
                        <td>{{$prod['img']}}</td>
                        <td>{{$prod['category']}}</td>
                        <td>{{$prod['price']}}</td>
                        <td>{{$prod['stock']}}</td>
                        <td>
                            <form method="POST" action="{{ route('product.destroy', ['product' => $prod]) }}">
                                @csrf
                                @method('DELETE')
                                <button type="submit">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
        </tbody>
    </table>
</div>
@endsection