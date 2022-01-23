@extends('Admin.layouts.leftMenu') @section('title') Admin||Add Music Distribution @endsection @section('content')

<div class="page-header mt-0 p-3">
    <h3 class="mb-sm-0">Revenue Report</h3>
    <ol class="breadcrumb mb-0">
        <li class="breadcrumb-item">
            <a href="/"><i class="fe fe-home"></i></a>
        </li>
        <li class="breadcrumb-item active" aria-current="page">Revenue Report</li>
    </ol>
</div>
<div class="row">
    <div class="col-md-12">
        
        <form id="add_music_distribution_code" action="/add_music_distribution_action" method="post" enctype="multipart/form-data">
            @csrf
            <div class="card shadow">
                <div class="card-header">
                    <h2 class="mb-0">Add Revenue Report</h2>
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

                        <div class="col-md-6">
                            <div class="form-group">
                                <lebel>Revenue Generate</lebel>
                                <input type="text" class="form-control" name="revenue" id="revenue" placeholder="Enter Revenue Generate" value="" />
                                <div class="text-danger"><strong id="revenue_error"></strong></div>
                            </div>

                        </div>
                        <div class="col-md-6">
                        <div class="form-group">
                                <lebel>Chose Revenue For</lebel>
                                <select name="revenue_for" id="revenue_for" class="form-control custom-select">
                                        <option value="" disabled>-- Chose Revenue For --</option>
                                        
                                                <option value="YouTube Content ID">YouTube Content ID</option>
                                                <option value="Music Distribution">Music Distribution</option>

                                                <option value="MX Player">MX Player</option>
                                                <option value="YouTube CID & Music Platform">YouTube CID & Music Platform</option>
                                                <option value="YouTube Channel Revenue">YouTube Channel Revenue</option>
                                                <option value="Mobile Callertune (CRBT)">Mobile Callertune (CRBT)</option>

                                                <!-- <option value="Youtube">Youtube</option> -->

                               
                                </select>
                            </div>

</div>




<div class="col-md-6">
                            <div class="form-group">
                                <lebel>Uplode Excel</lebel>
                                <input type="file" class="form-control" name="excel_image" id="excel_image" placeholder="Enter Revenue Generate" value="" accept="application/vnd.openxmlformats-officedocument.spreadsheetml.sheet, application/vnd.ms-excel">
                                <div class="text-danger"><strong id="excel_image_error"></strong></div>
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
