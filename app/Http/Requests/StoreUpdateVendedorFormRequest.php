<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUpdateVendedorFormRequest extends FormRequest
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
           'CPF' => [
               'required',
               'string',
               'max:18',
               'min:13',
           ],
           'Telefone' => [
               'nullable',
               'string',
               'max:14',
               'min:8',
           ],
           'password' => [
               'required',
               'max:25',
           ],
           'image' =>[
            'nullable',
            'image',
            'max:1024',
        ]
        ];
    }
}
