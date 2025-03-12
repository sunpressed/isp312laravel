<?php

namespace App\Http\Requests\User;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Password;

class RegisterRequest extends FormRequest
{

    public function authorize(): bool
    {
        return true;
    }


    public function rules(): array
    {
        return [
            "fio"=>"required | string ",
            "email"=>"required | email | unique:App\Models\User| email:rfc",
            "birthday"=>"required | date_format:Y-m-d ",
            "password"=>["required", "string", "confirmed"],
            "password_confirmation"=>["required", "string", "same:password"],Password::min(4)->letters()->numbers()->uncompromised(),
        ];
    }
}
