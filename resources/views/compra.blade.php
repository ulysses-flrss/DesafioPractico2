@extends('layouts.menu')

@section('title', 'Compra | Textil Export')

@section('content')

<h1>Datos de la Tarjeta</h1>
<br>

<div class="row">
    <form action="" class="col s12">
        <div class="row">
            <div class="input-field col s12">
                <label for="id">No. Tarjeta:</label>
                <input type="text" name="tarjeta" id="tarjeta" class="validate">
            </div>
            <div  class="input-field col s12">
                <label for="id">Fecha de vencimiento:</label>
                <input type="text" name="vencimiento" id="vencimiento" class="validate">
            </div>
            <div class="input-field col s12">
                <label for="id">CVV:</label>
                <input type="text" name="vencimiento" id="vencimiento" class="validate">
            </div>
            <div>
                <label for="">Monto: $</label>
                <label for=""></label>
            </div>
        </div>
    </form>
</div>

@endsection