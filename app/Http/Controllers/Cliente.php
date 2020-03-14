<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Cliente extends Controller
 
{
    private $clientes = [
        ['id' => 1,'cliente_nome'=>'Aquarela'],
        ['id' => 2,'cliente_nome'=>'Aquarela do Brasil'],
        ['id' => 3,'cliente_nome'=>'Aquarela da India']
    ];

    public function __construct()
    {
        $clientes = session('clientes');
        if(!isset($clientes))
            session(['clientes' => $this->clientes]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clientes = session('clientes');
        return view('clientes.index',compact(['clientes']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('clientes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $clientes = session('clientes');
        $id= count($clientes)+1;
        $nome = $request->cliente_nome;
        $dados = ['id' => $id,'cliente_nome' => $nome];
        $clientes[]= $dados;
        session(['clientes' => $clientes]);
        return redirect()->route('clientes.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $clientes = session('clientes');
        $cliente = $clientes[$id - 1];
        return view('clientes.info',compact(['cliente']));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $clientes = session('clientes');
        $cliente = $clientes[$id - 1];
        return view('clientes.edit',compact(['cliente']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $clientes = session('clientes');
        $clientes[$id - 1]['cliente_nome'] = $request->cliente_nome;
        session(['clientes' => $clientes]);
        return redirect()->route('clientes.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
