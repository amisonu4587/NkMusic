@extends('Admin.layouts.leftMenu') @section('title') Admin||Add Status @endsection @section('content')

<div class="page-header mt-0 p-3">
    <h3 class="mb-sm-0">Add Status</h3>
    <ol class="breadcrumb mb-0">
        <li class="breadcrumb-item">
            <a href="/"><i class="fe fe-home"></i></a>
        </li>
        <li class="breadcrumb-item active" aria-current="page">Add Status</li>
    </ol>
</div>
<div class="row">
    <div class="col-md-12">
    @if(isset($event_details))
        <form id="edit_status_code" action="/edit_status_action" method="post" enctype="multipart/form-data">
            @csrf
            <div class="card shadow">
                <div class="card-header">
                    <h2 class="mb-0">Add Status</h2>
                </div>
                <div class="card-body">
                    <div class="row">
                      

                    

                    <div class="col-md-12">
                    <div class="form-group">
												<label class="form-label">Status</label>
												<select name="film_status" id="film_status" class="form-control custom-select">
													<option value="Process" >Process</option>
													<option value="Pending" >Pending</option>
													<option value="Live" >Live</option>
												</select>
											</div>
                        </div>

                        <input type="hidden" class="form-control"  name="id" id="id"  value="{{$event_details->id}}" required>

                        <div class="col-md-5"></div>
                        <div class="col-md-4">
                        <input type="submit" class="btn btn-primary mt-1 mb-1" value="Submit" />
                        </div>
                        <div class="col-md-3"></div>
                    </div>
                </div>
            </div>
        </form>
        @endif
    </div>
</div>

@endsection @section('add-js') @endsection
