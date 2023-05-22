@extends('layouts.app')

@section('content')
    @include('partials.jumbo')
    <div class="container py-5 fw-bold fs-3 position-relative d-flex flex-column">
        <span class="mylabel mybg-blue position-absolute px-4 py-1 text-uppercase">Current series</span>
        <div class="row mt-5">
            @foreach ($comics as $comic)
                <div class="col-12 col-sm-6 col-md-4 col-lg-3 mycard mb-5 rounded-4 py-3">
                    <div class="card-top-img">
                        <img src="{{ $comic['thumb'] }}" alt="{{ $comic['title'] }}">
                    </div>
                    <div class="card-body">
                        {{ $comic['title'] }}
                    </div>
                </div>
            @endforeach
        </div>
        <button class="text-uppercase px-5 py-1 mt-5 mybg-blue align-self-center fw-bold">Load More</button>
    </div>
@endsection
<style lang="scss" scoped>
    .mylabel {
        top: -20px;
        font-size: 1.5rem;
        background-color: #0069cc;
    }

    .mycard {
        width: 300px;
        height: fit-content;
        transition: 0.8s;

        &:hover {
            cursor: pointer;
            background-color: grey;
        }
    }

    .card-top-img {
        height: 80%;
    }

    .card-top-img img {
        width: 100%;
        height: 100%;
    }

    button {
        background-color: #0069cc;
        font-size: 1.5rem;
        border: none;
        color: white;

        &:hover {
            background-color: #40a3ff;
        }
    }
</style>
