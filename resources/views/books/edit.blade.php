@extends('layouts.app')
@section('main')
    <div class="col-lg-12 d-flex align-items-stretch">
        <div class="card w-100">
            <div class="card-body p-4">
                <form action="/dashboard/books/{{ $book->id }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('put')
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Judul</label>
                        <p>Tuliskan Judul Buku</p>
                        <input type="text"
                            class="form-control @error('title')
                            is-invalid
                        @enderror"
                            id="exampleFormControlInput1" name="title" value="{{ old('title', $book->title) }}">
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
                            id="exampleFormControlInput1" name="type" value="{{ old('type', $book->type) }}">
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
                            id="exampleFormControlInput1" name="writer" value="{{ old('writer', $book->writer) }}">
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
                            id="exampleFormControlInput1" name="publisher" value="{{ old('publisher', $book->publisher) }}">
                        @error('publisher')
                            <p style="color: red;">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Deskripsi</label>
                        <p>Tuliskan Deskripsi Buku Secara Singkat</p>
                        <textarea class="form-control @error('description')
                        is-invalid
                    @enderror"
                            id="exampleFormControlTextarea1" rows="10" name="description">{{ old('description', $book->description) }}</textarea>
                        @error('description')
                            <p style="color: red;">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="formFileMultiple" class="form-label">Foto</label>
                        <p>Masukan Foto Sampul Depan Buku</p>
                        <input class="form-control @error('image') is-invalid @enderror" type="file"
                            id="formFileMultiple" name="image">
                    </div>
                    <div class="modal-footer">
                        <a href="/dashboard/books" class="btn btn-outline-secondary" style="margin-right: 1%">Batalkan</a>
                        <button type="submit" class="btn btn-warning">Edit</button>
                    </div>
                </form>
            </div>
            </form>

        </div>
    </div>
    </div>
@endsection
