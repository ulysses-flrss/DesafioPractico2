@extends('layouts.menu')

@section('title', 'Categorías | Textil Export')

@section('content')

    <a href="{{route('category.create')}}" class="waves-effect waves-light btn">Agregar Categoria</a>
    <div>
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
                                <button type="submit">Eliminar</button>
                            </form>

                            <form method="POST" action="{{ route('category.edit', ['category' => $cat]) }}">
                                @csrf
                                @method('PUT')
                                <button type="submit">Modificar</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
            
        </table>
    </div>
@endsection