<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class GameValidation extends FormRequest
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
            'title' => 'required|min:3',
            'parentalRating' => 'required',
            'description' => 'required|min:3',
        ];
    }

    public function messages()
    {
        return [
            'required' => 'Este campo é obrigatório',
            'min' => 'Este campo deve conter pelo menos 3 caracteres',
            'image' => 'Deve ser uma imagem'
        ];
    }
}
