<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCartRequest extends FormRequest
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
            'last_name' => 'required',
            'email' => 'required|email',
            'phone_number' => 'required|max:16',
            'city' => 'required',
            'country' => 'required',
            'postal_code' => 'required|numeric',
            'state' => 'required',
            'street_line1' => 'required',
        ];
    }
}
