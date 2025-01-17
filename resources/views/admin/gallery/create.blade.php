@extends('layouts.main-admin')

@section('datatables-css')
    <link rel="stylesheet" href="{{ asset('ckeditor/ckeditor5.css') }}">
@endsection

@section('content-admin')
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-md-12">
                @if (session()->get('errors'))
                    <div class="alert alert-danger fade show text-white" role="alert">
                        @foreach ($errors->all() as $error)
                            <span class="alert-text">* {{ $error }}</span><br>
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
                        <form action="{{ route('gallery.store') }}" class="px-4" method="post"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="title">Judul</label>
                                <input type="text" class="form-control" name="title" id="title"
                                    placeholder="Input title">
                            </div>
                            <div class="form-group">
                                <label for="penulis">Penulis</label>
                                <input type="text" class="form-control" name="penulis" id="penulis"
                                    placeholder="Input penulis">
                            </div>
                            <div class="form-group mb-4">
                                <label for="isi">Body</label>
                                <textarea name="isi" id="isi" class="form-control" cols="10" rows="5"></textarea>
                            </div>
                            <div class="row mb-2">
                                <div class="col-md-3">
                                    <img id="previewImg" alt="PreviewImg" height="300" width="300"
                                        class="img-thumbnail" loading="lazy">
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
    <script src="https://cdn.ckeditor.com/ckeditor5/44.1.0/ckeditor5.umd.js"></script>
    <script>
        const {
            ClassicEditor,
            Essentials,
            Bold,
            Italic,
            Paragraph
        } = CKEDITOR;

        ClassicEditor.create(document.querySelector('#isi'), {
            plugins: [Essentials, Bold, Italic, Paragraph],
            toolbar: ['undo', 'redo', '|', 'bold', 'italic'],
        }).catch(error => console.error(error));
    </script>
    <script src="{{ asset('assets/admin/assets/js/custom-js/custom-plugins.min.js') }}" defer></script>
@endsection
