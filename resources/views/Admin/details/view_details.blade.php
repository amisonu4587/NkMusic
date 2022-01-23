@extends('Admin.layouts.leftMenu') @section('title') Admin||View Details @endsection @section('content')

<div class="page-header mt-0 p-3">
    <h3 class="mb-sm-0">View Details</h3>
    <ol class="breadcrumb mb-0">
        <li class="breadcrumb-item">
            <a href="/"><i class="fe fe-home"></i></a>
        </li>
        <li class="breadcrumb-item active" aria-current="page">View Details</li>
    </ol>
</div>
<div class="row">
    <div class="col-md-12">
    
        <div class="card shadow">
            <div class="card-header">
                <h2 class="mb-0">View Details</h2>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table id="edd" class="table table-striped table-bordered w-100 text-nowrap">
                        <thead>
                        
                            <tr>
                               
                                <th class="wd-15p">SubCategory Name</th>
                                <th class="wd-15p">Details</th>
                                <th class="wd-15p">Action</th>
                                
                            </tr>
                        </thead>
                        <tbody>
                        @if(isset($details_details))
                         @foreach($details_details as $details)
                            <tr>
                         
                                <td>{{$details->sub_cat_name}}</td>
                                <td>{{$details->sub_sub_cat_name}}</td>
                                <td>
                               <a  href="delete_details?id={{$details->sub_sub_cat_id}}" class="btn btn-youtube mt-1 mb-1 " ><i class="fa fa-trash"></i>Delete</a>
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
