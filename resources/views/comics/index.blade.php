<!-- estendo tutto il file di layout/app grzie ad una funzionalita di blade -->
@extends('layouts.app')

<!-- questo viene inserito nel main di layout/app.blade.php, precisamente dove ce @yeild('content') -->
@section('content')
    <!--Section jumbotron -->
    <div class="container min-vh-100 bg-white" style="position: relative;z-index: 5;">
        <div class="d-flex justify-content-between align-items-center py-4">
            <h2>Comics</h2>
            <a class="btn btn-primary" href="{{ route('comics.create') }}">
                Add Comic
            </a>
        </div>
        <div class="table-responsive">
            <table class="table table-primary">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">title</th>
                        <th scope="col">description</th>
                        <th scope="col">thumb</th>
                        <th scope="col">price</th>
                        <th scope="col">series</th>
                        <th scope="col">sale_date</th>
                        <th scope="col">type</th>
                        <th scope="col">action</th>

                    </tr>
                </thead>
                <tbody>
                    @foreach ($comics as $comic)
                        <tr class="">
                            <td scope="row">{{ $comic->id }}</td>
                            <td>{{ $comic->title }}</td>
                            <td>{{ $comic->description }}</td>
                            <td><img width="60" src="{{ $comic->thumb }}" alt=""></td>
                            <td>{{ $comic->price }}</td>
                            <td>{{ $comic->series }}</td>
                            <td>{{ $comic->sale_date }}</td>
                            <td>{{ $comic->type }}</td>
                            <td>
                                <a href="{{ route('comics.show', $comic) }}">
                                    view
                                </a>
                                <a href="">
                                    Edit
                                </a>
                                <a href="">
                                    Delete
                                </a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        {{ $comics->links('pagination::bootstrap-5') }}
    </div>
@endsection
