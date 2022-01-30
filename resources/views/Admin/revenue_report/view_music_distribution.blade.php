@extends('Admin.layouts.leftMenu') @section('title') Admin||View All Miusic Distribution @endsection @section('content')
<div class="page-header mt-0 p-3">
    <h3 class="mb-sm-0">View All Miusic Distribution</h3>
    <ol class="breadcrumb mb-0">
        <li class="breadcrumb-item">
            <a href="/"><i class="fe fe-home"></i></a>
        </li>
        <li class="breadcrumb-item active" aria-current="page">View All Miusic Distribution</li>
    </ol>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="card shadow">
            <div class="card-header">
                <h2 class="mb-0">View All Miusic Distribution</h2>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table id="edd" class="table table-striped table-bordered w-100 text-nowrap">
                        <thead>
                            <tr>
                                <th class="wd-25p"> User Name</th>
                                <th class="wd-15p">Month</th>
                                <th class="wd-15p">Report</th>
                                <th class="wd-15p">Revenue For</th>
                                <th class="wd-15p">Excel</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if (isset($music_details))
                                @foreach ($music_details as $details)
                                    <tr>

                                        <td>{{ $details->username }}</td>
                                        <td>{{ $details->month }}</td>
                                        <td>{{ $details->revenue }}</td>
                                        <td>{{ $details->revenue_for }}</td>
                                        <td><a href="rexcel/{{ $details->excel_image }}">{{ $details->excel_image }}</a>
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
