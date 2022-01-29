@extends('Admin.layouts.leftMenu')
@section('title') Admin||Add Payout @endsection
@section('content')
    <div class="page-header mt-0 p-3">
        <h3 class="mb-sm-0">Add Payout </h3>
        <ol class="breadcrumb mb-0">
            <li class="breadcrumb-item">
                <a href="/"><i class="fe fe-home"></i></a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">Add Payout</li>
        </ol>
    </div>
    <div class="row">
        <div class="col-md-12">

            <form id="add_user_action" action="/add_payout_action" method="post" enctype="multipart/form-data">
                @csrf
                <div class="card shadow">
                    <div class="card-header">
                        <h2 class="mb-0">Add Payout</h2>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Chose user Name</label>
                                    <select name="user_name" id="user_name" class="form-control custom-select">
                                        <option value="" disabled>-- Chose User Name --</option>
                                        @if (isset($user_details))
                                            @foreach ($user_details as $details)
                                                <option value="{{ $details->id }}"
                                                    {{ isset($payout_partner) && $payout_partner->user_id == $details->id ? 'selected' : '' }}>
                                                    {{ $details->username }}
                                                </option>
                                            @endforeach
                                        @endif
                                    </select>
                                    <div class="text-danger"><strong id="user_id_error"></strong></div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label>CSV File</label>
                                <input type="file" class="form-control" name="transactionFile" id="transactionFile" />
                                @if (isset($payout_partner))
                                    <label> Uploaded File:
                                        <a href="{{ url($payout_partner->transaction_file) }}">
                                            {{ basename($payout_partner->transaction_file) }}
                                        </a>
                                    </label>
                                    <input type="hidden" name="oldFileName"
                                        value="{{ basename($payout_partner->transaction_file) }}" />
                                    <input type="hidden" name="payout_id" value="{{ $payout_partner->id }}">
                                @endif
                            </div>
                            <div class="col-md-4 my-4">
                                <input type="hidden" name="action"
                                    value="{{ isset($payout_partner) ? 'update' : 'insert' }}">
                                <input type="submit" class="btn btn-primary mt-1 mb-1" value="Submit">
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
