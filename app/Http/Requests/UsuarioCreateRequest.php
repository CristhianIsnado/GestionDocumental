<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UsuarioCreateRequest extends FormRequest
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
            'ceduladeidentidad'=>'required|min:5|numeric',
            'nombres'=>'required|max:60',
            'genero'=>'required|max:60',
            'estadocivil'=>'required|max:60',
            'gradodeinstruccion'=>'required|max:60',
            'idresidencia'=>'required',
        ];
    }
}
