@extends('Admin.layouts.leftMenu')
@section('title') Admin||Add Platform @endsection
@section('content')
    <div class="page-header mt-0 p-3">
        <h3 class="mb-sm-0">Add Platform </h3>
        <ol class="breadcrumb mb-0">
            <li class="breadcrumb-item">
                <a href="/"><i class="fe fe-home"></i></a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">Add Platform</li>
        </ol>
    </div>
    <div class="row">
        <div class="col-md-12">
            <form id="add_user_action" action="/add_platform" method="post" enctype="multipart/form-data">
                @csrf
                <div class="card shadow">
                    <div class="card-header">
                        <h2 class="mb-0">Add Platform</h2>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Platform Name</label>
                                    <input type="text" name="platform_name" id="platform_name" class="form-control"
                                        placeholder="Platform Name" />
                                    <div class="text-danger">
                                        <strong id="user_id_error"></strong>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label> Platform Image</label>
                                <input type="file" class="form-control" name="platform_image" id="platform_image" />
                            </div>
                            <div class="col-md-4 my-4">
                                <input type="submit" class="btn btn-primary mt-1 mb-1" value="Submit">
                            </div>
                            <div class="col-md-3">
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>

@endsection

@section('add-js')

@endsection
