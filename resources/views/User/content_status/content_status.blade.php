@extends('User.layouts.leftMenu') @section('title') Admin || Dashboard @endsection
@section('text')
    Content Status
@endsection
@section('content')

    <style>
        table {
            border-collapse: collapse;
            border: 2px black solid;
            font: 12px sans-serif;
        }

        td {
            border: 1px black solid;
            padding: 5px;
        }

    </style>

    <div class="content-wrapper-scroll">
        <div class="content-wrapper">
            <div class="row gutters">
                <div class="colxxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="card gradient-dark-grey">
                        <div class="card-body">
                            <div class="table-responsive">
                                @if (isset($content_details))
                                    @php
                                        $file = $content_details->excel_image;
                                        $content = file_get_contents('cexcel/' . $file);
                                        $rows = explode("\n", $content);
                                        $th = explode(',', $rows[0]);
                                        unset($rows[0]);
                                        $content = $rows;
                                    @endphp
                                    <table class="table m-0">
                                        <thead>
                                            <tr>
                                                @foreach ($th as $val)
                                                    <th>{{ $val }}</th>
                                                @endforeach
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($content as $item)
                                                <tr>
                                                    @foreach (explode(',', $item) as $val)
                                                        <td> {{ $val }}</td>
                                                    @endforeach
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
