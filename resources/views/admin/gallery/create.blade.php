@extends('layouts.main-admin')


@section('content-admin')
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-md-12">
                @if (session()->get('errors'))
                    <div class="alert alert-danger fade show text-white" role="alert">
                        @foreach ($errors->all() as $error)
                            <span class="alert-text">* {{ $error }}</span> <br>
                        @endforeach
                    </div>
                @endif
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
                    <div class="card-header">
                        <h5>{{ $title }}</h5>
                    </div>
                    <div class="card-body px-2 pt-0 pb-2 p-4">
                        <form action="{{ route('galleries.store') }}" class="px-4" method="post"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="row mb-2">
                                <div class="col-md-3">
                                    <img id="previewImg" alt="PreviewImg" height="500" width="500"
                                        class="img-thumbnail">
                                </div>
                                <div class="col-md-9">
                                    <div class="custom-file mb-2">
                                        <input type="file" class="form-control form-control-alternative" name="gambar"
                                            id="image" placeholder="Input file">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <button class="btn btn-success" type="submit">Save</button>
                                <a href="{{ route('galleries.index') }}" class="btn btn-danger">Batal</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('datatables-js')
    <script src="{{ asset('assets/admin/assets/js/custom-js/custom-plugins.js') }}"></script>
@endsection
