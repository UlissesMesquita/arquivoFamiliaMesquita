<?php

namespace App\Http\Controllers;

use App\Http\Requests\ArquivoRequest;
use App\Models\Anexo;
use App\Models\Arquivo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

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

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


        $anexo = $request->file;
        $anexo_name = $anexo->getClientOriginalName();


   
        DB::beginTransaction();

        $arquivos = Arquivo::create([
            'data_pagamento' => $request->data_pagamento,
            'data_vencimento' => $request->data_vencimento,
            'nome_conta' => $request->nome_conta,
            'descricao' => $request->descricao,
            'status_pagamento' => $request->status_pagamento,
            'categoria' => $request->categoria
        ]);

        if ($request->hasFile('file')) {

            $anexo_path = 'anexos/'. $anexo_name;

            Storage::disk('local')->put($anexo_path, $anexo);

            //Erro aqui
            $anexos = Anexo::create([
                'nome_anexo' => $anexo_name,
                'path_anexo' => $anexo_path,
                'arquivos_id' => $arquivos->id
            ]);

        }

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
