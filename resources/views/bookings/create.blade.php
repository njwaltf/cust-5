@extends('layouts.app')
@section('main')
    <div class="col-lg-12 d-flex align-items-stretch">
        <div class="card w-100">
            <div class="card-body p-4">
                <form action="/dashboard/books" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Judul</label>
                        <p>Tuliskan Judul Buku</p>
                        <input type="text"
                            class="form-control @error('title')
                            is-invalid
                        @enderror"
                            id="exampleFormControlInput1" name="title" value="{{ old('title') }}">
                        @error('title')
                            <p style="color: red;">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Jenis</label>
                        <p>Tuliskan Jenis Buku</p>
                        <input type="text"
                            class="form-control @error('type')
                        is-invalid
                        @enderror"
                            id="exampleFormControlInput1" name="type" value="{{ old('type') }}">
                        @error('type')
                            <p style="color: red;">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Pengarang</label>
                        <p>Tuliskan Nama Pengarang Buku</p>
                        <input type="text"
                            class="form-control @error('writer')
                        is-invalid
                    @enderror"
                            id="exampleFormControlInput1" name="writer" value="{{ old('writer') }}">
                        @error('writer')
                            <p style="color: red;">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Penerbit</label>
                        <p>Tuliskan Penerbit Buku</p>
                        <input type="text"
                            class="form-control @error('publisher')
                        is-invalid
                    @enderror"
                            id="exampleFormControlInput1" name="publisher" value="{{ old('publisher') }}">
                        @error('publisher')
                            <p style="color: red;">{{ $message }}</p>
                        @enderror
                    </div>
                    {{-- <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Terbit</label>
                        <p>Tuliskan Tanggal dan Tahun Terbit</p>
                        <input type="text" class="form-control" id="exampleFormControlInput1" name="">
                    </div> --}}
                    {{-- <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Halaman</label>
                        <p>Tuliskan Berapa Halaman Buku</p>
                        <input type="text" class="form-control" id="exampleFormControlInput1">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Stok</label>
                        <p>Tuliskan Stok Buku</p>
                        <input type="text" class="form-control" id="exampleFormControlInput1">
                    </div> --}}
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Deskripsi</label>
                        <p>Tuliskan Deskripsi Buku Secara Singkat</p>
                        <textarea class="form-control @error('description')
                        is-invalid
                    @enderror"
                            id="exampleFormControlTextarea1" rows="10" name="description">{{ old('description') }}</textarea>
                        @error('description')
                            <p style="color: red;">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="formFileMultiple" class="form-label">Foto</label>
                        <p>Masukan Foto Sampul Depan Buku</p>
                        <input type="file" class="form-control @error('image') is-invalid @enderror" id="image"
                            name="image" value="{{ old('image') }}">
                    </div>
                    <div class="modal-footer">
                        <a href="/dashboard/books" class="btn btn-outline-secondary" style="margin-right: 1%">Batalkan</a>
                        <button type="submit" class="btn btn-primary">Tambah</button>
                    </div>
                </form>
            </div>
            </form>

        </div>
    </div>
    </div>
@endsection
