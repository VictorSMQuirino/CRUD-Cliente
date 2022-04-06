<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RequestCliente extends FormRequest
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
            'nome_cliente' => ['required', 'string', 'max:255', 'regex:/^([a-zA-Zà-úÀ-Ú]|-|_|\s)+$/'],
            'cpf_cliente' => ['required', 'string', 'max:14'],
            'telefone_cliente' => ['required', 'string', 'max:255'],
            'profissao_cliente' => ['required', 'string', 'max:255'],
            'email_cliente' => ['required', 'string','regex:/^[a-z0-9.]+@[a-z0-9]+\.[a-z]+\.([a-z]+)?$/i'],
            'sexo_cliente' => ['required', 'string'],
            'endereco_cliente' => ['required', 'string', 'max:255']
        ];
    }
}

