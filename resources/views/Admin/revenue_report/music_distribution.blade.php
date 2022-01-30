@extends('Admin.layouts.leftMenu')
@section('title') Admin||Add Music Distribution @endsection
@section('content')

    <div class="page-header mt-0 p-3">
        <h3 class="mb-sm-0">Revenue Report</h3>
        <ol class="breadcrumb mb-0">
            <li class="breadcrumb-item">
                <a href="/"><i class="fe fe-home"></i></a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">Revenue Report</li>
        </ol>
    </div>
    <div class="row">
        <div class="col-md-12">
            <form id="add_music_distribution_code" action="/add_music_distribution_action" method="post"
                enctype="multipart/form-data">
                @csrf
                <div class="card shadow">
                    <div class="card-header">
                        <h2 class="mb-0">Add Revenue Report</h2>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Chose user id</label>
                                    <select name="user_id" id="user_id" class="form-control custom-select">
                                        <option value="" disabled>-- Chose User Name --</option>
                                        @if (isset($user_details))
                                            @foreach ($user_details as $details)
                                                <option value="{{ $details->id }}">{{ $details->username }}</option>
                                            @endforeach
                                        @endif
                                    </select>
                                    <div class="text-danger"><strong id="user_id_error"></strong></div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Enter Month</label>
                                    <input type="text" class="form-control" name="month" id="month"
                                        placeholder="Enter Month Name" value="" />
                                    <div class="text-danger"><strong id="month_error"></strong></div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Revenue Generate</label>
                                    <input type="text" class="form-control" name="revenue" id="revenue"
                                        placeholder="Enter Revenue Generate" value="" />
                                    <div class="text-danger"><strong id="revenue_error"></strong></div>
                                </div>

                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Chose Revenue For</label>
                                    <select name="revenue_for" id="revenue_for" class="form-control custom-select">
                                        <option value="" slected disabled>-- Chose Revenue For --</option>
                                        <option value="YouTube Content ID">YouTube Content ID</option>
                                        <option value="Music Distribution">Music Distribution</option>
                                        <option value="MX Player">MX Player</option>
                                        <option value="YouTube CID & Music Platform">YouTube CID & Music Platform</option>
                                        <option value="YouTube Channel Revenue">YouTube Channel Revenue</option>
                                        <option value="Mobile Callertune (CRBT)">Mobile Callertune (CRBT)</option>
                                        <option value="others">Others</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Uplode Excel</label>
                                    <input type="file" class="form-control" name="excel_image" id="excel_image"
                                        placeholder="Enter Revenue Generate" value=""
                                        accept="application/vnd.openxmlformats-officedocument.spreadsheetml.sheet, application/vnd.ms-excel">
                                    <div class="text-danger"><strong id="excel_image_error"></strong></div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group revenue_other_block d-none">
                                    <label>Write Other Revenue Reason</label>
                                    <input type="text" class="form-control" name="revenue_for_other"
                                        id="revenue_for_other" placeholder="Enter Revenue Reason" value="" />
                                    <div class="text-danger"><strong id="revenue_for_other"></strong></div>
                                </div>
                            </div>
                            <div class="col-md-5"></div>
                            <div class="col-md-4">
                                <input type="submit" class="btn btn-primary mt-1 mb-1" value="Submit" />
                            </div>
                            <div class="col-md-3"></div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <script type="text/javascript">
        $(document).ready(function() {
            $('#revenue_for').on('change', function() {
                let value = $(this).val();
                if (value == 'others') {
                    $('.revenue_other_block').removeClass('d-none')
                } else {
                    $('.revenue_other_block').addClass('d-none')
                }
            })
        })
    </script>
@endsection
@section('add-js') @endsection
