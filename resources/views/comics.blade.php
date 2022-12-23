@extends('layouts.main')

@section('content')
    <div class="jumbotron">
        <div class="jumbo-container container">
            <button>Current series</button>
        </div>
    </div>

    @dump($comics)
@endsection
