@extends('Admin.layouts.leftMenu')
@section('title') Admin||View Content Details @endsection
@section('content')
    <div class="page-header mt-0 p-3">
        <h3 class="mb-sm-0">View Content Details</h3>
        <ol class="breadcrumb mb-0">
            <li class="breadcrumb-item">
                <a href="/"><i class="fe fe-home"></i></a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">View Content Details</li>
        </ol>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card shadow">
                <div class="card-header">
                    <h2 class="mb-0">View Content Details</h2>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="edd" class="table table-striped table-bordered w-100 text-nowrap">
                            <thead>
                                <tr>
                                    <th class="wd-25p"> Manager Name</th>
                                    <th class="wd-25p"> Google drive link</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Sanjoy Maity</td>
                                    <td>Link</td>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        $(document).ready(function() {
            $(function() {
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
@endsection
