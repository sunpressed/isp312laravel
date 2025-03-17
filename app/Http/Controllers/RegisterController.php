<?php

namespace App\Http\Controllers;

use App\Http\Requests\User\RegisterRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index()
    {
        return view("register");
    }

    public function create(RegisterRequest $request)
    {
//        dd($request->fio);
//        dd($request->all());
//        $data = $request->only(['fio', 'email', 'birthday', 'password']);
        $data = $request->except(['password_confirmation']);

//        $user = User::create($data);
        $user = User::create([
            "fio" => $request->fio,
            "email" => $request->email,
            "birthday" => $request->birthday,
            "password" => $request->password,
        ]);

        if($user)
        {
            return redirect()->route("register.index");
        } else {
            abort(400);
        }

    }


}

