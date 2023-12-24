<?php

use Illuminate\Database\Eloquent\Model;

//Return Erro Global
function globalException(Exception $e): array{
    return [
        'code' => '404',
        'erro:' => $e->getMessage(),
        'linha:' => $e->getLine()
    ];
}

//Response Methods
function globalReponse(){
    return response()->json([
        'status'    => 'Ok',
        'code'      => response()->getStatusCode() ??  200,
        'data'      => response()->json()
    ], response()->getStatusCode() ?? 200);
}