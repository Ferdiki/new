@extends('layouts.main-admin')

{{-- {{ asset('storage/posts') }}/{{$posts->image}} --}}
@section('content-admin')
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-md-12">
                <div class="card mb-2">
                    @if (session()->has('success'))
                        <div class="alert alert-success mt-2 alert-dismissible fade show" role="alert">
                            <span class="text-white">{{ session()->get('success') }}</span>
                            <button type="button" class="btn-close text-white" data-bs-dismiss="alert"
                                aria-label="Close">X</button>
                        </div>
                    @elseif(session()->has('failed'))
                        <div class="alert alert-danger mt-2 alert-dismissible fade show" role="alert">
                            <span class="text-white">{{ session()->get('failed') }}</span>
                            <button type="button" class="btn-close text-white" data-bs-dismiss="alert"
                                aria-label="Close">X</button>
                        </div>
                    @endif
                    <div class="card-header d-flex justify-content-between">
                        <h5>{{ $title }}</h5>
                        <a href="{{ route('galleries.create') }}" class="btn btn-primary mb-2">Tambah</a>
                    </div>

                    <div class="card-body">
                        <div class="row">
                            @foreach ($galleries as $item)
                                <div class="col-md-3">
                                    <div class="card" style="width: 18rem;">
                                        @if ($item->gallery != 'default')
                                            <img class="card-img-top"
                                                src="{{ asset('storage/galleries') }}/{{ $item->gallery }}"
                                                alt="Gallery web">
                                        @else
                                            <img class="card-img-top" src="https://dummyimage.com/1080x800/a1a1a1/000000"
                                                alt="Gallery web">
                                        @endif
                                        <div class="card-body">
                                            <form action="{{ route('galleries.destroy', ['gallery' => $item->id]) }}"
                                                method="post">
                                                @method('DELETE')
                                                @csrf
                                                <button type="submit" class="btn btn-danger"><i
                                                        class="fas fa-trash-alt">Delete</i></button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
