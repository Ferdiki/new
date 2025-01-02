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
                        <form action="{{ route('penduduk.store') }}" class="px-4" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="nik">NIK</label>
                                <input type="text" class="form-control" name="nik" id="nik"
                                    placeholder="Input nik">
                            </div>
                            <div class="form-group">
                                <label for="nama">Nama</label>
                                <input type="text" class="form-control" name="nama" id="nama"
                                    placeholder="Input nama">
                            </div>
                            <div class="form-group">
                                <label for="status">Status</label>
                                <select name="status" id="status" class="form-control">
                                    <option selected>--Pilih status--</option>
                                    <option value="Kepala keluarga">Kepala keluarga</option>
                                    <option value="Istri">Istri</option>
                                    <option value="Anak">Anak</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="pendidikan_akhir">Pendidikan Akhir</label>
                                <input type="text" class="form-control" name="pendidikan_akhir" id="pendidikan_akhir"
                                    placeholder="Input pendidikan akhir">
                            </div>
                            <div class="form-group">
                                <label for="pekerjaan">Pekerjaan</label>
                                <input type="text" class="form-control" name="pekerjaan" id="pekerjaan"
                                    placeholder="Input pekerjaan">
                            </div>
                            <div class="form-group">
                                <label for="nama_ibu">Nama Ibu</label>
                                <input type="text" class="form-control" name="nama_ibu" id="nama_ibu"
                                    placeholder="Input nama ibu">
                            </div>
                            <div class="form-group">
                                <label for="nama_ayah">Nama Ayah</label>
                                <input type="text" class="form-control" name="nama_ayah" id="nama_ayah"
                                    placeholder="Input nama ayah">
                            </div>
                            <div class="form-group">
                                <label for="no_kk">No KK</label>
                                <input type="text" class="form-control" name="no_kk" id="no_kk"
                                    placeholder="Input no kk">
                            </div>
                            <div class="form-group">
                                <label for="nm_kepala_kel">Nama kepala keluarga</label>
                                <input type="text" class="form-control" name="nm_kepala_kel" id="nm_kepala_kel"
                                    placeholder="Input nama kepala keluarga">
                            </div>
                            <div class="form-group mb-4">
                                <label for="alamat">Alamat</label>
                                <textarea name="alamat" id="alamat" class="form-control" cols="10" rows="6"></textarea>
                            </div>
                            <div class="form-group">
                                <button class="btn btn-success" type="submit">Save</button>
                                <a href="{{ route('penduduk.index') }}" class="btn btn-danger">Batal</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
