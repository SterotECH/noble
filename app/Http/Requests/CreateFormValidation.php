<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateFormValidation extends FormRequest
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
            'product_name' => 'required | string ',
            'cost_price' => 'required|integer|min:10|max:10000',
            'selling_price' => 'required | min: 0 | max: 100',
            'quantity' => 'required|min:1|max:100'
        ];
    }
}
