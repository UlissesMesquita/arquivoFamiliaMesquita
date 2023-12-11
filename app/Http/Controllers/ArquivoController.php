<?php

namespace App\Http\Controllers;

use App\Models\Arquivo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ArquivoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $arquivo = Arquivo::all();

        return compact('arquivo');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('arquivoCreate');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        DB::beginTransaction();

        $arquivo = new Arquivo();
        $arquivo->data_vencimento = $request->dataVenciamento;
        $arquivo->data_pagamento = $request->dataPagamento;
        $arquivo->nome_conta = $request->nomeConta;
        $arquivo->categoria = $request->categoria;
        $arquivo->descricao = $request->descricao;
        $arquivo->status_pagamento = $request->statusPagamento;
        $arquivo->save();
        

        DB::commit();

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
