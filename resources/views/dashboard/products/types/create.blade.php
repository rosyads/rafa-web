@extends('dashboard.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">
            Product Types
        </h1>
    </div>

    <div class="col-lg-3">
        @if (session()->has("registerError"))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                {{ session("registerError") }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        
        <form action="/products/types" method="post" class="mb-5">
            @csrf
            <div class="mb-3">
                <label for="category_id" class="form-label">Category</label>
                <select id="category" class="form-select" name="category_id">
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
                <label for="name_id" class="form-label">Product Name</label>
                <select id="names" class="form-select" name="name_id">
                    <option selected>Product Name</option>
                    {{-- @foreach ($names as $name)
                        @if (old('name_id') == $name->id)
                            <option value="{{ $name->id }}" selected>{{ $name->name }}</option>    
                        @else
                            <option value="{{ $name->id }}">{{ $name->name }}</option>    
                        @endif
                    @endforeach --}}
                </select>
            </div>
            <div class="mb-3">
                <label for="brand_id" class="form-label">Brand</label>
                <select id="brands" class="form-select" name="brand_id">
                    <option selected>Brand</option>
                    {{-- @foreach ($brands as $brand)
                        @if (old('brand_id') == $brand->id)
                            <option value="{{ $brand->id }}" selected>{{ $brand->brand }}</option>    
                        @else
                            <option value="{{ $brand->id }}">{{ $brand->brand }}</option>    
                        @endif
                    @endforeach --}}
                </select>
            </div>
            <div class="mb-3">
                <label for="type" class="form-label">Product Type</label>
                <input type="type" name="type" class="form-control @error('type')
                    is-invalid
                @enderror" id="type" value="{{ old('type') }}">
                @error('type')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
              </div>
            <div class="mb-3">
                <label for="description" class="form-label">Product Description</label>
                <input type="type" name="description" class="form-control @error('description')
                    is-invalid
                @enderror" id="description" value="{{ old('description') }}">
                @error('description')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
              </div>

            <button type="submit" class="btn btn-primary">Add Product Type</button>
        </form>
    </div>
@endsection

@section("scripts")
    <!-- Script -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script type='text/javascript'>
        $(document).ready(function(){
    
            // Category Change
            $('#category').change(function(){
        
                // Category id
                var id = $(this).val();
                console.log(id);

                // Empty the dropdown
                $('#names').find('option').not(':first').remove();
                console.log('emptied product names');
        
                // AJAX request 
                $.ajax({
                    url: '/getProducts/'+id,
                    type: 'get',
                    dataType: 'json',
                    success: function(response){
                    var len = 0;
                    console.log(response['data']);
                    if(response['data'] != null){
                        len = response['data'].length;
                    }
        
                    if(len > 0){
                        // Read data and create <option >
                        for(var i=0; i<len; i++){
        
                            var id = response['data'][i].id;
                            var name = response['data'][i].name;
        
                            var option = "<option value='"+id+"'>"+name+"</option>";
        
                            console.log(option);
                            $("#names").append(option); 
                        }
                    }
        
                    }
                });
            });

            // name Change
            $('#names').change(function(){
        
                // name id
                var id = $(this).val();
                console.log(id);

                // AJAX request 
                $.ajax({
                    url: '/getBrands/'+id,
                    type: 'get',
                    dataType: 'json',
                    success: function(response){
                    var len = 0;
                    console.log(response['data']);
                    if(response['data'] != null){
                        len = response['data'].length;
                    }

                    if(len > 0){
                        // Read data and create <option >
                        for(var i=0; i<len; i++){

                            var id = response['data'][i].id;
                            var name = response['data'][i].brand;

                            var option = "<option value='"+id+"'>"+name+"</option>";

                            console.log(option);
                            $("#brands").append(option); 
                        }
                    }

                    }
                });
            });
            

        });
    </script>
@endsection