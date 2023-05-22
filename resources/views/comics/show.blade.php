@extends('layouts.app')

@section('content')
    <div class="container">


        <div class="row py-5">
            <div class="col d-flex justify-content-between">
                <div class="me-5">
                    <h1 class="mb-5">{{ $comic['title'] }}</h1>
                    <p>{{ $comic['description'] }}</p>
                    <p>Prezzo: {{ $comic['price'] }}</p>
                    <p>Serie: {{ $comic['series'] }}</p>
                    <p>Data di vendita: {{ $comic['sale_date'] }}</p>
                    <p>Tipo: {{ $comic['type'] }}</p>
                    <p>Artists:
                        @foreach ($comic['artists'] as $artist)
                            {{ $artist }} -
                        @endforeach
                    </p>
                    <p>Writers:
                        @foreach ($comic['writers'] as $writer)
                            {{ $writer }} -
                        @endforeach
                    </p>
                </div>

                <div class="info">
                    <img src="{{ $comic['thumb'] }}" alt="{{ $comic['title'] }}">
                </div>
            </div>
        </div>
    </div>
@endsection

<style lang="scss" scoped>
    .info img {
        width: 300px;
        height: 500px;
    }
</style>
