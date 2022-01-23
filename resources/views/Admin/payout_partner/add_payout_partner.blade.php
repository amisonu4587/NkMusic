@extends('Admin.layouts.leftMenu') @section('title') Admin||Add Payout Partner @endsection @section('content')

<div class="page-header mt-0 p-3">
    <h3 class="mb-sm-0">Add Payout Partner</h3>
    <ol class="breadcrumb mb-0">
        <li class="breadcrumb-item">
            <a href="/"><i class="fe fe-home"></i></a>
        </li>
        <li class="breadcrumb-item active" aria-current="page">Add Payout Partner</li>
    </ol>
</div>
<div class="row">
    <div class="col-md-12">
        
        <form id="add_payout_partner_code" action="/add_payout_partner_action" method="post" enctype="multipart/form-data">
            @csrf
            <div class="card shadow">
                <div class="card-header">
                    <h2 class="mb-0">Add Payout Partner</h2>
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
                                <lebel>Chose Service</lebel>
                                <select name="service_name" id="service_name" class="form-control custom-select">
                                <option value="" disabled>-- Chose Service Name --</option>
                               
                                        <option value="Distribution Only">Distribution Only</option>
                                        <option value="Youtube Content Id">Youtube Content ID</option>
                                         <option value="Music Distributuin & UGC Claim">Music Distributuin & UGC Claim</option>
                                  
                                </select>
                                <div class="text-danger"><strong id="user_id_error"></strong></div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <lebel>Month</lebel>
                                <input type="text" class="form-control" name="month" id="month" placeholder="Enter Month" value="" />
                                <div class="text-danger"><strong id="month_error"></strong></div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <lebel>Your Payout</lebel>
                                <input type="text" class="form-control" name="payout" id="payout" placeholder="Enter Your Payout" value="" />
                                <div class="text-danger"><strong id="payout_error"></strong></div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <lebel>Payout Date</lebel>
                                <input type="text" class="form-control" name="date" id="date" placeholder="Enter Date" value="" />
                                <div class="text-danger"><strong id="date_error"></strong></div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <lebel>Reference no</lebel>
                                <input type="text" class="form-control" name="ref_no" id="ref_no" placeholder="Enter Reference no" value="" />
                                <div class="text-danger"><strong id="ref_no_error"></strong></div>
                            </div>
                        </div>

                      


                        <div class="col-md-6">
                            <div class="form-group">
                                <lebel>Payout Bank Name </lebel>
                                <input type="text" class="form-control" name="bank_name" id="bank_name" placeholder="Enter Bank Name" value="" />
                                <div class="text-danger"><strong id="bank_name_error"></strong></div>
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
