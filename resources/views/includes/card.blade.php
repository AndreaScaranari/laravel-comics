<a href="{{ route('comic') }}">
    <div class="card">
        <img src="{{ $comic['thumb'] }}" alt="{{ $comic['series'] }} cover">
        <div class="card-body">
            <p>{{ $comic['series'] }}</p>
        </div>
    </div>
</a>
