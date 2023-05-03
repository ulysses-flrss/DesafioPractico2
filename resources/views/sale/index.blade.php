@extends('layouts.menu')

@section('title', 'Ventas | Textil Export')

@section('content')
<div >
    <h1>Ventas registradas:</h1>
    <br>
    <table class="striped">
        <thead>
            <th>ID de la Venta</th>
            <th>Nombre del Producto</th>
            <th>Cantidad</th>
            <th>Fecha de la Venta</th>
            <th>Total</th>
        </thead>
        <tbody>
        @foreach ($sales as $sal)
                    <tr>
                        <td>{{$sal['id']}}</td>
                        <td>{{$sal['idProduct']}}</td>
                        <td>{{$sal['quantity']}}</td>
                        <td>{{$sal['saleDate']}}</td>
                        <td>{{$sal['total']}}</td>

                        
                    </tr>
                @endforeach
        </tbody>
        
    </table>
</div>
@endsection