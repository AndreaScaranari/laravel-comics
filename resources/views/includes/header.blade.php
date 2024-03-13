<header>
    <div class="container d-flex align-items-center justify-content-evenly">
        <a href="{{ route('home') }}">
            <img src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="DC Logo" class="py-3">
        </a>
        <ul class="d-flex justify-content-evenly col-10">
            @foreach (config('headerUL') as $link)
                <li class="list-unstyled">
                    <a href="{{ url($link['route_name']) }}" {{-- class="{{ Route::is($link['route_name']) ? active : '' }}" --}}>
                        {{ $link['text'] }}
                    </a>
                </li>
            @endforeach
        </ul>
    </div>
</header>
