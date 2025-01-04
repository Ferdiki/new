@extends('layouts.main-admin')

@section('datatables-css')
    <link rel="stylesheet" href="https://cdn.ckeditor.com/ckeditor5/43.1.1/ckeditor5.css" />
@endsection

@section('content-admin')
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-md-12">
                {{-- Error Alert --}}
                @if ($errors->any())
                    <div class="alert alert-danger fade show text-white" role="alert">
                        @foreach ($errors->all() as $error)
                            <span class="alert-text">* {{ $error }}</span><br>
                        @endforeach
                    </div>
                @endif

                {{-- Success/Failure Alert --}}
                @if (session()->has('success'))
                    <div class="alert alert-success alert-dismissible fade show mt-2" role="alert">
                        <span class="text-white">{{ session('success') }}</span>
                        <button type="button" class="btn-close text-white" data-bs-dismiss="alert"
                            aria-label="Close">X</button>
                    </div>
                @elseif(session()->has('failed'))
                    <div class="alert alert-danger alert-dismissible fade show mt-2" role="alert">
                        <span class="text-white">{{ session('failed') }}</span>
                        <button type="button" class="btn-close text-white" data-bs-dismiss="alert"
                            aria-label="Close">X</button>
                    </div>
                @endif

                {{-- Form --}}
                <div class="card mb-2">
                    <div class="card-header">
                        <h5>{{ $title }}</h5>
                    </div>
                    <div class="card-body px-4 pt-0 pb-2">
                        <form action="{{ route('articles.store') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            {{-- Title --}}
                            <div class="form-group">
                                <label for="title">Judul</label>
                                <input type="text" name="title" id="title" class="form-control"
                                    placeholder="Input title">
                            </div>

                            {{-- Category --}}
                            <div class="form-group">
                                <label for="category_id">Kategori</label>
                                <select name="category_id" id="category_id" class="form-control">
                                    <option selected>--Pilih kategori--</option>
                                    @foreach ($categories as $item)
                                        <option value="{{ $item->id }}">{{ $item->category }}</option>
                                    @endforeach
                                </select>
                            </div>

                            {{-- Author --}}
                            <div class="form-group">
                                <label for="penulis">Penulis</label>
                                <input type="text" name="penulis" id="penulis" class="form-control"
                                    placeholder="Input penulis">
                            </div>

                            {{-- Body --}}
                            <div class="form-group mb-4">
                                <label for="isi">Body</label>
                                <textarea name="isi" id="isi" class="form-control" cols="10" rows="5"></textarea>
                            </div>

                            {{-- Image Upload --}}
                            <div class="row mb-2">
                                <div class="col-md-3">
                                    <img id="previewImg" alt="PreviewImg" height="300" width="300"
                                        class="img-thumbnail">
                                </div>
                                <div class="col-md-9">
                                    <input type="file" name="gambar" id="image"
                                        class="form-control form-control-alternative">
                                </div>
                            </div>

                            {{-- Actions --}}
                            <div class="form-group">
                                <button class="btn btn-success" type="submit">Save</button>
                                <a href="{{ route('articles.index') }}" class="btn btn-danger">Batal</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('datatables-js')
    <script>
        const {
            ClassicEditor,
            Essentials,
            Bold,
            Italic,
            Font,
            Paragraph
        } = CKEDITOR;

        ClassicEditor.create(document.querySelector('#isi'), {
            plugins: [Essentials, Bold, Italic, Font, Paragraph],
            toolbar: [
                'undo', 'redo', '|', 'bold', 'italic', '|',
                'fontSize', 'fontFamily', 'fontColor', 'fontBackgroundColor'
            ]
        }).catch(error => console.error(error));
    </script>
    <script src="{{ asset('assets/admin/assets/js/custom-js/custom-plugins.js') }}" defer></script>
@endsection
