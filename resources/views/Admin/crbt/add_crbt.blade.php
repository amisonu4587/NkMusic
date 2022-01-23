@extends('Admin.layouts.leftMenu') @section('title') Admin||Add CRBT @endsection @section('content')

<div class="page-header mt-0 p-3">
    <h3 class="mb-sm-0">Add CRBT</h3>
    <ol class="breadcrumb mb-0">
        <li class="breadcrumb-item">
            <a href="/"><i class="fe fe-home"></i></a>
        </li>
        <li class="breadcrumb-item active" aria-current="page">Add CRBT</li>
    </ol>
</div>
<div class="row">
    <div class="col-md-12">
        <form id="add_crbt_code" action="/add_crbt_action" method="post" enctype="multipart/form-data">
            @csrf
            <div class="card shadow">
                <div class="card-header">
                    <h2 class="mb-0">Add CRBT</h2>
                </div>
                <div class="card-body">
                    <div class="row">
                      

                        

                    <div class="col-md-6">
                            <div class="form-group">
                                <lebel>Chose user Name</lebel>
                                <select name="user_id" id="user_id" class="form-control custom-select">
                                <option value="" disabled>-- Chose User Name --</option>
                                @if(isset($user_details))
                                     @foreach($user_details as $details)
                                        <option value="{{$details->id}}">{{$details->username}}</option>
                                    @endforeach
                                @endif
                                </select>
                                <div class="text-danger"><strong id="user_id_error"></strong></div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <lebeL>Chose a file</lebel>
                                <input type="file" class="form-control" name="crbt_image" id="crbt_image" placeholder="Enter Email" value="" />
                                <div class="text-danger"><strong id="crbt_image_error"></strong></div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <lebel>Name</lebel>
                                <input type="text" class="form-control" name="name" id="name" placeholder="Enter Name" value="" />
                                <div class="text-danger"><strong id="name_error"></strong></div>
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
