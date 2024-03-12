<header>
    <div class="container">
        <img :src="{{ asset('img/dc-logo.png') }}" :alt="DC Logo">
        <ul class="d-flex justify-content-evenly">
            @foreach (config('headerUL') as $link)
                <li class="list-unstyled">
                    <a href="{{ url($link['route_name']) }}" class="{{ Route::is($link['route_name']) ? active : '' }}">
                        {{ $link['text'] }}
                    </a>
                </li>
            @endforeach
        </ul>
    </div>
</header>
