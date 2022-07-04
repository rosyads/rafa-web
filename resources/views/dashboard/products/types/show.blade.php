@extends('dashboard.layouts.main')

@section('container')
    <div class="container">
        <div class="row my-3">
            <div class="col-lg-8">
                <h2 class="mb-3">Product Type Details</h2>

                <a href="/products/types" class="btn btn-success"><span data-feather="arrow-left"></span> Back to Product Type List</a>
                <a href="/products/serials/create?type_id={{ $type->id }}" class="btn btn-primary"><span data-feather="plus-circle"></span> Add Serial Number</a>
                <a href="/products/types/{{ $type->id }}/edit" class="btn btn-warning"><span data-feather="edit"></span> Edit</a>
                <form action="/products/types/{{ $type->id }}" class="d-inline">
                    @method('delete')
                    @csrf
                    <button class="btn btn-danger" onclick="return confirm('Are you sure?')"><span data-feather="x-circle"></span> Delete</button>
                </form>

                @if ($type->image != null)
                    <div>
                        <img src="{{ $type->image }}" alt="{{ $type->type }}" class="img-fluid mt-3" height="200px" width="200px">
                    </div>
                @else
                    {{-- <div>
                        <img src="/img/profile.png" alt="{{ $user['name'] }}" class="img-fluid mt-3" height="200px" width="200px">
                    </div> --}}
                @endif

                <dl class="row mt-5">
                    <dt class="col-sm-3">Kategori Produk</dt>
                    <dd class="col-sm-9">{{ $type->brand->name->category->category }}</dd>

                    <dt class="col-sm-3">Jenis Produk</dt>
                    <dd class="col-sm-9">{{ $type->brand->name->name }}</dd>

                    <dt class="col-sm-3">Merk</dt>
                    <dd class="col-sm-9">{{ $type->brand->brand }}</dd>

                    <dt class="col-sm-3">Tipe Produk</dt>
                    <dd class="col-sm-9">{{ $type->type }}</dd>

                    <dt class="col-sm-3">Deskripsi Produk</dt>
                    <dd class="col-sm-9">{{ $type->description }}</dd>
                </dl>

                <table class="table table-striped table-sm">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Serial Number</th>
                            <th scope="col">Version</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        {{-- {{ dd(key($users)) }} --}}
                        {{-- {{ dd($products) }} --}}
                        {{-- {{ dd($serial_numbers) }} --}}
                        @foreach ($serial_numbers as $sn)
                            {{-- {{ dd($sn) }} --}}
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $sn->serial_number }}</td>
                                <td>{{ $sn->version }}</td>
                                <td>
                                    <a href="/products/serials/{{ $sn->id }}/edit?id={{ $sn->id }}" class="badge bg-warning"><span data-feather="edit"></span></a>
                                    <form action="/products/serials/{{ $sn->id }}?id={{ $sn->id }}&type_id={{ $type->id }}" method="post" class="d-inline">
                                        @method('delete')
                                        @csrf
                                        <button class="badge bg-danger border-0" onclick="return confirm('Are you sure to delete product serial number: {{ $sn->serial_number }}?')">
                                            <span data-feather="x-circle"></span>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                
            </div>
        </div>
    </div>
@endsection