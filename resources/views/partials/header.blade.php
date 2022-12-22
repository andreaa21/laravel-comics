<header class="bg-light">
    <div class="container">
        <div class="logo">
            <img src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="dc-logo">
        </div>

        <nav>
            <ul>
                <li><a href="{{ route('characters') }}">Characters</a></li>
                <li><a href="{{ route('comics') }}">Comics</a></li>
                <li><a href="{{ route('movies') }}">Movies</a></li>
                <li><a href="{{ route('tv') }}">tv</a></li>
                <li><a href="{{ route('games') }}">Games</a></li>
                <li><a href="{{ route('collectibles') }}">Collectibles</a></li>
                <li><a href="{{ route('videos') }}">Videos</a></li>
                <li><a href="{{ route('fans') }}">Fans</a></li>
                <li><a href="{{ route('news') }}">News</a></li>
                <li><a href="{{ route('shop') }}">Shop</a></li>
            </ul>
        </nav>

    </div>
</header>
