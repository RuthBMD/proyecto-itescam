@extends('Layouts.maestro')
@section('content')
    <form action="/cliente" method="post" id="contact_form">    
        {{ csrf_field() }} <!--Se crea la proteccion o token-->
    <div class = "nombrebd">
        <label for = "nombre"></label>
        <input type="text" placeholder="Nombre" name="nombre">
    </div>
    <div class = "apellidosbd">
        <label for = "apellidos"></label>
        <input type="text" placeholder="Apellido" name="apellidos">
    </div>
    <div class = "direccionbd">
        <label for = "direccion"></label>
        <input type="text" placeholder="Direccion" name="direccion">
        </div>
    <div class="submit">
        <input type="submit" value="guardar">
    </div>
    </form>
  @endsection