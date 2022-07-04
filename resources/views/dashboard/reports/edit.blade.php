@extends('dashboard.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">
            Edit Report
        </h1>
    </div>

    <div class="col-lg-8">
        @if (session()->has("updateError"))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                {{ session("updateError") }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        
        <form action="/reports/{{ $report->id }}" method="post" class="mb-5">
            @method('put')
            @csrf
            <div class="col d-flex">
                <div class="mb-3 me-3">
                    <label for="product_id" class="form-label">Product Name</label>
                    <select id="products" class="form-select" name="product_id">
                        <option value='-1' selected>Product Name</option>
                        @foreach ($products as $product)
                            @if (old('product_id') == $product->id)
                                <option value="{{ $product->id }}" selected>{{ $product->name }}</option>    
                            @else
                                @if ($report->product_id == $product->id)
                                    <option value="{{ $product->id }}" selected>{{ $product->name }}</option>    
                                @else
                                    <option value="{{ $product->id }}">{{ $product->name }}</option> 
                                @endif
                            @endif
                        @endforeach
                    </select>
                </div>
                <div class="mb-3 me-3">
                    <label for="brand_id" class="form-label">Brand</label>
                    <select id="brands" class="form-select" name="brand_id">
                        <option value='-1' selected>Brand</option>
                        {{-- @foreach ($brands as $brand)
                            @if (old('brand_id') == $brand->id)
                                <option value="{{ $brand->id }}" selected>{{ $brand->brand }}</option>    
                            @else
                                <option value="{{ $brand->id }}">{{ $brand->brand }}</option>    
                            @endif
                        @endforeach --}}
                    </select>
                </div>
                <div class="mb-3 me-3">
                    <label for="type_id" class="form-label">Type</label>
                    <select id="types" class="form-select" name="type_id">
                        <option value='-1' selected>Type</option>
                        {{-- @foreach ($types as $type)
                            @if (old('type_id') == $type->id)
                                <option value="{{ $type->id }}" selected>{{ $type->type }}</option>    
                            @else
                                <option value="{{ $type->id }}">{{ $type->type }}</option>    
                            @endif
                        @endforeach --}}
                    </select>
                </div>
                <div class="mb-3 me-3">
                    <label for="serial_num" class="form-label">Serial Number</label>
                    <input type="type" name="serial_num" class="form-control @error('serial_num')
                        is-invalid
                    @enderror" id="serial_num" value="{{ $report->serial_num, old('serial_num') }}">
                    @error('serial_num')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="version" class="form-label">Product Version</label>
                    <input type="type" name="version" class="form-control @error('version')
                        is-invalid
                    @enderror" id="version" value="{{ $report->version, old('version') }}">
                    @error('version')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="col d-flex">
                <div class="mb-3 me-5">
                    <label for="customer_id" class="form-label">Customer</label>
                    <select class="form-select" name="customer_id">
                        <option selected>Customer Name</option>
                        @foreach ($customers as $customer)
                            @if (old('customer_id') == $customer->id)
                                <option value="{{ $customer->id }}" selected>{{ $customer->name }}</option>    
                            @else
                                @if($report->customer_id == $customer->id)
                                    <option value="{{ $customer->id }}" selected>{{ $customer->name }}</option>
                                @else
                                    <option value="{{ $customer->id }}">{{ $customer->name }}</option>
                                @endif
                            @endif
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="col d-flex">
                Jenis Pekerjaan
            </div>
            <div class="col d-flex">
                    <div class="form-check mb-2 me-3">
                        <input class="form-check-input" type="radio" name="job_title" id="job_title" value="Install" @if ($report->job_title == 'Install')
                            Checked
                        @endif>
                        <label class="form-check-label" for="job_title">
                          Install
                        </label>
                      </div>
                    <div class="form-check me-3">
                        <input class="form-check-input" type="radio" name="job_title" id="job_title" value="Repair" @if ($report->job_title == 'Repair')
                            Checked
                        @endif>
                        <label class="form-check-label" for="job_title">
                          Repair
                        </label>
                    </div>
                    <div class="form-check me-3">
                        <input class="form-check-input" type="radio" name="job_title" id="job_title" value="Update" @if ($report->job_title == 'Update')
                            Checked
                        @endif>>
                        <label class="form-check-label" for="job_title">
                          Update
                        </label>
                    </div>
            </div>
            <div class="col d-flex">
                <div class="form-check mb-3 me-3">
                    <input class="form-check-input" type="radio" name="job_title" id="job_title" value="Training" @if ($report->job_title == 'Training')
                            Checked
                        @endif>
                    <label class="form-check-label" for="job_title">
                      Training
                    </label>
                </div>
                <div class="form-check me-3">
                    <input class="form-check-input" type="radio" name="job_title" id="job_title" value="Maintenance" @if ($report->job_title == 'Maintenance')
                            Checked
                        @endif>
                    <label class="form-check-label" for="job_title">
                      Maintenance
                    </label>
                </div>
                <div class="form-check me-3">
                    <input class="form-check-input" type="radio" name="job_title" id="job_title" value="Refurbishment" @if ($report->job_title == 'Refurbishment')
                            Checked
                        @endif>
                    <label class="form-check-label" for="job_title">
                      Refurbishment
                    </label>
                </div>
            </div>
            <div class="mb-3">
                <label for="report_fault" class="form-label">Report Fault</label>
                <textarea id="report_fault" class="form-control" name="report_fault" aria-label="With textarea"></textarea>
            </div>
            <div class="mb-3">
                <label for="action" class="form-label">Actions</label>
                <textarea id="action" class="form-control" name="action" aria-label="With textarea"></textarea>
            </div>
            <div class="mb-3">
                <label for="remarks" class="form-label">Remarks</label>
                <textarea id="remarks" class="form-control" name="remarks" aria-label="With textarea"></textarea>
            </div>
            <div class="col d-flex">
                Status after service:
            </div>
            <div class="col d-flex">
                <div class="form-check mb-3 me-3">
                    <input class="form-check-input" type="radio" name="status" id="status" value="Operational" @if ($report->status == 'Operational')
                            Checked
                        @endif>
                    <label class="form-check-label" for="status">
                      Operational
                    </label>
                </div>
                <div class="form-check me-3">
                    <input class="form-check-input" type="radio" name="status" id="status" value="Non Operational" @if ($report->status == 'Non Operational')
                            Checked
                        @endif>
                    <label class="form-check-label" for="status">
                      Non Operational
                    </label>
                </div>
                <div class="form-check me-3">
                    <input class="form-check-input" type="radio" name="status" id="status" value="To be Monitored" @if ($report->status == 'To be Monitored')
                            Checked
                        @endif>
                    <label class="form-check-label" for="status">
                      To be Monitored
                    </label>
                </div>
            </div>

            <button type="submit" class="btn btn-primary">Update Report</button>
        </form>
    </div>
@endsection

@section("scripts")
    <!-- Script -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script type='text/javascript'>
        $(document).ready(function(){

            if($('#products').val() != '-1'){        
                // Product id
                var id = $('#products').val();
                console.log(id);

                // Empty the dropdown
                $('#brands').find('option').not(':first').remove();
                console.log('emptied brands');
                $('#types').find('option').not(':first').remove();
                console.log('emptied types');

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

                                if(id == "{{ $report->brand_id }}"){
                                    option = "<option value='"+id+"' selected>"+name+"</option>";
                                }

                                console.log(option);
                                $("#brands").append(option); 
                            }
                        }

                    }
                });

                if("{{ $report->brand_id }}" != '-1'){        
                    // Product id
                    var id = "{{ $report->brand_id }}";
                    console.log(id);

                    // Empty the dropdown
                    $('#types').find('option').not(':first').remove();
                    console.log('emptied types');

                    // AJAX request 
                    $.ajax({
                        url: '/getTypes/'+id,
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
                                    var name = response['data'][i].type;
                                    var option = "<option value='"+id+"'>"+name+"</option>";

                                    if(id == "{{ $report->type_id }}"){
                                        option = "<option value='"+id+"' selected>"+name+"</option>";
                                    }

                                    console.log(option);
                                    $("#types").append(option); 
                                }
                            }

                        }
                    });
                }
            }

            if("{{ $report->report_fault }}" != null){
                $('#report_fault').val("{{ $report->report_fault }}");
            }

            if("{{ $report->action }}" != null){
                $('#action').val("{{ $report->action }}");
            }

            if("{{ $report->remarks }}" != null){
                $('#remarks').val("{{ $report->remarks }}");
            }
    
            // Product Change
            $('#products').change(function(){
        
                // Product id
                var id = $(this).val();
                console.log(id);
        
                // Empty the dropdown
                $('#brands').find('option').not(':first').remove();
                console.log('emptied brands');
                $('#types').find('option').not(':first').remove();
                console.log('emptied types');
        
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

            // Brand Change
            $('#brands').change(function(){
        
                // Brand id
                var id = $(this).val();
                console.log(id);

                // Empty the dropdown
                $('#types').find('option').not(':first').remove();
                console.log('emptied types');

                // AJAX request 
                $.ajax({
                    url: '/getTypes/'+id,
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
                            var name = response['data'][i].type;

                            var option = "<option value='"+id+"'>"+name+"</option>";

                            console.log(option);
                            $("#types").append(option); 
                        }
                    }

                    }
                });
            });

        });
    </script>
@endsection