@extends('Admin.layouts.leftMenu')
@section('title') Admin||View Gallery Images @endsection
@section('content')
    <div class="page-header mt-0 p-3">
        <h3 class="mb-sm-0">View Gallery Images</h3>
        <ol class="breadcrumb mb-0">
            <li class="breadcrumb-item">
                <a href="/"><i class="fe fe-home"></i></a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">View Gallery Images</li>
        </ol>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card shadow">
                <div class="card-header">
                    <h2 class="mb-0">View Gallery Images</h2>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="edd" class="table table-striped table-bordered w-100 text-nowrap text-center">
                            <thead>
                                <tr>
                                    <th class="wd-25p">Image</th>
                                    <th class="wd-15p">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if (isset($galleryData))
                                    @foreach ($galleryData as $item)
                                        <tr>
                                            <td class="text-center">
                                                <img class="mg-fluid" alt="{{ $item->image_file }}"
                                                    src="{{ url($item->image_file) }}" height="150" width="150" />
                                            </td>
                                            <td>
                                                <button type="button" id="deleteGalleryImage" class="btn btn-danger"
                                                    data-id="{{ $item->id }}" data-url={{ url('/gallery') }}>
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
            $("#edd").dataTable({
                bPaginate: true,
                bLengthChange: true,
                bFilter: true,
                bSort: false,
                bInfo: true,
                bAutoWidth: false,
            });
            $(document).on('click', '#deleteGalleryImage', function() {
                let id = $(this).attr('data-id')
                let url = $(this).attr('data-url')
                let csrf = $('meta[name="csrf-token"]').attr('content')
                let data = {
                    _token: csrf,
                    galleryId: id,
                    action: 'delete'
                };
                $.ajax({
                    url: url,
                    method: 'DELETE',
                    data: data,
                    success: function(res) {
                        if (res.status) {
                            swal('Success!', res.message,
                                'success');
                            setInterval(() => {
                                location.reload()
                            }, 4000);
                        } else
                            swal('Error!', res.message,
                                'error');
                    }
                })
            })
        });
    </script>
@endsection
