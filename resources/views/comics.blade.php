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
    </main>
@endsection
