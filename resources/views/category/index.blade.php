@extends('layouts.menu')

@section('title', 'Categorías | Textil Export')

@section('content')

    <a href="{{route('category.create')}}" class="waves-effect waves-light btn" id="agregar">Agregar Categoria</a>
    <div>
        <h1>Categorias</h1>
        <br>
        <table class="striped">
            <thead>
                <th>ID de Categoría</th>
                <th>Nombre de Categoría</th>
                <th></th>
            </thead>
            <tbody>
                @foreach ($categories as $cat)
                    <tr>
                        <td>{{$cat->id}}</td>
                        <td>{{$cat->name}}</td>
                        <td>
                            <form method="POST" action="{{ route('category.destroy', ['category' => $cat]) }}">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="waves-effect waves-light btn" id="eliminar">Eliminar</button>
                            </form>

                            <form method="GET" action="{{ route('category.edit', ['category' => $cat]) }}">
                                @csrf
                                @method('GET')
                                <button type="submit" class="waves-effect waves-light btn" id="modificar">Modificar</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
            
        </table>
    </div>
@endsection