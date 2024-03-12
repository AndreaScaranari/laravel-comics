<header>
    <div class="container">
        <img :src="{{ asset('img/dc-logo.png') }}" :alt="DC Logo">
        <ul>
            @foreach (config('headerUL') as $link)
                <li>
                    <a href="{{ url($link['route_name']) }}" class="{{ Route::is($link['route_name']) ? active : '' }}">
                        {{ $link['text'] }}
                    </a>
                </li>
            @endforeach
        </ul>
    </div>
</header>
