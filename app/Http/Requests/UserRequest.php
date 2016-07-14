<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
{
    public function rules()
    {
        return [
           'name' => 'required',
            'amount' => 'required|integer',
            'bday' => 'required|date|after:1920-01-01'
        ];
    }

    public function authorize()
    {
        return true;
    }
}