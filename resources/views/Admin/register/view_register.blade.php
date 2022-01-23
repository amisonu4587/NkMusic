@extends('Admin.layouts.leftMenu') @section('title') Admin||View All Register @endsection @section('content')
<div class="page-header mt-0 p-3">
    <h3 class="mb-sm-0">View User</h3>
    <ol class="breadcrumb mb-0">
        <li class="breadcrumb-item">
            <a href="/"><i class="fe fe-home"></i></a>
        </li>
        <li class="breadcrumb-item active" aria-current="page">View User</li>
    </ol>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="card shadow">
            <div class="card-header">
                <h2 class="mb-0">View User</h2>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table id="edd" class="table table-striped table-bordered w-100 text-nowrap">
                        <thead>
                        <tr>
                              
                              <th class="wd-15p">Profile image</th>
                              <th class="wd-15p">Label Name</th>
                              <th class="wd-15p">Email</th>
                              <th class="wd-15p">City</th>

                              <th class="wd-15p">State</th>
                              <th class="wd-15p">Phone Number</th>
                         
                           
                              <th class="wd-15p">Action</th>
                              <th class="wd-15p">Approval</th>

                              


                              <!-- <th class="wd-15p">Action</th> -->


                              

                              
                          </tr>
                        </thead>
                        <tbody>
                        @if(isset($event_details))
                         @foreach($event_details as $details)
                            <tr>
                              @if($details->user_image=='')
                              <td><img src="assets/img/z.png" style="width: 25%;"></td>
                                @else
                                <td><img src="user/{{$details->user_image}}" style="width: 25%;"></td>
                               @endif
                                <td>{{$details->username}}</td>
                                <td>{{$details->email}}</td>

                                <td>{{$details->state}}</td>

                                <td>{{$details->city}}</td>



                                <td>{{$details->phone}}</td>
                                <!-- <td>{{$details->revenue_share}}</td> -->
                                <!-- <td>{{$details->service}}</td> -->
                                <td><a  href="edit_register?id={{$details->id}}" class="btn btn-info mt-1 mb-1" ><i class="ion-compose"></i>&nbsp;Add/Edit Bank Details</a>&nbsp;<a  href="edit_details?id={{$details->id}}" class="btn btn-info mt-1 mb-1" ><i class="ion-compose"></i>&nbsp;Edit User Details</a></td>
                               
                                <td>

                                    @if($details->status=='1')
                                    <span class="badge badge-pill badge-primary">Active</span><br>
                                    <a href="user_approval?id={{$details->id}}&status=1" class="btn btn-danger btn-sm text-white"><i class="fas fa-toggle-on"></i> Inactiv </a>
                                    @else
                                    <span class="badge badge-pill badge-danger">Inactive</span><br>
                                    <a href="user_approval?id={{$details->id}}&status=0" class="btn btn-primary btn-sm text-white"><i class="fas fa-toggle-on"></i> Activ </a>
                                    @endif
                                </td>
                              
                         
                              

                            </tr>

                            @endforeach
                            @endif
                          
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script type="text/javascript">
    $(document).ready(function () {
        $(function () {
            $("#edd").dataTable({
                bPaginate: true,
                bLengthChange: true,
                bFilter: true,
                bSort: false,
                bInfo: true,
                bAutoWidth: false,
            });
        });
    });
</script>
