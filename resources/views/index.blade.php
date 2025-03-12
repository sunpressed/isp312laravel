@extends("layouts.main")


@section('title', 'Регистрация')

@section('body')

{{--    @dd(now()->format('Y-m-d'))--}}



<x-box>
    <x-slot:title>
        @yield('title')
        </x-slot>
    <form action="{{route("register.create")}}" method="post">
        @csrf
        <x-form.input name="fio" label="Ваше ФИО" placeholder="Фамилия Имя Отчество" :error="$errors->first('fio')"/>
        <x-form.input type="email" name="email" label="Ваша почта" placeholder="mail@mail.ru" error="$errors->first('fio')/>
        <x-form.input type="date" name="birthday" label="Ваша дата рождения" :value="now()->format('Y-m-d')"  />
        <x-form.input type="password" name="password" label="Введите пароль" error="$errors->first('fio')" />
        <x-form.input type="password" name="password_confirmation" label="Подтвердите пароль" error="$errors->first('fio')" />
        <button class="btn btn-primary mt-2" type="submit">Зарегистрироваться</button>
    </form>
</x-box>


@endsection
