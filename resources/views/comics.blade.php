@extends('layouts.main')

@section('content')
    <div class="jumbotron">
        <div class="jumbo-container container">
            <button>Current series</button>
        </div>

    </div>

    <main>
        <div class="container cards">
            @foreach ($comics as $comic)
                <div class="x-card">
                    <div class="card-img">
                        <img src="{{ $comic['thumb'] }}" :alt="{{ $comic['title'] }}">
                    </div>
                    <div class="card-text">{{ $comic['series'] }}</div>
                </div>
            @endforeach
        </div>
        <div class="btn-container d-flex justify-content-center">
            <button>load more</button>
        </div>

        <div class="wrapper">
            <div class="container">
                <nav>
                    <ul>
                        @foreach ($component as $item)
                            <li>
                                <div class="image"><img src="../resources/img/{{ $item['src'] }}"
                                        alt="{{ $item['src'] }}">
                                </div>
                                <a href="{{ $item['href'] }}">{{ $item['text'] }}</a>
                            </li>
                        @endforeach
                    </ul>
                </nav>
            </div>
        </div>
    </main>
@endsection
