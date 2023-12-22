<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ArquivoRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'data_pagamento' => [
                'date',
                'required'
            ],
            'data_vencimento' => [
                'date', 
                'required'
            ],
            'nome_conta' => [
                'string', 
                'required'
            ],
            'descricao' => [
                'required', 
                'string'
            ],
            'status_pagamento' => [
                'boolean', 
                'required'
            ],
            'categoria' => [
                'string', 
                'required'
            ]
        ];
    }
}
