@extends('layouts.main')

@section('title', $comic->title)

@section('main-content')
    <div class="container-lg position-relative">

        <!-- contents: -->
        <div id="products" class="container card-deck">

            {{-- TO DO = GRAFICA COMIC --}}
            {{-- video 75 min. 59.29 --}}

            @foreach ($comics as $comic)
                <div class="card bg-dark m-2" style="width: 18rem;">
                    <img src="{{ $comic->thumb }}" class="card-img-top" alt="{{ $comic->title }}">
                    <div class="card-body">
                        <h5 class="text-white card-title">{{ $comic->title }}</h5>
                    </div>
                </div>
            @endforeach


        </div>

    </div>
@endsection
