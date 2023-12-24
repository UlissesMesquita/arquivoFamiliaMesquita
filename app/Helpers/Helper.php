<?php

use Illuminate\Database\Eloquent\Model;

//Return Erro Global
function globalException(Exception $e): array{
    return [
        'code' => response()->status() ?? '400',
        'message' => 'Bad Request',
        'erro:' => response()->json()
    ];
}

//Response Methods
function globalReponse(Model $data, Exception $e): array{
    return [
        'code' => response()->status() ?? '201',
        'data:' => response()->json()
    ];
}