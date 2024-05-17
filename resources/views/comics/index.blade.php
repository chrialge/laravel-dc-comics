<!-- estendo tutto il file di layout/app grzie ad una funzionalita di blade -->
@extends('layouts.admin')


@section('content')
    <div class="container">
        <div class="d-flex justify-content-between align-items-center py-3">
            <h2>Products</h2>
            <a class="btn btn-primary" href="{{ route('comics.create') }}">Add</a>
        </div>
        <div class="table-responsive">
            <table class="table table-primary">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Title</th>
                        <th scope="col">Description</th>
                        <th scope="col">Thumb</th>
                        <th scope="col">Series</th>
                        <th scope="col">Sale date</th>
                        <th scope="col">Type</th>
                        <th scope="col">Action</th>

                    </tr>
                </thead>
                <tbody>
                    @forelse ($comics as $comic)
                        <tr class="">
                            <td scope="row">{{ $comic->id }}</td>
                            <td>{{ $comic->title }}</td>
                            <td>{{ $comic->description }}</td>
                            <td><img width="60" src="{{ $comic->thumb }}" alt=""></td>
                            <td>{{ $comic->series }}</td>
                            <td>{{ $comic->sale_date }}</td>
                            <td>{{ $comic->type }}</td>
                            <td>
                                <div class="d-flex gap-2">
                                    <a class="btn btn-dark" href="{{ route('comics.show', $comic) }}"><i
                                            class="fas fa-eye fa-sm fa-fw"></i></a>
                                    <a class="btn btn-dark" href="{{ route('comics.edit', $comic) }}"> <i
                                            class="fas fa-pencil-alt fa-sm fa-fw"></i></a>


                                    <!-- Modal trigger button -->
                                    <button type="button" class="btn btn-danger" data-bs-toggle="modal"
                                        data-bs-target="#modalId-{{ $comic->id }}">
                                        <i class="fas fa-trash fa-sm fa-fw"></i>
                                    </button>

                                    <!-- Modal Body -->
                                    <!-- if you want to close by clicking outside the modal, delete the last endpoint:data-bs-backdrop and data-bs-keyboard -->
                                    <div class="modal fade" id="modalId-{{ $comic->id }}" tabindex="-1"
                                        data-bs-backdrop="static" data-bs-keyboard="false" role="dialog"
                                        aria-labelledby="modalTitleId-{{ $comic->id }}" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-sm"
                                            role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="modalTitleId-{{ $comic->id }}">
                                                        Attention! Deleting: {{ $comic->title }}
                                                    </h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    Attention!! You are about to delete this record. The operation is
                                                    DESCRUCTIVE!!
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary"
                                                        data-bs-dismiss="modal">
                                                        Close
                                                    </button>
                                                    <form action="{{ route('comics.destroy', $comic) }}" method="post">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-danger">
                                                            Confirm
                                                        </button>

                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                            </td>

                        </tr>
                    @empty

                        <tr class="">
                            <td scope="row" colspan="7">Nothing to show</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        {{ $comics->links('pagination::bootstrap-5') }}


    </div>
@endsection
