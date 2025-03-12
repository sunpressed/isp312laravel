@extends("layouts.main")


@section('title', 'Регистрация')

@section('body')

{{--    @dd(now()->format('Y-m-d'))--}}

<x-box>
    <x-slot:title>
        @yield('title')
        </x-slot>
    <form action="" method="post">
        <x-form.input name="fio" label="Ваше ФИО" placeholder="Фамилия Имя Отчество"/>
        <x-form.input type="email" name="email" label="Ваша почта" placeholder="mail@mail.ru"/>
        <x-form.input type="date" name="bday" label="Ваша дата рождения" :value="now()->format('Y-m-d')" />
        <x-form.input type="password" name="password" label="Введите пароль" />
        <x-form.input type="password" name="password_confirmation" label="Подтвердите пароль" />
        <button class="btn btn-primary mt-2" type="submit">Зарегистрироваться</button>
    </form>
</x-box>


@endsection
