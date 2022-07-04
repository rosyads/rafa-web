@extends('dashboard.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">
            Edit Category
        </h1>
    </div>

    <div class="col-lg-8">
        @if (session()->has("updateError"))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                {{ session("updateError") }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        
        <form action="/products/categories/{{ $category->id }}" method="post" class="mb-5">
            @method('put')
            @csrf

            <div class="mb-3">  
                <label for="category" class="form-label">Category</label>
                <input type="category" name="category" class="form-control @error('category')
                    is-invalid
                @enderror" id="category" value="{{ $category->category, old('category') }}">
                @error('category')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary">Update Category</button>
        </form>
    </div>
@endsection