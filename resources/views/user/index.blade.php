@extends('layouts.menu')

@section('title', 'Usuarios | Textil Export')

@section('content')
<div>
    <a href="{{route('user.create')}}" class="waves-effect waves-light btn">Agregar Usuario</a>
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
                        <td>{{$use['password']}}</td>
                        <td>{{$use['user_type']}}</td>
                    </tr>
                @endforeach
        </tbody>
        
    </table>
</div>
@endsection