@extends('layouts.app')


@section('content')
    <div class="container">
        <h1>Edit comic</h1>
        @include('partials.validator_error')
        <form action="{{ route('comics.update', $comic) }}" method="post">
            @csrf

            @method('PUT')
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control" name="title" id="title" aria-describedby="titleHelper"
                    placeholder="Batman Vol.1: .." value="{{ $comic->title }}" />
                <small id="titleHelper" class="form-text text-muted">Type a title for the current pasta</small>
            </div>

            <div class="mb-3">
                <label for="price" class="form-label">Price</label>
                <input type="number" class="form-control" name="price" id="price" aria-describedby="priceHelper"
                    placeholder="10.00$" value="{{ $comic->price }}" />
                <small id="priceHelper" class="form-text text-muted">Type a price for the current pasta</small>
            </div>

            <div class="mb-3">
                <label for="series" class="form-label">Series</label>
                <input type="text" class="form-control" name="series" id="series" aria-describedby="seriesHelper"
                    placeholder="Batman" value="{{ $comic->series }}" />
                <small id="seriesHelper" class="form-text text-muted">Type a series for the current pasta</small>
            </div>

            <div class="mb-3">


                <label for="thumb" class="form-label">Thumb</label>
                <input type="text" class="form-control" name="thumb" id="thumb" aria-describedby="thumbHelper"
                    placeholder="https://" value="{{ $comic->thumb }}" />
                <small id="thumbHelper" class="form-text text-muted">Type a thumb for the current pasta</small>
            </div>

            <div class="mb-3">
                <label for="sale_date" class="form-label">Sale date</label>
                <input type="text" class="form-control" name="sale_date" id="sale_date" aria-describedby="saleDateHelper"
                    placeholder="2020-10-20" value="{{ $comic->sale_date }}" />
                <small id="seriesHelper" class="form-text text-muted">Type a sale date for the current pasta</small>
            </div>

            <div class="mb-3">
                <label for="type" class="form-label">Type</label>
                <input type="text" class="form-control" name="type" id="type" aria-describedby="typeHelper"
                    placeholder="comic book" value="{{ $comic->type }}" />
                <small id="typeHelper" class="form-text text-muted">Type a type for the current pasta</small>
            </div>

            <div class="mb-3">
                <label for="description" class="form-label"></label>
                <textarea class="form-control" name="description" id="description" rows="6">{{ $comic->description }}</textarea>
            </div>

            <button class="btn btn-primary" type="submit">
                Update
            </button>

        </form>
    </div>
@endsection
