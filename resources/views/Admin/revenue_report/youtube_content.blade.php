@extends('Admin.layouts.leftMenu') @section('title') Admin||Add Youtube Distribution @endsection @section('content')

<div class="page-header mt-0 p-3">
    <h3 class="mb-sm-0">Youtube Distribution</h3>
    <ol class="breadcrumb mb-0">
        <li class="breadcrumb-item">
            <a href="/"><i class="fe fe-home"></i></a>
        </li>
        <li class="breadcrumb-item active" aria-current="page">Youtube Distribution</li>
    </ol>
</div>
<div class="row">
    <div class="col-md-12">
        
        <form id="add_youtube_distribution_action" action="/add_youtube_distribution_action" method="post" enctype="multipart/form-data">
            @csrf
            <div class="card shadow">
                <div class="card-header">
                    <h2 class="mb-0">Add Youtube Distribution</h2>
                </div>
                <div class="card-body">
                    <div class="row">
                      

                        

                    <div class="col-md-6">
                            <div class="form-group">
                                <lebel>Chose user id</lebel>
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
                                <lebel>Enter Month</lebel>
                                <input type="text" class="form-control" name="month" id="month" placeholder="Enter Month Name" value="" />
                                <div class="text-danger"><strong id="month_error"></strong></div>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="form-group">
                                <lebel>Revenue Generate</lebel>
                                <input type="text" class="form-control" name="revenue" id="revenue" placeholder="Enter Revenue Generate" value="" />
                                <div class="text-danger"><strong id="revenue_error"></strong></div>
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
