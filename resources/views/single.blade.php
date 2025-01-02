@extends('layouts.main-user')

@section('content')
    <x-navbar />
    <x-header :title="$title" />

    <!-- About Start -->
    <div class="container-fluid overflow-hidden py-4 mt-5">
        <div class="container py-5">
            <div class="row">
                <div class="col-lg-12 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="text-center">
                        <img src="{{ asset('storage/articles') }}/{{ $articles->gambar }}" class="img-fluid w-50" alt="">
                        <img src="{{ asset('storage/articles2') }}/{{ $articles->gambar }}" class="img-fluid w-50" alt="">
                    </div>
                    <div class="d-flex align-items-center justify-content-evenly my-4">
                        <p><i class="fa fa-user text-primary"></i> {{ $articles->penulis }}</p>
                        <p><i class="fas fa-folder-open text-primary"></i> {{ $articles->category->category }}</p>
                        <p><i class="fa fa-clock text-primary"></i>
                            {{ date('l, d F Y', strtotime($articles->updated_at)) }}
                        </p>
                    </div>
                </div>
            </div>
            <div class="row g-5">
                <div class="col-lg-12 col-md-12 col-sm-12 wow fadeInUp" data-wow-delay="0.3s">
                    <h1 class="display-5 mb-4">{{ $articles->title }}</h1>
                    <div style="text-align: justify">{!! $articles->body !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->
@endsection
