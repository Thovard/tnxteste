<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUpdateEmpresasFormRequest extends FormRequest
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
            'name' => [
                'required',
                'string',
                'max:255',
                'min:3',
            ],
            'CNPJ' => [
                'required',
                'string',
                'max:20',
                'min:13',
            ],
            'Telefone' => [
                'nullable',
                'string',
                'max:17',
                'min:17',
            ],
            'cep' => [
                'nullable',
                'string',
                'max:9',
                'min:9',
            ],            
            'estado' => [
                'nullable',
                'string',
                'max:9999',
                'min:1',
            ],           
             'cidade' => [
                'nullable',
                'string',
                'max:9999',
                'min:1',
            ],           
             'bairro' => [
                'nullable',
                'string',
                'max:99999',
                'min:1',
            ],           
             'numero' => [
                'nullable',
                'string',
                'max:99999',
                'min:1',
            ],
            'password' => [
                'required',
                'max:25',
            ],        
        ];
    }
}
