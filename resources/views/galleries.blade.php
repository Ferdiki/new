@extends('layouts.main-user')

@section('content')
    <x-navbar />
    <x-header :title="$title" />

    <!-- Gallery Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="row g-4 justify-content-center">
                @foreach ($galleries as $item)
                    <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="blog-item">
                            <div class="blog-img rounded">
                                <a href="{{ asset('storage/galleries') }}/{{ $item->gallery }}" data-toggle="lightbox">
                                    <img src="{{ asset('storage/galleries') }}/{{ $item->gallery }}" class="img-fluid w-100"
                                        alt="Image Gallery">
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- Gallery End -->
@endsection
