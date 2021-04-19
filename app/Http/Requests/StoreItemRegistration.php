<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreItemRegistration extends FormRequest
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
      'name' => 'required',
      'description' => 'required',
      'price_per_unit' => 'required',
      'basic_unit' => 'required',
      'limited' => 'required',
      'in_stock' => 'required',
      'active_for_sale' => 'nullable',
    ];
  }
  public function messages()
  {
    return [
      'name.required' => 'O campo nome é obrigatório',
      'description.required' => 'O campo descrição é obrigatório',
      'price_per_unit.required' => 'O campo preço é obrigatório',
      'basic_unit.required' => 'O campo unidade de medida é obrigatório',
      'limited.required' => 'O campo limitado é obrigatório',
      'in_stock.required' => 'O campo em estoque é obrigatório',
    ];
  }
}
