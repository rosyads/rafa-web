@extends('dashboard.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">
            Products
        </h1>
    </div>

    <div class="col-lg-3">
        @if (session()->has("registerError"))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                {{ session("registerError") }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        
        <form action="/products/kinds" method="post" class="mb-5">
            @csrf
            <div class="mb-3">
                <label for="category_id" class="form-label">Category</label>
                <select class="form-select" name="category_id">
                    <option selected>Category</option>
                    @foreach ($categories as $category)
                        @if (old('category_id') == $category['id'])
                            <option value="{{ $category['id'] }}" selected>{{ $category['category'] }}</option>    
                        @else
                            <option value="{{ $category['id'] }}">{{ $category['category'] }}</option>    
                        @endif
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="name" class="form-label">Product Name</label>
                <input type="name" name="name" class="form-control @error('name')
                    is-invalid
                @enderror" id="name" value="{{ old('name') }}">
                @error('name')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
              </div>

            <button type="submit" class="btn btn-primary">Add Product Name</button>
        </form>
    </div>
@endsection