@extends('Admin.layouts.leftMenu') @section('title') Admin||Add User @endsection @section('content')
<div class="page-header mt-0 p-3">
    <h3 class="mb-sm-0">Add User </h3>
    <ol class="breadcrumb mb-0">
        <li class="breadcrumb-item">
            <a href="/"><i class="fe fe-home"></i></a>
        </li>
        <li class="breadcrumb-item active" aria-current="page">Add User</li>

      
    </ol>
</div>
<div class="row">
    <div class="col-md-12">

    <form id="add_user_action" action="/add_user_action" method="post" enctype="multipart/form-data">
    
    
     @csrf
        <div class="card shadow">
            <div class="card-header">
                <h2 class="mb-0">Add User</h2>
            </div>
            <div class="card-body">
                <div class="row">


  

           


                 




                    <div class="col-md-6">
                        <div class="form-group">
                        <lebel>Label Name</lebel>
                            <input type="text" class="form-control"  name="username" id="username" placeholder="Enter User Name" required>
                            <div class="text-danger"><strong id="username_error"></strong></div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                        <lebel>User Name</lebel>
                            <input type="text" class="form-control"  name="name" id="name" placeholder="Enter Name" required>
                            <div class="text-danger"><strong id="name_error"></strong></div>
                        </div>   
                    </div>


                    <div class="col-md-6">
                       
                        <div class="form-group">
                        <lebel>Email Id</lebel>
                            <input type="email" class="form-control" name="email" id="email" placeholder="Enter email id" required>
                            <div class="text-danger"><strong id="email_error"></strong></div>
                        </div>
                        
                        
                    </div>



                    <div class="col-md-6">
                       
                        <div class="form-group">
                        <lebel>Phone Number</lebel>
                            <input type="number" class="form-control"  name="phone" id="phone" placeholder="Enter Phone Number" required>
                            <div class="text-danger"><strong id="phone_error"></strong></div>
                        </div>
                        
                        
                    </div>

                    <div class="col-md-6">
                       
                        <div class="form-group">
                        <lebel>Password</lebel>
                            <input type="text" class="form-control"  name="password" id="password" placeholder="Enter Password" required>
                            <div class="text-danger"><strong id="password_error"></strong></div>
                        </div>
                        
                        
                    </div>

                    <div class="col-md-6">
                       
                        <div class="form-group">
                        <lebel>Confirm Password</lebel>
                            <input type="text" class="form-control"  name="password_confirmation" id="password_confirmation" placeholder="Enter Confirm Password" required>
                            <div class="text-danger"><strong id="password_confirmation_error"></strong></div>
                        </div>
                        
                        
                    </div>


                  




                    



                    


                    


                   
                   

                    <div class="col-md-5">
                    </div>
                    <div class="col-md-4">
                  
                  
                    <input type="submit" class ="btn btn-primary mt-1 mb-1" value="Submit" >
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
