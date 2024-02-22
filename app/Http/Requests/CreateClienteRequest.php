<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateClienteRequest extends FormRequest
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

    public function prepareForValidation()
    {
        
        $cpf = $this->input('cpf'); 
        $cpf = str_replace(['.', '-'], '', $cpf); 
        $this->merge(['cpf'=>$cpf]); 

    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'nome' => 'required|string|max:50',
            'cpf' => 'required|string|size:11|unique:users',
            'email' => 'required|email|unique:users',
           
        ];
    }
    public function messages()
    {
        return [
            'nome.required' => 'O campo nome é obrigatório.',
            'cpf.required' => 'O campo CPF é obrigatório.',
            'cpf.size' => 'O CPF deve ter 14 caracteres.',
            'cpf.unique' => 'Este CPF já está em uso.',
            'email.required' => 'O campo email é obrigatório.',
            'email.email' => 'O email deve ser um endereço de email válido.',
            'email.unique' => 'Este email já está em uso.',
        ];
    }
}
