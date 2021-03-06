<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FornecedorRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            'nome' => ['required', 'min:5', 'max:100', 'unique'],
            'celular' => ['required', 'min:9','max:20'],
            'cnpj_cpf' => 'required',
            'data_cadastro' => ['nullable', 'required', 'date'],
            'data_nascimento' => ['nullable', 'required', 'date']
        ];
    }
}
