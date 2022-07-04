@extends('dashboard.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">
            Brands
        </h1>
    </div>

    <div class="col-lg-3">
        @if (session()->has("registerError"))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                {{ session("registerError") }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        
        <form action="/products/brands" method="post" class="mb-5">
            @csrf
            <div class="mb-3">
                <label for="name_id" class="form-label">Product Name</label>
                <select class="form-select" name="name_id">
                    <option selected>Product Name</option>
                    @foreach ($names as $name)
                        @if (old('name_id') == $name->id)
                            <option value="{{ $name->id }}" selected>{{ $name->name }}</option>    
                        @else
                            <option value="{{ $name->id }}">{{ $name->name }}</option>    
                        @endif
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="brand" class="form-label">Brand Name</label>
                <input type="brand" name="brand" class="form-control @error('brand')
                    is-invalid
                @enderror" id="brand" value="{{ old('brand') }}">
                @error('brand')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
              </div>

            <button type="submit" class="btn btn-primary">Add Brand Name</button>
        </form>
    </div>
@endsection