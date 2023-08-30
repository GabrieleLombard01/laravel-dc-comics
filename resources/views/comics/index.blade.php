@extends('layouts.main')

@section('title', 'Comics')

@section('main-content')
    <div class="container-lg position-relative">
        <div class="main_title_c">
            <h1 class="text-white">CURRENT SERIES</h1>
        </div>

        <!-- contents: -->
        <div id="products" class="container card-deck">

            @foreach ($comics as $comic)
                <div class="card bg-dark m-2" style="width: 18rem;">
                    <img src="{{ $comic->thumb }}" class="card-img-top" alt="{{ $comic->title }}">
                    <div class="card-body">
                        <h5 class="text-white card-title">{{ $comic->title }}</h5>
                    </div>
                    <div class="card-footer">
                        <button class="btn btn-primary"><a class="text-white fw-bold"
                                href="{{ url("/comics/$comic->id") }}">View</a></button>
                    </div>
                </div>
            @endforeach


        </div>

    </div>
@endsection
