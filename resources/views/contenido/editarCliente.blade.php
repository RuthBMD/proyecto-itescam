@extends('Layouts.maestro')
@section('content')

<div>
    <h1>Editar Cliente</h1>
    <form method="patch" action="/cliente">
    {!! csrf_field() !!}
        Id:<br>
        <input type="text" name="idCliente" value=""><br>
        Nombre:<br>
        <input type="text" name="nombre" value=""><br>
        Apellidos:<br>
        <input type="text" name="apellidos" value="">
        Dirección:<br>
        <input type="text" name="apellidos" value="">
        <button type="submit" class="btn">Guardar</button>
    </form>
</div>

@endsection;