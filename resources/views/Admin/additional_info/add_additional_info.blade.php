@extends('Admin.layouts.leftMenu') @section('title') Admin||Add Additional Information @endsection @section('content')

<div class="page-header mt-0 p-3">
    <h3 class="mb-sm-0">Add Additional Information</h3>
    <ol class="breadcrumb mb-0">
        <li class="breadcrumb-item">
            <a href="/"><i class="fe fe-home"></i></a>
        </li>
        <li class="breadcrumb-item active" aria-current="page">Add Additional information</li>
    </ol>
</div>
<div class="row">
    <div class="col-md-12">
        
        <form id="add_additional_action_code" action="/add_additional_action" action="#" method="post" enctype="multipart/form-data">
            @csrf
            <div class="card shadow">
                <div class="card-header">
                    <h2 class="mb-0">Add Additional Information</h2>
                </div>
                <div class="card-body">
                    <div class="row">
                      

                        

                        <div class="col-md-12">
                            <div class="form-group">
                                <lebel>Enter Additional Information</lebel>
                                <input type="text" class="form-control" name="additional_info" id="additional_info" placeholder="Enter Additional Information" value="" />
                                <div class="text-danger"><strong id="additional_info_error"></strong></div>
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

@endsection @section('add-js') @endsection
