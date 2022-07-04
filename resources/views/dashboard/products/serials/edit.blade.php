@extends('dashboard.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">
            Edit product Detail
        </h1>
    </div>

    {{-- {{ dd($type->brand->) }} --}}

    <div class="col-lg-8">
        @if (session()->has("registerError"))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                {{ session("registerError") }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        
        <form action="/products/serials/{{ $serial->id }}" method="post" class="mb-5">
            @method('put')
            @csrf
            <dl class="row mt-5">
                <input type="hidden" name="id" value="{{ $serial->id }}">
                <dt class="col-md-3">Kategori Produk</dt>
                <dd class="col-md-9">{{ $serial->category->category }}</dd>
                <input type="hidden" name="category_id" value="{{ $serial->category->id }}">

                <dt class="col-md-3">Jenis Produk</dt>
                <dd class="col-md-9">{{ $serial->name->name }}</dd>
                <input type="hidden" name="name_id" value="{{ $serial->name->id }}">

                <dt class="col-md-3">Merk</dt>
                <dd class="col-md-9">{{ $serial->brand->brand }}</dd>
                <input type="hidden" name="brand_id" value="{{ $serial->brand->id }}">

                <dt class="col-md-3">Tipe Produk</dt>
                <dd class="col-md-9">{{ $serial->type->type }}</dd>
                <input type="hidden" name="type_id" value="{{ $serial->type->id }}">

                <div class="mb-3 col-md-5">
                    <label for="serial_number" class="form-label">Serial Number</label>
                    <input type="type" name="serial_number" class="form-control @error('serial_number')
                        is-invalid
                    @enderror" id="serial_number" value="{{ $serial->serial_number, old('serial_number') }}">
                    @error('serial_number')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3 col-md-5">
                    <label for="version" class="form-label">Version</label>
                    <input type="type" name="version" class="form-control @error('version')
                        is-invalid
                    @enderror" id="version" value="{{ $serial->version, old('version') }}">
                    @error('version')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
            </dl>            

            <button type="submit" class="btn btn-primary">Edit Product Detail</button>
        </form>
    </div>
@endsection