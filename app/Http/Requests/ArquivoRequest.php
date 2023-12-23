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
            'dataPagamento' => [
                'date',
                'required'
            ],
            'dataVencimento' => [
                'date', 
                'required'
            ],
            'nomeConta' => [
                'string', 
                'required'
            ],
            'descricao' => [
                'required', 
                'string'
            ],
            'statusPagamento' => [
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
