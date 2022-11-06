@extends('layouts.template')

@section('content')

    {{-- hero section --}}

    <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">

        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleInterval" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleInterval" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleInterval" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>


        <div class="carousel-inner">

            @foreach ($movies as $movie)
                <div class="carousel-item @if($loop->first) active @endif" data-bs-interval="5000">
                    <div class="position-relative">
                        <div class="my-overlay">
                            <div class="my-info text-light d-flex flex-column">
                                <p>{{ $movie['genre'] }} | {{ $movie['year'] }}</p>
                                <h1 style="font-weight: 700;">{{ $movie['title'] }}</h1>
                                <p style="font-size: .9rem">
                                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Repudiandae cupiditate animi quo, facere vel voluptatem.
                                </p>

                                {{-- @can('user') --}}
                                    <button class="my-button btn btn-primary w-50">
                                        <i class="bi bi-plus"></i>
                                        Add to Watchlist
                                    </button>
                                {{-- @endcan --}}
                            </div>
                        </div>
                        <img src="{{ "/img/hero/" . $movie['url'] }}" class="d-block w-100" alt="...">
                    </div>
                </div>  
            @endforeach

        </div>

    </div>

    <div class="div p-3 border-bottom">
        <h4 class="text-light" style="font-weight: 700;">
            <i class="bi bi-graph-up"></i>
            &nbsp Popular
        </h4>
    </div>

@endsection