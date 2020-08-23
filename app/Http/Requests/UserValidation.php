<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserValidation extends FormRequest
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
            'name' => 'min:3',
            'email' => 'email',
            'password' => 'min:8',
            'newPassword' => 'min:8'
        ];
    }

    public function messages()
    {
        return [
            'required' => 'Este campo é obrigatório',
            'min:3' => 'Este campo deve conter pelo menos 3 caracteres',
            'min:8' => 'Este campo deve conter pelo menos 8 caracteres',
            'image' => 'Deve ser uma imagem'
        ];
    }
}
