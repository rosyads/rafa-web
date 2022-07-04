@extends('dashboard.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">
            Edit Type
        </h1>
    </div>

    <div class="col-lg-8">
        @if (session()->has("updateError"))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                {{ session("updateError") }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        
        <form action="/products/types/{{ $type->id }}" method="post" class="mb-5">
            @method('put')
            @csrf
            <div class="mb-3">
                <label for="brand_id" class="form-label">Brand</label>
                <select class="form-select" name="brand_id">
                    <option selected>Brand</option>
                    @foreach ($brands as $brand)
                        @if (old('brand_id') == $brand->id || $type->brand_id == $brand->id)
                            <option value="{{ $brand->id }}" selected>{{ $brand->brand }}</option>    
                        @else
                            <option value="{{ $brand->id }}">{{ $brand->brand }}</option>    
                        @endif
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="type" class="form-label">Product Type</label>
                <input type="type" name="type" class="form-control @error('type')
                    is-invalid
                @enderror" id="type" value="{{ $type->type, old('type') }}">
                @error('type')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
              </div>
            <div class="mb-3">
                <label for="description" class="form-label">Product Description</label>
                <input type="type" name="description" class="form-control @error('description')
                    is-invalid
                @enderror" id="description" value="{{ $type->description, old('description') }}">
                @error('description')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
              </div>

            <button type="submit" class="btn btn-primary">Update Product Type</button>
        </form>
    </div>
@endsection