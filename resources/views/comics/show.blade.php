@extends('layouts.app')

@section('content')
    <div class="container min-vh-100 bg-white" style="position: relative; z-index: 5;">
        <div class="row">
            <div class="col">
                <img src="{{ $comic->thumb }}" alt="">
            </div>
            <div class="col">
                <h2>{{ $comic->title }}</h2>
                <p>{{ $comic->description }}</p>
                <div class="metadata">
                    <strong>Series: </strong> {{ $comic->series }} <br>
                    <strong>Price: </strong> {{ $comic->price }} &euro; <br>
                    <strong>Sale date: </strong> {{ $comic->sale_date }} <br>
                    <strong>Type: </strong> {{ $comic->type }} <br>

                </div>
            </div>
        </div>
    </div>
@endsection
{{-- @dd($comic) --}}
