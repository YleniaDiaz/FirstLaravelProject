<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCourse extends FormRequest
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
      'name' => 'required|max:10',
      'category' => 'required',
      'description' => 'required|min:10',
    ];
  }

  public function attributes()
  {
    return [
      'name' => 'nombre del curso',
    ];
  }

  //personalizar mensajes de error
  public function messages()
  {
    return [
      'description.required'=>'La descripción del curso es obligatoria',
    ];
  }
}
