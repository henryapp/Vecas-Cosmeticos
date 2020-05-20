<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ValidarPermiso extends FormRequest
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
            'nombre_per'=> 'required|max:50|unique:permisos,nombre_per,'.$this->route('id'),
            'slug'=>'required|max:50|unique:permisos,slug,'.$this->route('id'),
            
        ];
    }
}
