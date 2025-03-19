<div class="row">
    <div class="col-10">
        <h1 class="mb-4 fs-2">
            @empty($title)
                @yield('title')
            @else
                {{ $title }}
            @endempty
        </h1>
    </div>
    <div class="col-2 text-end">
        <a href="#" class="btn btn-primary btn-sm">Добавить заказ</a>
    </div>
</div>
<div class="bg-white rounded-3 shadow-sm p-4">
    {{ $slot }}
</div>
