<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class JugadorCreateRequest extends FormRequest
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
          'apellido'=>'required|alpha|min:4|max:20',
          'equipo_id'=>'required|numeric|unique:App\Equipo,id',
          'edad'=>'required|numeric|integer',
          'pais'=>'required|alpha|min:4|max:50',
          'email'=>'required|email:rfc|unique:App\Equipo,email',
          'telefono'=>'required|integer|numeric',
        ];
    }

    public function attributes()
    {
      return [
              'nombre'=>'Nombre',
              'apellido'=>'Apellido',
              'equipo_id'=>'Número del Equipo',
              'edad'=>'Edad',
              'pais'=>'País',
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
              'apellido.required'=>'El :attribute es necesario',
              'apellido.alpha'=>'El :attribute debe ser sólo letras',
              'apellido.min'=>'El :attribute no puede tener menos de 4 caracteres',
              'apellido.max'=>'El :attribute tiene más de 20 caracteres',
              'equipo_id.required'=>'El :attribute es necesario',
              'equipo_id.numeric'=>'El :attribute solo puede ser números',
              'equipo_id.unique'=>'El :attribute ya existe, debe ser único',
              'edad.required'=>'El :attribute es necesario',
              'edad.numeric'=>'El :attribute sólo puede ser números',
              'edad.integer'=>'El :attribute no puede contener puntos',
              'pais.required'=>'El :attribute es necesario',
              'pais.alpha'=>'El :attribute debe ser sólo letras',
              'pais.min'=>'El :attribute no puede tener menos de 4 caracteres',
              'pais.max'=>'El :attribute tiene más de 50 caracteres',
              'email.required'=>'El :attribute es necesario',
              'email.email'=>'El :attribute no es una dirección de correo electrónico',
              'email.unique'=>'El :attribute ya existe, debe ser único',
              'telefono.required'=>'El :attribute es necesario',
              'telefono.integer'=>'El :attribute no puede contener puntos',
              'telefono.numeric'=>'El :attribute sólo puede ser números',
      ];
    }
}
