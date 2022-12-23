<footer>
    <footer>
        <div class="footer-top">
            <div class="container">
                <div class="link-1">
                    <h3>dc comics</h3>
                    <nav>
                        <ul>
                            @foreach ($dc_comics as $dc_link)
                                <li><a href="{{ $dc_link['href'] }}">{{ $dc_link['text'] }}</a></li>
                            @endforeach
                        </ul>
                    </nav>
                    <div class="shop">
                        <h3>shop</h3>
                        <nav>
                            <ul>
                                @foreach ($shop as $shop_link)
                                    <li><a href="{{ $shop_link['href'] }}">{{ $shop_link['text'] }}</a></li>
                                @endforeach
                            </ul>
                        </nav>
                    </div>
                </div>



                <div class="link-2">
                    <h3>DC</h3>
                    <nav>
                        <ul>
                            @foreach ($dc as $dc_link)
                                <li><a href="{{ $dc_link['href'] }}">{{ $dc_link['text'] }}</a></li>
                            @endforeach
                        </ul>
                    </nav>
                </div>
                <div class="link-3">
                    <h3>sites</h3>
                    <nav>
                        <ul>
                            @foreach ($sites as $sites_link)
                                <li><a href="{{ $sites_link['href'] }}">{{ $sites_link['text'] }}</a></li>
                            @endforeach
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
        </div>
        <div class="footer-bottom">
            <div class="container">
                <div class="sign-up">
                    <button>sign-up now!</button>
                </div>
                <div class="socials">
                    <h2>follow us</h2>
                </div>
            </div>
        </div>
    </footer>
</footer>
