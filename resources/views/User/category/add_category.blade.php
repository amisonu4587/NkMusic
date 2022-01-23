@extends('Admin.layouts.leftMenu') @section('title') Admin||Add Category @endsection @section('content')

<div class="page-header mt-0 p-3">
    <h3 class="mb-sm-0">Add Category</h3>
    <ol class="breadcrumb mb-0">
        <li class="breadcrumb-item">
            <a href="/"><i class="fe fe-home"></i></a>
        </li>
        <li class="breadcrumb-item active" aria-current="page">Add Category</li>
    </ol>
</div>
<div class="row">
    <div class="col-md-12">
        
        <form id="add_category_code" action="#" method="post" enctype="multipart/form-data">
            @csrf
            <div class="card shadow">
                <div class="card-header">
                    <h2 class="mb-0">Add Category</h2>
                </div>
                <div class="card-body">
                    <div class="row">
                      

                        <div class="col-md-6">
                            <div class="form-group">
                                <lebel>Chose Category image</lebel>
                                <input type="file" class="form-control" name="category_image" id="category_image" placeholder="Chose Category image" value="" />
                                <div class="text-danger"><strong id="category_image_error"></strong></div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <lebel>Enter Category Name</lebel>
                                <input type="text" class="form-control" name="category_name" id="category_name" placeholder="Enter Category Nane" value="" />
                                <div class="text-danger"><strong id="category_name_error"></strong></div>
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
