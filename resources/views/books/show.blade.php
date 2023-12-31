@extends('layouts.app')
@section('main')
    <!--  Row 1 -->
    <div class="row">
        <div class="col-lg-12 my-3">
            <h2><a href="/dashboard/books"><i class="ti ti-arrow-left"></i></a> Detail Buku</h2>
        </div>
    </div>
    <div class="row">
        @if ($book->image)
            <div class="col-lg-4">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title fw-semibold m-3">Cover Buku</h5>
                    </div>
                    <div class="card-body">
                        <img src="{{ asset('storage/' . $book->image) }}" height="440" class="m-2">
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
                            <p class="m-1">{{ $book->writer }}</p>
                        </div>
                    </div>
                    <div class="row my-3">
                        <div class="col-lg-6">
                            <strong class="m-1">Diupload pada</strong>
                        </div>
                        <div class="col-lg-6">
                            <p class="m-1">{{ $book->created_at->diffForHumans() }}</p>
                        </div>
                    </div>
                    <div class="row my-3">
                        <div class="col-lg-6 col-sm-12">
                            <strong class="m-1">Genre</strong>
                        </div>
                        <div class="col-lg-6 col-sm-12">
                            <p class="m-1">{{ $book->type }}</p>
                        </div>
                    </div>
                    <div class="row my-3">
                        <div class="col-lg-6 col-sm-12">
                            <strong class="m-1">Penerbit</strong>
                        </div>
                        <div class="col-lg-6 col-sm-12">
                            <p class="m-1">{{ $book->publisher }}</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card w-100">
                <div class="card-header">
                    <h5 class="card-title fw-semibold m-3">{{ $book->title }}</h5>
                </div>
                <div class="card-body p-3">
                    {!! $book->desc !!}
                </div>
            </div>
            <div class="col-lg-6 my-5">
                <div class="card w-100">
                    <div class="card-header">
                        <h5 class="card-title fw-semibold ">Pinjam {{ $book->title }} ?</h5>
                    </div>
                    <div class="card-body p-3">
                        <div class="row m-0">
                            <div class="col-lg-5 m-0">
                                <form action="/dashboard/bookings" method="POST">
                                    @csrf
                                    <input type="hidden" value="{{ $book->id }}" name="book_id">
                                    <input type="hidden" value="{{ auth()->user()->id }}" name="user_id">
                                    <input type="hidden" value="{{ 'Dipinjam' }}" name="status">
                                    <input type="hidden" value="{{ 0 }}" name="isDenda">
                                    <input type="hidden" value="{{ $book->stock }}" name="stock">
                                    <button class="btn btn-primary" type="submit">Pinjam</button>
                                </form>
                            </div>
                            {{-- <p>{{ $date_now->format('d-m-Y') }}</p> --}}
                            <div class="col-lg-5 m-0">
                                <a href="/dashboard/books" class="btn btn-outline-warning">Batal</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
