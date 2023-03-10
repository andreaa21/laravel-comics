<header class="bg-light">
    <div class="header-top">
        <div class="container justify-content-end">
            <div class="h-text px-3">
                <span>
                    dc power visa
                </span>
            </div>
            <div class="h-text">
                <span>
                    addidional dc sites
                </span>
            </div>
        </div>
    </div>
    <div class="footer-bottom d-flex align-items-center bg-light debug">
        <div class="container">
            <div class="logo">
                <img src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="dc-logo">
            </div>

            <nav>
                <ul>
                    <li><a class="{{ Route::currentRouteName() === 'characters' ? 'active' : '' }}"
                            href="{{ route('characters') }}">Characters</a></li>
                    <li><a class="{{ Route::currentRouteName() === 'comics' ? 'active' : '' }}"
                            href="{{ route('comics') }}">Comics</a></li>
                    <li><a class="{{ Route::currentRouteName() === 'movies' ? 'active' : '' }}"
                            href="{{ route('movies') }}">Movies</a></li>
                    <li><a class="{{ Route::currentRouteName() === 'tv' ? 'active' : '' }}"
                            href="{{ route('tv') }}">tv</a></li>
                    <li><a class="{{ Route::currentRouteName() === 'games' ? 'active' : '' }}"
                            href="{{ route('games') }}">Games</a></li>
                    <li><a class="{{ Route::currentRouteName() === 'collectibles' ? 'active' : '' }}"
                            href="{{ route('collectibles') }}">Collectibles</a></li>
                    <li><a class="{{ Route::currentRouteName() === 'videos' ? 'active' : '' }}"
                            href="{{ route('videos') }}">Videos</a></li>
                    <li><a class="{{ Route::currentRouteName() === 'fans' ? 'active' : '' }}"
                            href="{{ route('fans') }}">Fans</a></li>
                    <li><a class="{{ Route::currentRouteName() === 'news' ? 'active' : '' }}"
                            href="{{ route('news') }}">News</a></li>
                    <li><a class="{{ Route::currentRouteName() === 'shop' ? 'active' : '' }}"
                            href="{{ route('shop') }}">Shop</a></li>
                </ul>
            </nav>

            <div class="input-area">
                <input type="text" placeholder="Search">
            </div>

        </div>
    </div>
</header>
