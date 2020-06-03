<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ValidacionProducto extends FormRequest
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
            'nombre_producto'=> 'required|max:50|unique:producto,nombre_producto,'.$this->route('id'),
            'existencia'=>'max:4',
            'descripcion'=> 'required|max:50',
            'precio_costo'=>'max:5',
            'precio_venta'=>'max:5',
            'foto'=>'nullable'
        ];
    }
}
