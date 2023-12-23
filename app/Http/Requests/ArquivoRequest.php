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
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules(): array
    {
        return [
            'dataPagamento' => 'required|date|',
            'dataVencimento' => 'required|date',
            'nomeConta' => 'required|string|min:5|max:255',
            'descricao' => 'required|string|min:5|max:255',
            'statusPagamento' => 'required|string|enum  {
                case PAGO;
                case PENDENTE;
            }',
            'categoria' => 'required|string'
        ];
    }
}
