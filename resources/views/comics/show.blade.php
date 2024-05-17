@extends('layouts.admin')

@section('content')
    <div class="container bg-white py-5" style="min-height: 600px;">
        <div class="row">
            <div class="col d-flex justify-content-center">
                <img src="{{ $comic->thumb }}" alt="">
            </div>
            <div class="col">
                <div class="d-flex align-items-center justify-content-end gap-2">
                    <a href="{{ route('comics.index') }}" class="btn btn-dark">
                        <i class="fa-solid fa-arrow-left"></i>
                    </a>

                    <a class="btn btn-dark" href="{{ route('comics.edit', $comic) }}"> <i
                            class="fas fa-pencil-alt fa-sm fa-fw"></i>
                    </a>

                </div>
                <h2>{{ $comic->title }}</h2>
                <p> <strong>Description: </strong>{{ $comic->description }}</p>
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
