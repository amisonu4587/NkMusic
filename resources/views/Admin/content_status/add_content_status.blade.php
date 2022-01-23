@extends('Admin.layouts.leftMenu') @section('title') Admin||content status @endsection @section('content')

<div class="page-header mt-0 p-3">
    <h3 class="mb-sm-0">content status</h3>
    <ol class="breadcrumb mb-0">
        <li class="breadcrumb-item">
            <a href="/"><i class="fe fe-home"></i></a>
        </li>
        <li class="breadcrumb-item active" aria-current="page">content status</li>
    </ol>
</div>
<div class="row">
    <div class="col-md-12">
        <form id="add_content status_code" action="/add_content_status_action" method="post"
            enctype="multipart/form-data">
            @csrf
            <div class="card shadow">
                <div class="card-header">
                    <h2 class="mb-0">Add content status</h2>
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
                                            <option value="{{ $details->id }}"
                                                {{ isset($content_status) && $content_status->user_id == $details->id ? 'selected' : '' }}>
                                                {{ $details->name }}
                                            </option>
                                        @endforeach
                                    @endif
                                </select>
                                <div class="text-danger"><strong id="user_id_error"></strong></div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Uplode New CSV</label>
                                <input type="file" class="form-control" name="excel_image" id="excel_image"
                                    placeholder="Enter Revenue Generate" value="">
                                @if (isset($content_status))
                                    <label>Uploded File:
                                        <a href="{{ url('cexcel/' . $content_status->excel_image) }}">
                                            {{ $content_status->excel_image }}
                                        </a>
                                    </label>
                                    <input type="hidden" name="oldFileName"
                                        value="{{ $content_status->excel_image }}" />
                                    <input type="hidden" name="content_status_id" value="{{ $content_status->id }}" />
                                @endif
                                <div class="text-danger"><strong id="excel_image_error"></strong></div>
                            </div>
                        </div>
                        <div class="col-md-5"></div>
                        <div class="col-md-4">
                            <input type="hidden" name="action"
                                value="{{ isset($content_status) ? 'update' : 'insert' }}">
                            <input type="submit" class="btn btn-primary mt-1 mb-1" value="Submit" />
                        </div>
                        <div class="col-md-3"></div>
                    </div>
                </div>
            </div>
        </form>

    </div>
</div>

@endsection @section('add-js') @endsection
