@extends('layouts.app')

@section('content')
    {{-- incluso la section jumbotron --}}
    @include('partials.jumbotron')

    {{-- section thumb --}}
    <section class="thumb position-relative">
        <div class="container">
            <img src="{{ $post->thumb }}" alt="" class=" position-absolute" width="300px">
        </div>
    </section>

    {{-- section description --}}
    <section class="description py-5">
        <div class="container">
            <div class="row">

                {{-- left --}}
                <div class="col-8">
                    {{-- title --}}
                    <h2 class=" pb-3 text_info">{{ strtoupper($post->title) }}</h2>

                    {{-- availability banner --}}
                    <div class="info_comic d-flex text-light">
                        <div class="Available flex-grow-1 p-3 d-flex justify-content-between"
                            style="border-right: 1.5px solid gray">
                            <span class="text_available">U.S Price:
                                <span class="text-white">{{ $post->price }}</span>
                            </span>
                            <span class="text_available">Available</span>
                        </div>
                        <div class="check_availability p-3">
                            <span>
                                Check Availability <span>&#11206;</span>
                            </span>
                        </div>
                    </div>

                    {{-- description --}}
                    <p class=" pt-3">
                        {!! $post->description !!}
                    </p>

                </div>

                {{-- right --}}
                <div class="col-4 d-flex  flex-column">
                    <h5 class=" text-end">ADVERTISEMENT</h5>
                    <img src="{{ Vite::asset('/resources/img/adv.jpg') }}" alt="coupon">
                </div>
            </div>
        </div>
    </section>

    {{-- section info --}}
    <section class="info border_bottom" style="height: 400px;">
        <div class="container">
            <div class="row row-cols-2 gx-4">
                {{-- left --}}
                <div class="col">

                    {{-- title --}}
                    <div class="title border_bottom py-3">
                        <h4 class="text_info">Talent</h4>
                    </div>

                    {{-- art by --}}
                    <div class="attribute d-flex border_bottom py-1">
                        <h6 class="text_info" style="width: 350px">
                            Art by:
                        </h6>
                        <span>
                            <a href="" class=" text-decoration-none">Jose Luis Garcia</a>,
                            <a href="" class=" text-decoration-none">Jose Luis Garcia</a>,
                            <a href="" class=" text-decoration-none">Jose Luis Garcia</a>,
                            <a href="" class=" text-decoration-none">Jose Luis Garcia</a>,
                            <a href="" class=" text-decoration-none">Jose Luis Garcia</a>,
                            <a href="" class=" text-decoration-none">Jose Luis Garcia</a>,
                            <a href="" class=" text-decoration-none">Jose Luis Garcia</a>,
                            <a href="" class=" text-decoration-none">Jose Luis Garcia</a>
                        </span>
                    </div>

                    {{-- written by --}}
                    <div class="attribute d-flex border_bottom py-1">
                        <h6 style="width: 316px" class="text_info">
                            Written by:
                        </h6>
                        <p>
                            <a href="" class=" text-decoration-none">Brand Meltzer</a>,
                            <a href="" class=" text-decoration-none">Brand Meltzer</a>,
                            <a href="" class=" text-decoration-none">Brand Meltzer</a>,
                            <a href="" class=" text-decoration-none">Brand Meltzer</a>,
                            <a href="" class=" text-decoration-none">Brand Meltzer</a>,
                            <a href="" class=" text-decoration-none">Brand Meltzer</a>,
                            <a href="" class=" text-decoration-none">Brand Meltzer</a>,
                            <a href="" class=" text-decoration-none">Brand Meltzer</a>
                        </p>
                    </div>

                </div>

                {{-- rigth --}}
                <div class="col">

                    {{-- title --}}
                    <div class="title border_bottom py-3">
                        <h4 class="text_info">Specs</h4>
                    </div>

                    {{-- series --}}
                    <div class="attribute d-flex border_bottom py-1">
                        <h6 style="width: 150px" class="text_info">
                            Series:
                        </h6>
                        <span class="active">{{ strtoupper($post->series) }}</span>

                    </div>

                    {{-- price --}}
                    <div class="attribute d-flex border_bottom py-1">
                        <h6 style="width: 150px" class="text_info">
                            U.S. Price:
                        </h6>
                        <span>{{ $post->price }}</span>

                    </div>

                    {{-- relase data --}}
                    <div class="attribute d-flex border_bottom py-1">
                        <h6 style="width: 150px" class="text_info">
                            On Sale Data:
                        </h6>
                        <span>{{ $post->sale_date }}</span>

                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- section banner --}}
    <section class="banner">
        <div class="container border_bottom" style=": 1px solid rgba(128, 128, 128, 0.055)">
            <div class=" row row-cols-4">

                <div class="col py-3 d-flex justify-content-between border_box_banner">
                    <span>DIGITAL COMICS</span>
                    <img src="{{ Vite::asset('/resources/img/icons/phone.png') }}" alt="">
                </div>

                <div class="col py-3 d-flex justify-content-between border_box_banner">
                    <span>SHOP DC</span>
                    <img src="{{ Vite::asset('/resources/img/icons/shop.png') }}" alt="">
                </div>

                <div class="col py-3 d-flex justify-content-between border_box_banner">
                    <span>COMIC SHOP LOCATOR</span>
                    <img src="{{ Vite::asset('/resources/img/icons/position.png') }}" alt="">
                </div>

                <div class="col py-3 d-flex justify-content-between border_box_banner">
                    <span>SUBSCRIPTIONS</span>

                    <img src="{{ Vite::asset('/resources/img/icons/shirt.png') }}" alt="">
                </div>
            </div>

        </div>
    </section>
@endsection
{{-- @dd($post) --}}
