@extends('layouts.admin')


@section('content')
    <div class="container p-5 rounded" style="background-color: lightblue">
        <div class="d-flex align-items-center justify-content-between">
            <h1>Add new comic</h1>
            <a href="{{ route('comics.index') }}" class="btn btn-dark">
                <i class="fa-solid fa-arrow-left"></i>
            </a>
        </div>

        @include('partials.validator_error')
        <form action="{{ route('comics.store') }}" method="post">
            @csrf

            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control @error('title') is-invalid @enderror" name="title"
                    id="title" aria-describedby="titleHelper" placeholder="Batman Vol.1: .."
                    value="{{ old('title') }}" />
                <small id="titleHelper" class="form-text text-muted">Type a title for the current pasta</small>

                @error('title')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="price" class="form-label">Price</label>
                <input type="number" class="form-control @error('price') is-invalid @enderror" name="price"
                    id="price" aria-describedby="priceHelper" placeholder="10.00$" value="{{ old('title') }}" />
                <small id="priceHelper" class="form-text text-muted">Type a price for the current pasta</small>

                @error('price')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="thumb" class="form-label">Thumb</label>
                <input type="text" class="form-control @error('thumb') is-invalid @enderror" name="thumb"
                    id="thumb" aria-describedby="thumbHelper" placeholder="https://" value="{{ old('title') }}" />
                <small id="thumbHelper" class="form-text text-muted">Type a thumb for the current pasta</small>

                @error('thumb')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="series" class="form-label">Series</label>
                <input type="text" class="form-control @error('series') is-invalid @enderror" name="series"
                    id="series" aria-describedby="seriesHelper" placeholder="Batman" value="{{ old('title') }}" />
                <small id="seriesHelper" class="form-text text-muted">Type a series for the current pasta</small>

                @error('series')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="sale_date" class="form-label">Sale date</label>
                <input type="text" class="form-control @error('sale_date') is-invalid @enderror" name="sale_date"
                    id="sale_date" aria-describedby="saleDateHelper" placeholder="2020-10-20"
                    value="{{ old('title') }}" />
                <small id="seriesHelper" class="form-text text-muted">Type a sale date for the current pasta</small>

                @error('sale_date')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="type" class="form-label">Type</label>
                <input type="text" class="form-control @error('type') is-invalid @enderror" name="type" id="type"
                    aria-describedby="typeHelper" placeholder="comic book" value="{{ old('title') }}" />
                <small id="typeHelper" class="form-text text-muted">Type a type for the current pasta</small>

                @error('type')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="description" class="form-label"></label>
                <textarea class="form-control @error('description') is-invalid @enderror" name="description" id="description"
                    rows="6">{{ old('description') }}</textarea>
                @error('description')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <button class="btn btn-primary" type="submit">
                Create
            </button>

        </form>
    </div>
@endsection
