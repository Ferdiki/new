@extends('layouts.main-user')

@section('content')
    <x-navbar />
    <x-header :title="$title" />

    <!-- Blog Start -->
    <div class="container-fluid blog py-5">
        <div class="container py-5">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 900px;">
                <h4 class="text-primary"></h4>
                <h1 class="display-5 mb-4">gallery</h1>
            </div>
            <div class="row g-4 justify-content-center">
                @foreach ($galleries as $item)
                    <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="blog-item">
                            <div class="blog-img">
                                <img src="{{ asset('storage/galleries' . $item->gambar) }} class="img-fluid w-100"
                                    alt="">
                                <div class="blog-info">
                                    <span><i class="fa fa-clock"></i>
                                        {{ date('d, F Y', strtotime($item->updated_at)) }}</span>

                                </div>
                            </div>
                            <div class="blog-content text-dark border p-4 ">
                                <h5 class="mb-4">{{ $item->title }}</h5>
                                <p class="mb-4">{!! Str::limit(strip_tags($item->body), 80, '...') !!}
                                </p>
                                <a class="btn btn-light rounded-pill py-2 px-4"
                                    href="{{ route('gallery.single', ['slug' => $item->slug]) }}">Read More</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- Blog End -->
@endsection
