@extends('Admin.layouts.leftMenu') @section('title') Admin||View All Register @endsection @section('content')
<div class="page-header mt-0 p-3">
    <h3 class="mb-sm-0">Edit Password</h3>
    <ol class="breadcrumb mb-0">
        <li class="breadcrumb-item">
            <a href="/"><i class="fe fe-home"></i></a>
        </li>
        <li class="breadcrumb-item active" aria-current="page">Edit Password</li>

      
    </ol>
</div>
<div class="row">
    <div class="col-md-12">

    <form id="edit_password_code" action="/edit_password_action" method="post" enctype="multipart/form-data">
    
    
     @csrf
        <div class="card shadow">
            <div class="card-header">
                <h2 class="mb-0">Edit Password</h2>
            </div>
            <div class="card-body">
                <div class="row">


               
           


                 

                @if(isset($event_details))


                    <div class="col-md-12">
                       
                        <!-- <div class="form-group">
                        <lebel>User Image</lebel>
                            <input type="file" class="form-control"  name="user_image" id="user_image" placeholder="Enter Bank Account Number" value="{{$event_details->user_image}}" required>
                            <div class="text-danger"><strong id="user_image_error"></strong></div>
                        </div> -->


                        <div class="form-group">
                        <lebel>Enter a Password</lebel>
                            <input type="password" class="form-control"  name="password" id="password" placeholder="Enter Password" required>
                            <div class="text-danger"><strong id="name_error"></strong></div>
                        </div>
                        
                        <!-- <div class="form-group">
                            <label class="form-label">Service</label>
                            <select name="service" id="service" class="form-control custom-select">
                                <option value="Distribution Only" >Distribution Only</option>
                                <option value="YouTube Content ID + Distribution" >YouTube Content ID + Distribution</option>
                              
                            </select>
                        </div> -->
                      
                    </div>
                 
                    <input type="hidden" class="form-control"  name="id" id="id"  value="{{$event_details->id}}" required>

                    <div class="col-md-5">
                    </div>
                    <div class="col-md-4">
                  
                  
                    <input type="submit" class ="btn btn-primary mt-1 mb-1" value="Submit" >



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
