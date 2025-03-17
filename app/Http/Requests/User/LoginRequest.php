<?php

namespace app\Http\Requests\User;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules\Password;

Class LoginRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            "email" => "required|string",
            "password" => ["required", "string"],
        ];
    }
}

