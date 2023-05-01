@extends('layouts.menu')

@section('title', 'Clientes | Textil Export')

@section('content')
<div>
    <a href="{{route('client.create')}}" class="waves-effect waves-light btn">Agregar Cliente</a>
    <table class="striped">
        <thead>
            <th>ID del Cliente</th>
            <th>Nombres del Cliente</th>
            <th>Apellidos del Cliente</th>
            <th>Correo del Cliente</th>

        </thead>

        <tbody>
                @foreach ($clients as $cli)
                    <tr>
                        <td>{{$cli['id']}}</td>
                        <td>{{$cli['name']}}</td>
                        <td>{{$cli['last_name']}}</td>
                        <td>{{$cli['email']}}</td>
                        <td>{{$cli['password']}}</td>
                        <td>{{$cli['state']}}</td>
                        <td>
                            <form method="POST" action="{{ route('client.destroy', ['client' => $cli]) }}">
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