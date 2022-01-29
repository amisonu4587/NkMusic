@extends('Admin.layouts.leftMenu')
@section('title') Admin||View Platform @endsection
@section('content')
    <div class="page-header mt-0 p-3">
        <h3 class="mb-sm-0">View Platform</h3>
        <ol class="breadcrumb mb-0">
            <li class="breadcrumb-item">
                <a href="/"><i class="fe fe-home"></i></a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">View Platform</li>
        </ol>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card shadow">
                <div class="card-header">
                    <h2 class="mb-0">View Platform</h2>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="edd" class="table table-striped table-bordered w-100 text-nowrap text-center">
                            <thead>
                                <tr>
                                    <th class="wd-25p"> Platform Name</th>
                                    <th class="wd-25p">Image</th>
                                    <th class="wd-15p">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if (isset($platformData))
                                    @foreach ($platformData as $item)
                                        <tr>
                                            <td> {{ $item->name }}</td>
                                            <td class="text-center">
                                                <img class="mg-fluid" alt="{{ $item->image }}"
                                                    src="{{ url($item->image) }}" height="100" width="100" />
                                            </td>
                                            <td>
                                                <button type="button" class="btn btn-danger" id="delelePlatform"
                                                    data-id="{{ $item->id }}" data-url={{ url('/platform') }}>
                                                    <i class="fas fa-trash"></i>
                                                </button>
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
