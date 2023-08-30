@extends('layouts.main')

@section('title', $comic->title)

@section('main-content')
    <div class="show_content">


        <!--img view-->
        <div class="blue_box">
            <div class="container-lg">
                <img src="{{ $comic->thumb }}" alt="{{ $comic->title }}">
                <button class="btn btn-success"><a class="text-white" href="{{ route('comics.index') }}">Back to
                        comics</a></button>
            </div>

        </div>
        <div class="container-lg position-relative">

            <!-- contents: -->
            <div id="products" class="container ps-3 pt-4">

                <h1>{{ $comic->title }}</h1>

                <div class="row">
                    <!--description-->
                    <div class="col-8">
                        <div class="green_box">

                            <div class="col-8 ps-2">U.S Price:
                                <span class="ps-1 fw-bold text-white">{{ $comic->price }}</span>
                            </div>
                            <div class="col-2">Avaible</div>
                            <div class="col-2">Check Availibility</div>

                        </div>
                        <p class="pt-3">{{ $comic->description }}</p>
                    </div>

                    <!--ADV-->
                    <div class="col-3 pb-4">
                        <h3 class="text-end">ADVERTISEMENT</h3>
                        <img src="{{ asset('images/adv.jpg') }}" alt="ADV">
                    </div>
                </div>

                <!--TABLES-->
                <div class="row pb-5">
                    <div class="col-6">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">Art by</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>{{ $comic->artists }}</td>
                                </tr>
                            </tbody>
                            <thead>
                                <tr>
                                    <th scope="col">Written by</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>{{ $comic->writers }}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <div class="col-6">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">Series</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>{{ $comic->series }}</td>
                                </tr>
                            </tbody>
                            <thead>
                                <tr>
                                    <th scope="col">On sale Date</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>{{ $comic->sale_date }}</td>
                                </tr>
                            </tbody>
                            <thead>
                                <tr>
                                    <th scope="col">Price</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>{{ $comic->price }}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>



            </div>
        </div>
    </div>
@endsection
