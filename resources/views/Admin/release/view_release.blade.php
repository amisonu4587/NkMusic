@extends('Admin.layouts.leftMenu') @section('title') Admin||View All Album @endsection @section('content')
<div class="page-header mt-0 p-3">
    <h3 class="mb-sm-0">View Album</h3>
    <ol class="breadcrumb mb-0">
        <li class="breadcrumb-item">
            <a href="/"><i class="fe fe-home"></i></a>
        </li>
        <li class="breadcrumb-item active" aria-current="page">View Album</li>
    </ol>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="card shadow">
            <div class="card-header">
                <h2 class="mb-0">View Album</h2>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table id="edd" class="table table-striped table-bordered w-100 text-nowrap">
                        <thead>
                            <tr>
                              
                                <th class="wd-25p"> Albam Image</th>
                                <th class="wd-15p">Title</th>
                              
                                <th class="wd-25p"> Label Name</th>
                                <!-- <th class="wd-15p">Status</th> -->
                                <th class="wd-15p">Status</th>
                                <th class="wd-15p">User Name</th>

                                <th class="wd-15p">Action</th>
                                <th class="wd-15p">Approval</th>
                                <th class="wd-15p">Delete</th>

                                <!-- <th class="wd-15p">Action</th> -->


                                

                                
                            </tr>
                        </thead>
                        <tbody>
                        @if(isset($albam_detail))
                         @foreach($albam_detail as $details)
                            <tr>
                            
                                <td><img src="albam/{{$details->album_image}}" style="height: 64px;width: 60px;"></td>
                                <td>{{$details->album_title}}</td>
                                <td>{{$details->level}}</td>
                                <td>{{$details->status}}</td>
                                <td>{{$details->username}}</td>
                                <td><a  href="/album_details?id={{$details->id}}" class="btn btn-info mt-1 mb-1"><i class="fa fa-eye" aria-hidden="true"></i>&nbsp;view</a>&nbsp;<a  href="audio/{{$details->audio}}" class="btn btn-info mt-1 mb-1" download><i class="fa fa-download" aria-hidden="true"></i>&nbsp;Downlode Song</a>&nbsp;<a  href="albam/{{$details->album_image}}" class="btn btn-info mt-1 mb-1" download><i class="fa fa-download" aria-hidden="true"></i>&nbsp;Downlode Image</a></td>

                              
                                <td>
                                    @if($details->approve=='1')
                                    <span class="badge badge-pill badge-primary">Active</span><br>
                                    <a href="form_approval?id={{$details->id}}&approve=1" class="btn btn-danger btn-sm text-white"><i class="fas fa-toggle-on"></i> Inactiv </a>
                                    @else
                                    <span class="badge badge-pill badge-danger">Inactive</span><br>
                                    <a href="form_approval?id={{$details->id}}&approve=0" class="btn btn-primary btn-sm text-white"><i class="fas fa-toggle-on"></i> Activ </a>
                                    @endif
                                </td>
                              
                               <td>
                               <a  href="deletealbam?id={{$details->id}}" class="btn btn-youtube mt-1 mb-1 " ><i class="fa fa-trash"></i>Delete</a>
                               &nbsp;
                               <a  href="deletealbummp3?id={{$details->id}}" class="btn btn-youtube mt-1 mb-1 " ><i class="fa fa-trash"></i>Delete MP3</a>

                               
                               
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
