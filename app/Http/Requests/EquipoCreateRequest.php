<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EquipoCreateRequest extends FormRequest
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
            'nombre'=>'required|alpha|min:4|max:20',
            'pais'=>'required|alpha|min:4|max:50',
            'color'=>'required|min:4|max:30|unique:App\Equipo,color',
            'email'=>'required|email:rfc|unique:App\Equipo,email',
            'telefono'=>'required|integer|numeric',
        ];
    }

    public function attributes()
    {
      return [
              'nombre'=>'Nombre',
              'pais'=>'País',
              'color'=>'Color',
              'email'=>'Correo',
              'telefono'=>'Teléfono',
    ];
    }

    public function messages()
    {
      return [
              'nombre.required'=>'El :attribute es necesario',
              'nombre.alpha'=>'El :attribute debe ser sólo letras',
              'nombre.min'=>'El :attribute no puede tener menos de 4 caracteres',
              'nombre.max'=>'El :attribute tiene más de 20 caracteres',
              'pais.required'=>'El :attribute es necesario',
              'pais.alpha'=>'El :attribute debe ser sólo letras',
              'pais.min'=>'El :attribute no puede tener menos de 4 caracteres',
              'pais.max'=>'El :attribute tiene más de 50 caracteres',
              'color.required'=>'El :attribute es necesario',
              'color.min'=>'El :attribute no puede tener menos de 4 caracteres',
              'color.max'=>'El :attribute tiene más de 30 caracteres',
              'color.unique'=>'El :attribute ya existe, debe ser único',
              'email.required'=>'El :attribute es necesario',
              'email.email'=>'El :attribute no es una dirección de correo electrónico',
              'email.unique'=>'El :attribute ya existe, debe ser único',
              'telefono.required'=>'El :attribute es necesario',
              'telefono.integer'=>'El :attribute no puede contener puntos',
              'telefono.numeric'=>'El :attribute sólo puede ser números',
      ];
    }
}
