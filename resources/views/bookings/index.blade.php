@extends('layouts.app')
@section('main')
    {{-- @if (session()->has('success'))
        <div class="row">
            <div class="col-lg-12">
                <div class="alert alert-success" role="alert">
                    {{ session('success') }}
                </div>
            </div>
        </div>
    @endif --}}
    {{-- <div class="row">
        <div class="col-lg-12">
            <div class="alert alert-success" role="alert">
                A simple success alert—check it out!
            </div>
        </div>
    </div> --}}
    @if (session()->has('success'))
        <div class="row">
            <div class="col-lg-12">
                <div class="alert alert-success" role="alert">
                    {{ session('success') }}
                </div>
            </div>
        </div>
    @endif
    @if (session()->has('successDelete'))
        <div class="row">
            <div class="col-lg-12">
                <div class="alert alert-warning" role="alert">
                    {{ session('successDelete') }}
                </div>
            </div>
        </div>
    @endif
    @if (session()->has('successEdit'))
        <div class="row">
            <div class="col-lg-12">
                <div class="alert alert-warning" role="alert">
                    {{ session('successEdit') }}
                </div>
            </div>
        </div>
    @endif
    <div class="row">
        <div class="col-lg-12 d-flex align-items-stretch">
            <div class="card w-100">
                <div class="card-body p-4">
                    <h5 class="card-title fw-semibold mb-4">Daftar Buku</h5>
                    <div class="table-responsive">
                        <table class="table text-nowrap mb-0 align-middle">
                            <thead class="text-dark fs-4">
                                <tr>
                                    <th class="border-bottom-0">
                                        <h6 class="fw-semibold mb-0">No</h6>
                                    </th>
                                    <th class="border-bottom-0">
                                        <h6 class="fw-semibold mb-0">Judul</h6>
                                    </th>
                                    <th class="border-bottom-0">
                                        <h6 class="fw-semibold mb-0">Tipe</h6>
                                    </th>
                                    <th class="border-bottom-0">
                                        <h6 class="fw-semibold mb-0">Penulis</h6>
                                    </th>
                                    <th class="border-bottom-0">
                                        <h6 class="fw-semibold mb-0">Tanggal Peminjaman</h6>
                                    </th>
                                    <th class="border-bottom-0">
                                        <h6 class="fw-semibold mb-0">Action</h6>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($bookings as $booking)
                                    <tr>
                                        <td class="border-bottom-0">
                                            <h6 class="mb-0 fw-normal">{{ $loop->iteration }}</h6>
                                        </td>
                                        <td class="border-bottom-0">
                                            <h6 class="mb-0 fw-normal">{{ $booking->book->title }}</h6>
                                        </td>
                                        <td class="border-bottom-0">
                                            <p class="mb-0 fw-normal">{{ $booking->book->type }}</p>
                                        </td>
                                        <td class="border-bottom-0">
                                            <div class="d-flex align-items-center">
                                                <p class="mb-0 fw-normal">{{ $booking->book->writer }}</p>
                                            </div>
                                        </td>
                                        <td class="border-bottom-0">
                                            <h6 class="mb-0 fw-normal">{{ date('d-m-Y', strtotime($booking->book_at)) }}
                                            </h6>
                                        </td>
                                        <td class="border-bottom-0">
                                            {{-- detail --}}
                                            <a href="/dashboard/bookings/{{ $booking->id }}"
                                                class="btn btn-info m-1">Detail
                                                <i class="ti ti-arrow-right"></i></a>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="6" class="text-center">
                                            Book not found
                                        </td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
