@extends('layouts.menu')

@section('title', 'Usuarios | Textil Export')

@section('content')
<div>
    <a href="{{route('user.create')}}" class="waves-effect waves-light btn" id="agregar">Agregar Usuario</a>
    <table class="striped">
        <thead>
            <th>ID de Usuario</th>
            <th>Nombres</th>
            <th>Apellidos</th>
            <th>Correo</th>
            <th>Tipo de Usuario</th>
        </thead>
        <tbody>
        @foreach ($users as $use)
                    <tr>
                        <td>{{$use['id']}}</td>
                        <td>{{$use['name']}}</td>
                        <td>{{$use['last_name']}}</td>
                        <td>{{$use['email']}}</td>
                        <td>{{$use['user_type']}}</td>
                        <td>
                            <form method="POST" action="{{ route('user.destroy', ['user' => $use]) }}">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="waves-effect waves-light btn" id="eliminar">Eliminar</button>
                            </form>

                            <form method="GET" action="{{ route('user.edit', ['user' => $use]) }}">
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