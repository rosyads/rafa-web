@extends("dashboard.layouts.main")

@section("container")
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">
            Brands
        </h1>
    </div>

    @if (session()->has("success"))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session("success") }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <div class="table-responsive col-lg-8">
        <a href="/products/brands/create" class="btn btn-primary mb-3">Add Brand Name</a>
        <table class="table table-striped table-sm">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Category</th>
                    <th scope="col">Product Name</th>
                    <th scope="col">Brand Name</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                {{-- {{ dd(key($users)) }} --}}
                {{-- {{ dd($products) }} --}}
                @foreach ($brands as $brand)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $brand->name->category->category }}</td>
                        <td>{{ $brand->name->name }}</td>
                        <td>{{ $brand->brand }}</td>
                        <td>
                            {{-- <a href="/products/brands/{{ $brand->id }}" class="badge bg-info"><span data-feather="eye"></span></a> --}}
                            <a href="/products/brands/{{ $brand->id }}/edit" class="badge bg-warning"><span data-feather="edit"></span></a>
                            <form action="/products/brands/{{ $brand->id }}" method="post" class="d-inline">
                                @method('delete')
                                @csrf
                                <button class="badge bg-danger border-0" onclick="return confirm('Are you sure to delete brand: {{ $brand->brand }}?')">
                                    <span data-feather="x-circle"></span>
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection