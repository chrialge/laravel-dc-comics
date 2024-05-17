<!-- estendo tutto il file di layout/app grzie ad una funzionalita di blade -->
@extends('layouts.app')

<!-- questo viene inserito nel main di layout/app.blade.php, precisamente dove ce `@yeild('content')` -->
@section('content')
    <!--Section jumbotron -->
    @include('partials.jumbotron')


    <!-- Section current series -->
    <section id="current_series" class="py-5 bg-dark">
        <div class="container">

            <!-- title -->
            <div class="title-section bg-primary d-inline-block px-3">
                <h2 class="text-white">CURRENT SERIES</h2>
            </div>

            <!-- la row dove contiene le colonne in modo responsive  -->
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-5 g-3">

                <!-- ciclo nell'array che mi sono fatto passare da routes/web.php, precisamente riga 20-24 -->
                @foreach ($comics as $comic)
                    <div class="col ">
                        <a href="{{ route('posts.show', $comic) }}" class=" text-decoration-none">
                            <!-- creo una card con bootstrap -->
                            <div class="card h-100 rounded-0 bg-dark text-light border-0">
                                <!-- prendo l'url dell'immagine nel valore della chiave thumb -->
                                <img class="card-img-top" src="{{ $comic->thumb }}" alt="{{ $comic->title }}"
                                    style="height: 300px" />
                                <div class="card-body">
                                    <!-- passo il nome della seie di commic fa con il metodo strtoupper() me lo da in maiuscolo -->
                                    <h6 class="card-title">{{ strtoupper($comic->series) }}</h6>
                                </div>
                            </div>
                        </a>



                    </div>
                @endforeach
                <!-- finisce il ciclo -->
            </div>

            <!-- bottone per dare piu comics -->
            <div class="more-comics d-flex justify-content-center mt-4">
                <button class="btn btn-primary rounded-0 px-5">LOAD MORE</button>
            </div>

        </div>
    </section>

    <!-- Section action_comics -->
    <section id="actions_client" class="bg-primary py-5 position-relative" style="z-index: 5;">

        <div class="container">
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-5 g-3 text-light">

                <!-- cicla sull'array actions anche essa passta da rouutes/web.php -->
                @foreach ($actions as $action)
                    <div class="col d-flex align-items-center action_badge">
                        <!-- setto l'src per il supercompilattore vite usando la stringa piu i valori nella chiave image  facendoli diventare dinamici-->
                        <img src="{{ Vite::asset('resources/img/buy-' . $action['image']) }}" class="pe-3"
                            alt="{{ $action['title'] }}" width="70px">
                        <!-- inserisco dinamicamente il titolo -->
                        <h6>{{ $action['title'] }}</h6>
                    </div>
                @endforeach
                <!-- fine ciclo -->
            </div>
        </div>

    </section>
@endsection
