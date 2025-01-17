@extends('layouts.main-admin')

@section('datatables-css')
    <link rel="stylesheet" href="https://cdn.ckeditor.com/ckeditor5/43.1.1/ckeditor5.css" />
@endsection

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
                    <div class="card-header d-flex justify-content-between">
                        <h5>{{ $title }}</h5>
                        <button id="btnEdit" class="btn btn-primary">Edit</button>
                    </div>
                    <div class="card-body px-2 pt-0 pb-2 p-4">
                        <form action="{{ route('gallery.update', ['gallery' => $gallery->id]) }}" class="px-4"
                            method="post" enctype="multipart/form-data">
                            @method('patch')
                            @csrf
                            <div class="form-group">
                                <label for="title">Title</label>
                                <input type="text" class="form-control" name="title" id="title"
                                    placeholder="Input title" value="{{ $gallery->title }}" disabled>
                            </div>

                            <div class="form-group">
                                <label for="penulis">Penulis</label>
                                <input type="text" class="form-control" name="penulis" id="penulis"
                                    placeholder="Input penulis" value="{{ $gallery->penulis }}" disabled>
                            </div>
                            <div class="form-group mb-4">
                                <label for="isi">Isi</label>
                                <textarea name="isi" id="isi" class="form-control" rows="20" cols="10" disabled>{!! $gallery->body !!}</textarea>
                            </div>
                            <div class="row mb-2">
                                <div class="col-md-3">
                                    <img id="previewImg" alt="PreviewImg"
                                        src="{{ asset('storage/galleries') }}/{{ $gallery->gambar }}" height="200"
                                        width="600" class="img-thumbnail">
                                </div>
                                <div class="col-md-9">
                                    <div class="custom-file mb-2">
                                        <input type="file" class="form-control form-control-alternative" name="gambar"
                                            id="image" placeholder="Input file" disabled>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <button class="btn btn-success d-none" type="submit" id="btnS">Save</button>
                                <a href="{{ route('gallery.index') }}" class="btn btn-danger">Batal</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('datatables-js')
    <script src="https://cdn.ckeditor.com/ckeditor5/43.1.1/ckeditor5.umd.js"></script>
    <script src="{{ asset('assets/admin/assets/js/custom-js/custom-plugins.js') }}"></script>
    <script src="{{ asset('assets/admin/assets/js/custom-js/posts-set.js') }}"></script>

    <script>
        document.getElementById('btnEdit').addEventListener('click', function() {
            // Menghapus atribut 'disabled' dari input dan textarea
            document.getElementById('title').disabled = false;
            document.getElementById('penulis').disabled = false;
            document.getElementById('isi').disabled = false;
            document.getElementById('image').disabled = false;

            // Menampilkan tombol 'Save'
            document.getElementById('btnS').classList.remove('d-none');

            // Menyembunyikan tombol 'Edit'
            this.classList.add('d-none');
        });
    </script>
@endsection
