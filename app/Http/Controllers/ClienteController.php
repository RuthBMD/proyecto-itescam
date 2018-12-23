<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Cliente as Cliente;

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $clients=Cliente::all();
        return view('contenido.cliente', ['clientes' => $clients]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('contenido.insertCliente');


    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
            $clients = new Cliente;
            $clients-> nombre=$request->nombre;
            $clients-> apellidos = $request->apellidos;
            $clients-> direccion = $request->direccion;
            $clients->save();
            return redirect("/cliente");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($idCliente)
    {
        //
        $clients = Cliente::table('clients')->where('idCliente',$idCliente);
        return view('editarCliente',['clientes'=>$clients]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($clients)
    {
        //
        $clients=Cliente::find($clients->idCliente);
        return view('contenido.updCliente', ['clients'=>$clients]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $idCliente)
    {
        //
        $clients = Cliente::find($idCliente);
        $input = Request::all();
        $clients->update($input);
        return redirect('/cliente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($idCliente)
    {
        //
            DB::table('clientes')->where('idCliente',$idCliente)->delete();
            return redirect('/cliente'); 
            //  
        
    }
}
