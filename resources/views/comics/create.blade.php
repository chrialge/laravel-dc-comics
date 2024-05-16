@extends('layouts.app')


@section('content')
    <div class="container">
        <h1>Add new comic</h1>
        <form action="{{ route('comics.store') }}" method="post">
            @csrf

            <div class="mb-3">
                <label for="title" class="form-label">Name</label>
                <input type="text" class="form-control" name="title" id="title" aria-describedby="titleHelper"
                    placeholder="Batman Vol.1: .." />
                <small id="titleHelper" class="form-text text-muted">Type a title for the current pasta</small>
            </div>

            <div class="mb-3">
                <label for="price" class="form-label">price</label>
                <input type="number" class="form-control" name="price" id="price" aria-describedby="priceHelper"
                    placeholder="10.00$" />
                <small id="priceHelper" class="form-text text-muted">Type a price for the current pasta</small>
            </div>

            <div class="mb-3">
                <label for="series" class="form-label">series</label>
                <input type="text" class="form-control" name="series" id="series" aria-describedby="seriesHelper"
                    placeholder="Batman" />
                <small id="seriesHelper" class="form-text text-muted">Type a series for the current pasta</small>
            </div>

            <div class="mb-3">
                <label for="sale_date" class="form-label">Sale date</label>
                <input type="text" class="form-control" name="sale_date" id="sale_date" aria-describedby="saleDateHelper"
                    placeholder="2020-10-20" />
                <small id="seriesHelper" class="form-text text-muted">Type a sale date for the current pasta</small>
            </div>

            <div class="mb-3">
                <label for="type" class="form-label">Type</label>
                <input type="text" class="form-control" name="type" id="type" aria-describedby="typeHelper"
                    placeholder="comic book" />
                <small id="typeHelper" class="form-text text-muted">Type a type for the current pasta</small>
            </div>

            <div class="mb-3">
                <label for="description" class="form-label"></label>
                <textarea class="form-control" name="description" id="description" rows="6"></textarea>
            </div>

            <button class="btn btn-primary" type="submit">
                Create
            </button>

        </form>
    </div>
@endsection
