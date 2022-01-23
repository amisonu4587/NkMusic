@extends('Admin.layouts.leftMenu') @section('title') Admin||View All Register @endsection @section('content')
<div class="page-header mt-0 p-3">
    <h3 class="mb-sm-0">Edit User</h3>
    <ol class="breadcrumb mb-0">
        <li class="breadcrumb-item">
            <a href="/"><i class="fe fe-home"></i></a>
        </li>
        <li class="breadcrumb-item active" aria-current="page">Edit User</li>

      
    </ol>
</div>
<div class="row">
    <div class="col-md-12">

    <form id="edit_details_code" action="/edit_details_action" method="post" enctype="multipart/form-data">
    
    
     @csrf
        <div class="card shadow">
            <div class="card-header">
                <h2 class="mb-0">Edit User</h2>
            </div>
            <div class="card-body">
                <div class="row">


                @if(isset($event_details))

           


                 




                    <div class="col-md-6">
                       
                        <div class="form-group">
                        <lebel>User Image</lebel>
                            <input type="file" class="form-control"  name="user_image" id="user_image" placeholder="Enter Bank Account Number" value="{{$event_details->user_image}}" >
                            <div class="text-danger"><strong id="user_image_error"></strong></div>
                        </div>


                        <div class="form-group">
                        <lebel>Label Name</lebel>
                            <input type="text" class="form-control"  name="username" id="name" placeholder="Enter Bank Account Holder Name" value="{{$event_details->username}}" required>
                            <div class="text-danger"><strong id="name_error"></strong></div>
                        </div>

                        <div class="form-group">
                        <lebel>User Name</lebel>
                            <input type="text" class="form-control"  name="name" id="name" placeholder="Enter Name" value="{{$event_details->name}}" required>
                            <div class="text-danger"><strong id="name_error"></strong></div>
                        </div>


                        <div class="form-group">
                        <lebel>Email</lebel>
                            <input type="email" class="form-control"  name="email" id="email" placeholder="Enter Email Id" value="{{$event_details->email }}" required>
                            <div class="text-danger"><strong id="subscription_error"></strong></div>
                        </div>
                        <!-- <div class="form-group">
                            <label class="form-label">Service</label>
                            <select name="service" id="service" class="form-control custom-select">
                                <option value="Distribution Only" >Distribution Only</option>
                                <option value="YouTube Content ID + Distribution" >YouTube Content ID + Distribution</option>
                              
                            </select>
                        </div> -->
                      
                    </div>
                    <div class="col-md-6">
                       
                        <div class="form-group">
                        <lebel>Phone Number</lebel>
                            <input type="number" class="form-control"  name="phone" id="phone" placeholder="Enter Phone Number" value="{{$event_details->phone}}" required>
                            <div class="text-danger"><strong id="phone_error"></strong></div>
                        </div>
                        <div class="form-group">
                        <lebel>City</lebel>
                            <input type="text" class="form-control"  name="city" id="city" placeholder="Enter City name" value="{{$event_details->city}}" required>
                            <div class="text-danger"><strong id="city_error"></strong></div>
                        </div>
                        <div class="form-group">
                        <lebel>State</lebel>
                            <input type="text" class="form-control"  name="state" id="state" placeholder="Enter State name" value="{{$event_details->state}}" required>
                            <div class="text-danger"><strong id="state_error"></strong></div>
                        </div>

                    </div>

                    <input type="hidden" class="form-control"  name="id" id="id"  value="{{$event_details->id}}" required>

                    <div class="col-md-5">
                    </div>
                    <div class="col-md-4">
                  
                  
                    <input type="submit" class ="btn btn-primary mt-1 mb-1" value="Submit" >

                    <p><u><a href="edit_password?id={{$event_details->id}}">Change Password ?</a></u></p>


                    </div>
                    <div class="col-md-3">
                    </div>

                    @endif
                </div>
               
            </div>
        </div>
</form>
     
     

    </div>
</div>

@endsection

@section('add-js')

@endsection
