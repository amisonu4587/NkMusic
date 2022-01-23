@extends('Admin.layouts.leftMenu') @section('title') Admin||Add Sub-Category @endsection @section('content')

<div class="page-header mt-0 p-3">
    <h3 class="mb-sm-0">Add Sub-Category</h3>
    <ol class="breadcrumb mb-0">
        <li class="breadcrumb-item">
            <a href="/"><i class="fe fe-home"></i></a>
        </li>
        <li class="breadcrumb-item active" aria-current="page">Add Sub-Category</li>
    </ol>
</div>
@if(isset($event_details))
<div class="row">
    <div class="col-md-12">
        
        <form id="edit_isre_code" action="/edit_isre_action" method="post" enctype="multipart/form-data">
            @csrf
            <div class="card shadow">
                <div class="card-header">
                    <h2 class="mb-0">Add ISRE</h2>
                </div>
                <div class="card-body">
                    <div class="row">
                      

                    <input type="hidden" class="form-control"  name="id" id="id"  value="{{$event_details->id}}" required>

                    <div class="col-md-6">
                    <div class="form-group">
                                <lebel>Enter ISRE Code</lebel>
                                <input type="text" class="form-control" name="isre_code" id="isre_code" value="{{$event_details->generate_isre}}" placeholder="Enter ISRE Code" value="" />
                                <div class="text-danger"><strong id="subcat_name_error"></strong></div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <lebel>Enter UPC Code</lebel>
                                <input type="text" class="form-control" name="upc_code" id="upc_code" value="{{$event_details->generate_upc}}" placeholder="Enter UPC Code" value="" />
                                <div class="text-danger"><strong id="upc_code_error"></strong></div>
                            </div>
                        </div>

                        <div class="col-md-5"></div>
                        <div class="col-md-4">
                            <input type="submit" class="btn btn-primary mt-1 mb-1" value="Submit" />
                        </div>
                        <div class="col-md-3"></div>
                    </div>
                </div>
            </div>
        </form>
        
    </div>
</div>
@endif
@endsection @section('add-js') @endsection
