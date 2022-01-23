@extends('Admin.layouts.leftMenu') @section('title') Admin||Add Details @endsection @section('content')

<div class="page-header mt-0 p-3">
    <h3 class="mb-sm-0">Add details</h3>
    <ol class="breadcrumb mb-0">
        <li class="breadcrumb-item">
            <a href="/"><i class="fe fe-home"></i></a>
        </li>
        <li class="breadcrumb-item active" aria-current="page">Add Details</li>
    </ol>
</div>
<div class="row">
    <div class="col-md-12">
        
        <form id="add_details_code" action="add_details_action" method="post" enctype="multipart/form-data">
            @csrf
            <div class="card shadow">
                <div class="card-header">
                    <h2 class="mb-0">Add Details</h2>
                </div>
                <div class="card-body">
                    <div class="row">
                      

                        

                    <div class="col-md-6">
                            <div class="form-group">
                                <lebel>Chose Category Name</lebel>
                                <select name="category_id" id="category_id" class="form-control custom-select">
                                <option value="" disabled>-- Select Category --</option>
                                @if(isset($data4))
                                @foreach($data4 as $details)
                                      <option value="{{$details->cat_id}}">{{$details->cat_name}}</option>
                                @endforeach
                               @endif
                                </select>
                                <div class="text-danger"><strong id="category_id_error"></strong></div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <lebel>Chose Sub-Category Name</lebel>
                                 
                                <select name="subcategory_id" id="subcategory_id" class="form-control custom-select">
                                <option value="" disabled>-- Select Subcategory --</option>
                                    @if(isset($data3))
                                    @foreach($data3 as $details)
                                        <option value="{{$details->sub_cat_id}}" class='parent-{{ $details->cat_id }} subcategory'>{{$details->sub_cat_name}}</option>
                                    @endforeach
                                  @endif
                                
                                </select>
                                <div class="text-danger"><strong id="subcategory_id_error"></strong></div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <lebel>Enter Details Name</lebel>
                                <input type="text" class="form-control" name="details" id="details" placeholder="Enter Details Name" value="" />
                                <div class="text-danger"><strong id="details_error"></strong></div>
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
<script>

$('#category_id').on('change', function () {
    $("#subcategory_id").attr('disabled', false); //enable subcategory select
    $("#subcategory_id").val("");
    $(".subcategory").attr('disabled', true); //disable all category option
    $(".subcategory").hide(); //hide all subcategory option
    $(".parent-" + $(this).val()).attr('disabled', false); //enable subcategory of selected category/parent
    $(".parent-" + $(this).val()).show(); 
});

</script>
@endsection @section('add-js') @endsection
