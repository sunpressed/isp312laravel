<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateOrderRequest extends FormRequest
{


    public function rules(): array
    {
        return [
            'category_id' => 'required',
            'description' => 'required',
        ];
    }
}
