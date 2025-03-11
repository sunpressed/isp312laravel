@extends("layouts.main")
@section('title', 'Регистрация')



@section('body')
    {{--    @dump(now()->format('Y-m-d'))--}}
    <x-box>
        <x-slot:title>
            @yield('title')
        </x-slot>
        <form action="" method="post">
            <div class="mb-3">
                <label class="form-label" for="fio">Ваше Фио</label>
                <input type="text" name="fio" id="fio" placeholder="ФИО" class="form-control">
                <div class="invalid-feedback"></div>
            </div>
            <div class="mb-3">
                <label class="form-label" for="email">email</label>
                <input type="email" name="email" id="email" placeholder="Почта" class="form-control">
                <div class="invalid-feedback"></div>
            </div>
            <div class="mb-3">
                <label class="form-label" for="birthday">ДР</label>
                <input type="date" name="birth" id="birth" value="{{now()->format('Y-m-d')}}" placeholder="ДР" class="form-control">
                <div class="invalid-feedback"></div>
            </div>
            <div class="mb-3">
                <label class="form-label" for="password">Ваш пароль</label>
                <input type="password" name="password" id="password" placeholder="Пароль" class="form-control">
                <div class="invalid-feedback"></div>
            </div>
            <div class="mb-3">
                <label class="form-label" for="password-confirmation">Повторите пароль</label>
                <input type="password" name="pass-conf" id="password-confirmation" placeholder="Повторите пароль" class="form-control">
            </div>
            <div class="invalid-feedback"></div>
            <button type="submit" class="btn btn-primary">
                Нажать
            </button>





            <div class="bg-white rounded-3 shadow-sm p-4">

            </div>
@endsection

