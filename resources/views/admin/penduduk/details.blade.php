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
                    <div class="card-header d-flex justify-content-between">
                        <h5>{{ $title }}</h5>
                        <button id="btnEdit" class="btn btn-primary">Edit</button>
                    </div>
                    <div class="card-body px-2 pt-0 pb-2 p-4">
                        <form action="{{ route('penduduk.update', ['penduduk' => $penduduk->id]) }}" class="px-4"
                            method="post">
                            @method('patch')
                            @csrf
                            <div class="form-group">
                                <label for="nik">NIK</label>
                                <input type="text" class="form-control" name="nik" id="nik"
                                    value="{{ $penduduk->nik }}" placeholder="Input nik" disabled>
                            </div>
                            <div class="form-group">
                                <label for="nama">Nama</label>
                                <input type="text" class="form-control" name="nama" id="nama"
                                    value="{{ $penduduk->nama }}" placeholder="Input nama" disabled>
                            </div>
                            <div class="form-group">
                                <label for="status">Status</label>
                                <select name="status" id="status" class="form-control" disabled>
                                    <option selected>--Pilih status--</option>
                                    <option value="Kepala keluarga"
                                        {{ Str::lower($penduduk->status) == 'kepala keluarga' ? 'selected' : '' }}>Kepala
                                        keluarga
                                    </option>
                                    <option value="Istri" {{ Str::lower($penduduk->status) == 'istri' ? 'selected' : '' }}>
                                        Istri
                                    </option>
                                    <option value="Anak" {{ Str::lower($penduduk->status) == 'inak' ? 'selected' : '' }}>
                                        Anak
                                    </option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="pendidikan_akhir">Pendidikan Akhir</label>
                                <input type="text" class="form-control" name="pendidikan_akhir" id="pendidikan_akhir"
                                    value="{{ $penduduk->pendidikan_akhir }}" placeholder="Input pendidikan akhir"
                                    disabled>
                            </div>
                            <div class="form-group">
                                <label for="pekerjaan">Pekerjaan</label>
                                <input type="text" class="form-control" name="pekerjaan" id="pekerjaan"
                                    value="{{ $penduduk->pekerjaan }}" placeholder="Input pekerjaan" disabled>
                            </div>
                            <div class="form-group">
                                <label for="nama_ibu">Nama Ibu</label>
                                <input type="text" class="form-control" name="nama_ibu" id="nama_ibu"
                                    value="{{ $penduduk->nama_ibu }}" placeholder="Input nama ibu" disabled>
                            </div>
                            <div class="form-group">
                                <label for="nama_ayah">Nama Ayah</label>
                                <input type="text" class="form-control" name="nama_ayah" id="nama_ayah"
                                    value="{{ $penduduk->nama_ayah }}" placeholder="Input nama ayah" disabled>
                            </div>
                            <div class="form-group">
                                <label for="no_kk">No KK</label>
                                <input type="text" class="form-control" name="no_kk" id="no_kk"
                                    value="{{ $penduduk->no_kk }}" placeholder="Input no kk" disabled>
                            </div>
                            <div class="form-group">
                                <label for="nm_kepala_kel">Nama kepala keluarga</label>
                                <input type="text" class="form-control" name="nm_kepala_kel" id="nm_kepala_kel"
                                    value="{{ $penduduk->nm_kepala_kel }}" placeholder="Input nama kepala keluarga"
                                    disabled>
                            </div>
                            <div class="form-group mb-4">
                                <label for="alamat">Alamat</label>
                                <textarea name="alamat" id="alamat" class="form-control" cols="10" rows="6" disabled>{{ $penduduk->alamat }}</textarea>
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

@section('datatables-js')
    <script src="{{ asset('assets/admin/assets/js/custom-js/penduduk-set.js') }}"></script>
@endsection
