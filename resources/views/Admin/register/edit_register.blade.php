@extends('Admin.layouts.leftMenu') @section('title') Admin||View All Register @endsection @section('content')
<div class="page-header mt-0 p-3">
    <h3 class="mb-sm-0">Edit Member</h3>
    <ol class="breadcrumb mb-0">
        <li class="breadcrumb-item">
            <a href="/"><i class="fe fe-home"></i></a>
        </li>
        <li class="breadcrumb-item active" aria-current="page">Edit Member</li>

      
    </ol>
</div>
<div class="row">
    <div class="col-md-12">

    <form id="edit_register_action" action="/edit_register_action" method="post" enctype="multipart/form-data">
    
    
     @csrf
        <div class="card shadow">
            <div class="card-header">
                <h2 class="mb-0">Edit Register</h2>
            </div>
            <div class="card-body">
                <div class="row">


                @if(isset($event_details))

                    <div class="col-md-6">
                       
                        <div class="form-group">
                        <lebel>Bank Account Number</lebel>
                            <input type="number" class="form-control"  name="bank" id="bank" placeholder="Enter Bank Account Number" value="{{$event_details->bank}}" required>
                            <div class="text-danger"><strong id="bank_error"></strong></div>
                        </div>


                        <div class="form-group">
                        <lebel>Account Holder Name</lebel>
                            <input type="text" class="form-control"  name="ac_name" id="ac_name" placeholder="Enter Bank Account Holder Name" value="{{$event_details->ac_name}}" required>
                            <div class="text-danger"><strong id="ac_name_error"></strong></div>
                        </div>




                        <div class="form-group">
                        <lebel>Bank Name</lebel>
                            <input type="text" class="form-control"  name="bank_name" id="bank_name" placeholder="Enter Bank Name" value="{{$event_details->bank_name }}" required>
                            <div class="text-danger"><strong id="bank_name_error"></strong></div>
                        </div>
                        
                        
                    </div>


                    <div class="col-md-6">
                       
                        <div class="form-group">
                        <lebel>IFCS Code</lebel>
                            <input type="text" class="form-control"  name="ifcs" id="ifcs" placeholder="ifcs" value="{{$event_details->ifcs}}" required>
                            <div class="text-danger"><strong id="ifcs_error"></strong></div>
                        </div>




                        <div class="form-group">
                        <lebel>Branch Name</lebel>
                            <input type="text" class="form-control"  name="branch" id="branch" placeholder="Branch" value="{{$event_details->branch}}" required>
                            <div class="text-danger"><strong id="ifcs_error"></strong></div>
                        </div>
                        
                        
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
