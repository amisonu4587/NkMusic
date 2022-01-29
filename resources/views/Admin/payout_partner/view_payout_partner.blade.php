@extends('Admin.layouts.leftMenu')
@section('title') Admin||View All Payout Partner @endsection
@section('content')
    <div class="page-header mt-0 p-3">
        <h3 class="mb-sm-0">View All Payout Partner</h3>
        <ol class="breadcrumb mb-0">
            <li class="breadcrumb-item">
                <a href="/"><i class="fe fe-home"></i></a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">View All Payout Partner</li>
        </ol>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card shadow">
                <div class="card-header">
                    <h2 class="mb-0">View All Payout Partner</h2>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="edd" class="table table-striped table-bordered w-100 text-nowrap">
                            <thead>
                                <tr>

                                    <th class="wd-25p"> User Name</th>
                                    <th class="wd-15p">Service Name</th>

                                    <th class="wd-25p"> Month</th>
                                    <th class="wd-15p">Payout</th>
                                    <th class="wd-15p">Date</th>
                                    <th class="wd-25p"> Referance No.</th>
                                    <th class="wd-15p">Bank Name</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if (isset($events_details))
                                    @foreach ($events_details as $details)
                                        <tr>
                                            <td>{{ $details->username }}</td>
                                            <td>{{ $details->service_name }}</td>
                                            <td>{{ $details->month }}</td>
                                            <td>{{ $details->payout }}</td>
                                            <td>{{ $details->date }}</td>
                                            <td>{{ $details->ref_no }}</td>
                                            <td>{{ $details->bank_name }}</td>
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
