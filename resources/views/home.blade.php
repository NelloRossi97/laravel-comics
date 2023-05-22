@extends('layouts.app')

@section('content')
    <div class="container py-5 fw-bold fs-3 position-relative d-flex flex-column">
        <span class="mylabel mybg-blue position-absolute px-4 py-1 text-uppercase">Current series</span>
        <div class="row mt-5">
            @foreach ($comics as $comic)
                <div class="card">

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

    .mybg-blue {}

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
