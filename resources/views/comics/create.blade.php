@extends('layouts.app')


@section('content')
    <div class="container bg-white py-5" style="position: relative; z-index: 5;">
        <h1>Add new comic</h1>
        @include('partials.validator_error')
        <form action="{{ route('comics.store') }}" method="post">
            @csrf

            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" id="title"
                    aria-describedby="titleHelper" placeholder="Batman Vol.1: .." />
                <small id="titleHelper" class="form-text text-muted">Type a title for the current pasta</small>

                @error('title')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="price" class="form-label">Price</label>
                <input type="number" class="form-control @error('price') is-invalid @enderror" name="price"
                    id="price" aria-describedby="priceHelper" placeholder="10.00$" />
                <small id="priceHelper" class="form-text text-muted">Type a price for the current pasta</small>

                @error('price')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="thumb" class="form-label">Thumb</label>
                <input type="text" class="form-control @error('thumb') is-invalid @enderror" name="thumb"
                    id="thumb" aria-describedby="thumbHelper" placeholder="10.00$" />
                <small id="thumbHelper" class="form-text text-muted">Type a thumb for the current pasta</small>

                @error('thumb')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="series" class="form-label">Series</label>
                <input type="text" class="form-control @error('series') is-invalid @enderror" name="series"
                    id="series" aria-describedby="seriesHelper" placeholder="Batman" />
                <small id="seriesHelper" class="form-text text-muted">Type a series for the current pasta</small>

                @error('series')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="sale_date" class="form-label">Sale date</label>
                <input type="text" class="form-control @error('sale_date') is-invalid @enderror" name="sale_date"
                    id="sale_date" aria-describedby="saleDateHelper" placeholder="2020-10-20" />
                <small id="seriesHelper" class="form-text text-muted">Type a sale date for the current pasta</small>

                @error('sale_date')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="type" class="form-label">Type</label>
                <input type="text" class="form-control @error('type') is-invalid @enderror" name="type" id="type"
                    aria-describedby="typeHelper" placeholder="comic book" />
                <small id="typeHelper" class="form-text text-muted">Type a type for the current pasta</small>

                @error('type')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="description" class="form-label"></label>
                <textarea class="form-control @error('description') is-invalid @enderror" name="description" id="description"
                    rows="6"></textarea>
            </div>

            <button class="btn btn-primary" type="submit">
                Create
            </button>

        </form>
    </div>
@endsection
