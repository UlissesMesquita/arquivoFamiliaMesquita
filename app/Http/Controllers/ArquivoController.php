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
   
        try {

            DB::beginTransaction();

            $arquivos = Arquivo::create([
                'data_pagamento' => $request->dataPagamento,
                'data_vencimento' => $request->dataVencimento,
                'nome_conta' => $request->nomeConta,
                'descricao' => $request->descricao,
                'status_pagamento' => $request->statusPagamento,
                'categoria' => $request->categoria
            ]);

            if ($request->hasFile('file')) {

                $anexo = $request->file;
                foreach ($anexo as $anexoCont) {
                    $anexoName = $anexoCont->getClientOriginalName();
                    $anexoExt = $anexoCont->getClientOriginalExtension();
                    $anexoPath = 'anexos/'. $arquivos->id . '/' . $anexoName;
                    Storage::disk('local')->put($anexoPath, $anexoName);
                    $anexos = Anexo::create([
                        'nome_anexo' => $anexoName,
                        'path_anexo' => $anexoPath,
                        'extensao_anexo' => '.'.$anexoExt,
                        'arquivos_id' => $arquivos->id
                    ]);
                } 
            }

            DB::commit();

            return [
                'code:' => 201,
                'data:' => response()->json($arquivos)
            ];

        }
        catch(\Exception $e){
            return [
                'code:' => 400,
                'erro:' => $e
            ];
        }

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
