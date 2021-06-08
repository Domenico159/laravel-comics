@extends('layouts.main')


@section('content')
    <section class="container content d-flex d-center pt-40 px-4">
        @foreach ($comics as $comic)
            <div class="card">
                <img src="{{ $comic['image'] }}" alt="">
                <h6 class="mt-1 c-primary">{{ $comic['title'] }}</h6>
            </div>
        @endforeach

        <button class="text-up p-button c-primary bg-button">
            load more
        </button>

    </section>
@endsection
