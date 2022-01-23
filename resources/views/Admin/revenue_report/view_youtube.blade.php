@extends('Admin.layouts.leftMenu') @section('title') Admin||View All Youtube Revenue @endsection @section('content')
<div class="page-header mt-0 p-3">
    <h3 class="mb-sm-0">View All Youtube Revenue</h3>
    <ol class="breadcrumb mb-0">
        <li class="breadcrumb-item">
            <a href="/"><i class="fe fe-home"></i></a>
        </li>
        <li class="breadcrumb-item active" aria-current="page">View All Youtube Revenue</li>
    </ol>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="card shadow">
            <div class="card-header">
                <h2 class="mb-0">View All Youtube Revenue</h2>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table id="edd" class="table table-striped table-bordered w-100 text-nowrap">
                        <thead>
                            <tr>
                              
                                <th class="wd-25p"> User Name</th>
                                <th class="wd-15p">Month</th>
                         
                                <th class="wd-15p">Report</th>



                                <!-- <th class="wd-15p">Action</th> -->


                                

                                
                            </tr>
                        </thead>
                        <tbody>
                        @if(isset($youtube_details))
                         @foreach($youtube_details as $details)
                            <tr>
                            
                                <td>{{$details->username}}</td>
                                <td>{{$details->month}}</td>
                                <td>{{$details->revenue}}</td>
                              

                              
                                
                              
                               
                               
                              

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
