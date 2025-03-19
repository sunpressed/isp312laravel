@extends("layouts.main")

@section('title', 'Создание заказа')

@section('body')

    {{--@dump(\Carbon\Carbon::parse("2030-03-11 13:20:00")->diffForHumans())--}}

    <x-box>
        <form action="{{ route("orders.create") }}" method="post">
            @csrf
            <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
                @foreach($categories as $category)
                <option ID="category_id" name="category_id">{{$category->title}}</option>
                @endforeach
                    <x-form.input name="description" label="Ваше ФИО" placeholder="Опишите заказ" />
            </select>
            <button type="submit" class="btn btn-primary">Зарегистрироваться</button>
        </form>
    </x-box>

@endsection
