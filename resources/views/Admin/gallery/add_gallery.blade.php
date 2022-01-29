@extends('Admin.layouts.leftMenu')
@section('title') Admin||Add Gallery Image @endsection
@section('content')
    <div class="page-header mt-0 p-3">
        <h3 class="mb-sm-0">Add Gallery Image </h3>
        <ol class="breadcrumb mb-0">
            <li class="breadcrumb-item">
                <a href="/"><i class="fe fe-home"></i></a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">Add Gallery Image</li>
        </ol>
    </div>
    <div class="row">
        <div class="col-md-12">

            <form id="add_user_action" action="/add_image" method="post" enctype="multipart/form-data">
                @csrf
                <div class="card shadow">
                    <div class="card-header">
                        <h2 class="mb-0">Add Gallery Image</h2>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            {{-- <div class="col-md-6">
                                <div class="form-group">
                                    <label>Image Name</label>
                                    <input type="text" name="image_name" id="image_name" class="form-control"
                                        placeholder="Image Name" />
                                    <div class="text-danger">
                                        <strong id="user_id_error"></strong>
                                    </div>
                                </div>
                            </div> --}}
                            <div class="col-md-6">
                                <label>Image File</label>
                                <input type="file" class="form-control" name="image_file" id="image_file" />
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
