<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MateriaFormRequest extends FormRequest
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
            'sigla_materia' => 'required|string|min:3',
            'nomb_materia' => 'required|string|min:4',
            'grupo_materia' => 'requiered|string|min:3',
        ];
    }
}
   