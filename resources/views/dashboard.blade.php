@extends('layouts.app')
@section('main')
    <div class="row">
        <div class="col-lg- d-flex align-items-stretch">
            <div class="card w-100">
                <div class="card-body p-4">
                    <h5 class="card-title fw-semibold mb-4">Hello {{ auth()->user()->name }}</h5>
                </div>
            </div>
        </div>
    </div>
@endsection
