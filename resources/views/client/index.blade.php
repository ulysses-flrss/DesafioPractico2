@extends('layouts.menu')

@section('title', 'Clientes | Textil Export')

@section('content')
<div>
    <a href="{{route('client.create')}}" class="waves-effect waves-light btn" id="agregar">Agregar Cliente</a>
    <table class="striped">
        <thead>
            <th>ID del Cliente</th>
            <th>Nombres del Cliente</th>
            <th>Apellidos del Cliente</th>
            <th>Correo del Cliente</th>
            <th>Estado</th>
        </thead>

        <tbody>
                @foreach ($clients as $cli)
                    <tr>
                        <td>{{$cli['id']}}</td>
                        <td>{{$cli['name']}}</td>
                        <td>{{$cli['last_name']}}</td>
                        <td>{{$cli['email']}}</td>

                        <td>{{$cli['state']}}</td>
                        <td>
                            <form method="POST" action="{{ route('client.destroy', ['client' => $cli]) }}">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="waves-effect waves-light btn" id="eliminar">Eliminar</button>
                            </form>

                            <form method="GET" action="{{ route('client.edit', ['client' => $cli]) }}">
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