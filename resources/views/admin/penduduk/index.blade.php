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
                        <a href="{{ route('penduduk.create') }}" class="btn btn-success">Add Penduduk</a>
                    </div>
                    <div class="card-body px-2 pt-0 pb-2">
                        <div class="table-responsive pb-0">
                            <table class="table table-striped">
                                <thead class="text-center">
                                    <th>No</th>
                                    <th>NIK</th>
                                    <th>Nama</th>
                                    <th>Status</th>
                                    <th>Pendidikan akhir</th>
                                    <th>Pekerjaan</th>
                                    <th>#</th>
                                </thead>
                                <tbody>
                                    @forelse ($penduduks as $item)
                                        <tr class="text-center">
                                            <td>{{ $loop->iteration }}</td>
                                            <td><a href="{{ route('penduduk.show', ['penduduk' => $item->id]) }}"
                                                    class="fs-6 fw-medium text-success">{{ $item->nik }} <i
                                                        class="fa fa-pencil"></i></a></td>
                                            <td>{{ $item->nama }}</td>
                                            <td>{{ $item->status }}</td>
                                            <td>{{ $item->pendidikan_akhir }}</td>
                                            <td>{{ $item->pekerjaan }}</td>
                                            <td class="align-middle">
                                                <button
                                                    class="btn btn-link text-secondary mb-0 rounded-circle bg-light text-dark"
                                                    id="dropdownMenuButton1" data-bs-toggle="dropdown"
                                                    aria-expanded="false">
                                                    <i class="fa fa-ellipsis-v text-md"></i>
                                                </button>
                                                <ul class="dropdown-menu bg-dark" aria-labelledby="dropdownMenuButton1">
                                                    <li>
                                                        <form
                                                            action="{{ route('penduduk.destroy', ['penduduk' => $item->id]) }}"
                                                            method="post">
                                                            @method('delete')
                                                            @csrf
                                                            <button class="dropdown-item text-white" type="submit"><i
                                                                    class="fa fa-trash text-danger"></i>
                                                                Delete</button>
                                                        </form>
                                                    </li>
                                                    <li>
                                                        <a href="{{ route('penduduk.show', ['penduduk' => $item->id]) }}"
                                                            class="dropdown-item text-white">
                                                            <i class="fa fa-pencil text-warning"></i> Detail
                                                        </a>
                                                    </li>
                                                </ul>
                                            </td>
                                        </tr>
                                    @empty
                                        <tr class="text-center">
                                            <td colspan="7">Empty Data</td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
