@extends('layouts.app')
@section('main')
    <!--  Row 1 -->
    <div class="row">
        <div class="col-lg-12 my-3">
            <h2><a href="/dashboard/books"><i class="ti ti-arrow-left"></i></a> Detail Peminjaman</h2>
        </div>
    </div>
    <div class="row">
        @if ($booking->book->image)
            <div class="col-lg-4">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title fw-semibold m-3">Cover Buku</h5>
                    </div>
                    <div class="card-body">
                        <img src="{{ asset('storage/' . $booking->book->image) }}" height="440" class="m-2">
                    </div>
                </div>
            </div>
        @endif
        {{-- <div class="col-lg-4">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title fw-semibold m-3">Cover Buku</h5>
                </div>
                <div class="card-body">
                    <img src="{{ asset('storage/' . $book->image) }}" height="440" class="m-2">
                </div>
            </div>
        </div> --}}
        <div class="col-lg-6">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title fw-semibold m-1">Informasi Lanjutan</h5>
                </div>
                <div class="card-body p-3">
                    <div class="row my-3">
                        <div class="col-lg-6">
                            <strong class="m-1">Penulis</strong>
                        </div>
                        <div class="col-lg-6">
                            <p class="m-1">{{ $booking->book->writer }}</p>
                        </div>
                    </div>
                    <div class="row my-3">
                        <div class="col-lg-6">
                            <strong class="m-1">Dipinjam pada</strong>
                        </div>
                        <div class="col-lg-6">
                            <p class="m-1">{{ date('d-m-Y', strtotime($booking->book_at)) }}</p>
                        </div>
                    </div>
                    <div class="row my-3">
                        <div class="col-lg-6 col-sm-12">
                            <strong class="m-1">Genre</strong>
                        </div>
                        <div class="col-lg-6 col-sm-12">
                            <p class="m-1">{{ $booking->book->type }}</p>
                        </div>
                    </div>
                    <div class="row my-3">
                        <div class="col-lg-6 col-sm-12">
                            <strong class="m-1">Status</strong>
                        </div>
                        <div class="col-lg-6 col-sm-12">
                            <span
                                @if ($booking->status === 'Menunggu') class="badge bg-warning rounded-3 fw-semibold"
                                    @elseif ($booking->status === 'Dipinjam')
                                        class="badge bg-success rounded-3 fw-semibold"
                                    @elseif ($booking->status === 'Dikembalikan')
                                        class="badge bg-black rounded-3 fw-semibold"
                                    @elseif ($booking->status === 'Ditolak')
                                        class="badge bg-danger rounded-3 fw-semibold"
                                    @elseif ($booking->status === 'Dikembalikan Terlambat')
                                        class="badge bg-danger rounded-3 fw-semibold" @endif>{{ $booking->status }}
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
