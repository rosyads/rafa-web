@extends('dashboard.layouts.main')

@section('container')
    <div class="container">
        <div class="row my-3">
            <div class="col-lg-8">
                <h2 class="mb-3">Report {{ $report->submit_date }}</h2>

                <a href="/reports" class="btn btn-success"><span data-feather="arrow-left"></span> Back to Report List</a>
                <a href="/reports/{{ $report->id }}/edit" class="btn btn-warning"><span data-feather="edit"></span> Edit</a>
                <form action="/reports/{{ $report->id }}" class="d-inline">
                    @method('delete')
                    @csrf
                    <button class="btn btn-danger" onclick="return confirm('Are you sure?')"><span data-feather="x-circle"></span> Delete</button>
                </form>

                <div class="col d-flex">
                    <dl class="col-sm-2 mt-5 me-5">
                        <dt class="col">Nama Produk</dt>
                        <dd class="col">{{ $report->product->name }}</dd>
                    </dl>
                    <dl class="col-sm-2 mt-5 me-5">
                        <dt class="col">Merk Produk</dt>
                        <dd class="col">{{ $report->brand->brand }}</dd>
                    </dl>
                    <dl class="col-sm-2 mt-5 me-5">
                        <dt class="col">Tipe Produk</dt>
                        <dd class="col">{{ $report->type->type }}</dd>
                    </dl>
                    <dl class="col-sm-2 mt-5 me-5">
                        <dt class="col">Serial Number</dt>
                        <dd class="col">{{ $report->serial_num }}</dd>
                    </dl>
                    <dl class="col-sm-2 mt-5 me-5">
                        <dt class="col">Version</dt>
                        <dd class="col">{{ $report->version }}</dd>
                    </dl>
                </div>
                <div class="col d-flex">
                    <dl class="col-sm-2 mt-2 me-5">
                        <dt class="col">Customer</dt>
                        <dd class="col">{{ $report->customer->name }}</dd>
                    </dl>
                    <dl class="col-sm-2 mt-2 me-5">
                        <dt class="col">Customer Address</dt>
                        <dd class="col">{{ $report->customer->address }}</dd>
                    </dl>
                </div>
                <div class="col d-flex">
                    <dl class="col-sm-2 mt-2 me-5">
                        <dt class="col">Jenis Pekerjaan</dt>
                        <dd class="col">{{ $report->job_title }}</dd>
                    </dl>
                </div>
                <div class="col d-flex">
                    <dl class="col-sm-2 mt-2 me-5">
                        <dt class="col">Report Fault</dt>
                        <dd class="col">{{ $report->report_fault }}</dd>
                    </dl>
                </div>
                <div class="col d-flex">
                    <dl class="col-sm-2 mt-2 me-5">
                        <dt class="col">Action</dt>
                        <dd class="col">{{ $report->action }}</dd>
                    </dl>
                </div>
                <div class="col d-flex">
                    <dl class="col-sm-2 mt-2 me-5">
                        <dt class="col">Remarks</dt>
                        <dd class="col">{{ $report->remarks }}</dd>
                    </dl>
                </div>
                <div class="col d-flex">
                    <dl class="col-sm-3 mt-2 me-5">
                        <dt class="col">Status After Service</dt>
                        <dd class="col">{{ $report->status }}</dd>
                    </dl>
                </div>

            </div>
        </div>
    </div>
@endsection