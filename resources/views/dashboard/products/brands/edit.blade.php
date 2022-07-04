@extends('dashboard.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">
            Edit Brand
        </h1>
    </div>

    <div class="col-lg-8">
        @if (session()->has("updateError"))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                {{ session("updateError") }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        
        <form action="/products/brands/{{ $brand->id }}" method="post" class="mb-5">
            @method('put')
            @csrf
            <div class="mb-3">
                <label for="name_id" class="form-label">Category</label>
                <select class="form-select" name="name_id">
                    <option>Product Name</option>
                    @foreach ($products as $product)
                        @if (old('name_id') == $product->id || $brand->name_id == $product->id)
                            <option value="{{ $product->id }}" selected>{{ $product->name }}</option>    
                        @else
                            <option value="{{ $product->id }}">{{ $product->name }}</option>    
                        @endif
                    @endforeach
                </select>
            </div>
            <div class="mb-3">  
                <label for="brand" class="form-label">Brand</label>
                <input type="name" name="brand" class="form-control @error('brand')
                    is-invalid
                @enderror" id="brand" value="{{ $brand->brand, old('brand') }}">
                @error('brand')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary">Update Brand</button>
        </form>
    </div>
@endsection