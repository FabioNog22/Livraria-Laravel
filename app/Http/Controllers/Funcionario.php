<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Funcionario extends Controller
{
    private $funcionarios = [
        ['id' => 1,'func_nome'=>'Aquarela'],
        ['id' => 2,'func_nome'=>'Aquarela do Brasil'],
        ['id' => 3,'func_nome'=>'Aquarela da India']
    ];
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $funcionarios = $this->funcionarios;
        return view('funcionarios.index',compact(['funcionarios']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('funcionarios.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $id = count($this->funcionarios) + 1;
        $nome = $request->func_nome;
        $dados = ["id" =>$id,"func_nome" => $nome];
        $this->funcionarios[] = $dados;
        dd($this->funcionarios);
        return redirect()->route('funcionarios.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
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
