<?php

use App\Models\OrderCreate;

public function  store(Request $request)
{
    $request->validate([
        'name' => 'required', 'string',
        'phone' => 'required', 'string',
        'email' => 'required', 'string',
        'address' => 'required', 'string',
    ]);
    OrderCreate::create($request->all());
    return redirect()->route('orders.index')->with('success', 'Заказ успешно создан');
};
