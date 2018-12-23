@extends('Layouts.maestro')
@section('content')
    
    <a href= "{{action('ClienteController@create')}}">Nuevo</a>
    
    <table>
        <tr>
            <td>Nombre</td>
            <td>Apellido</td>
            <td>Dirección</td>
        </tr>
        <tbody>
            @foreach($clientes as $cliente)
                <tr>
                    <td>{{ $cliente->idCliente }}</td>
                    <td>{{ $cliente->nombre }}</td>
                    <td>{{ $cliente->apellidos }}</td>
                    <td>{{ $cliente->direccion }}</td>
                    <td><a href= "{{action('ClienteController@edit',$cliente->idCliente)}}">Editar</a></td>
                   <td>
                   <form action="{{action('ClienteController@destroy',$cliente->idCliente)}}" method="POST" >
                   {{ csrf_field()}}
                   <input type="hidden" name="_method" value="DELETE">
                    <input type= "submit" class="btn btn-link" value="Borrar">

                 </form>
                 </td>
                </tr>
            @endforeach

        </tbody>
    </table>
    @endsection