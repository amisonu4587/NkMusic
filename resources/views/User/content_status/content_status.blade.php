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
                            @if(isset($content_details))
                            <?php
                        $ask=$content_details->excel_image; 
                        // echo $ask;
                         $content = file_get_contents('cexcel/'.$ask); 
                        $rows = explode("\n", $content); $th = explode(",", $rows[0]); 
                        unset($rows[0]); $content = $rows; echo '
                            <table class="table m-0">
                                <thead>
                                    <tr>
                                        '; foreach ($th as $val) echo '
                                        <th>' . $val . '</th>
                                        '; echo '
                                    </tr>
                                </thead>
                                <tbody>
                                    '; foreach ($content as $item) { echo '
                                    <tr>
                                        '; $td = explode(',', $item); foreach ($td as $val) echo '
                                        <td>' . $val . '</td>
                                        '; echo '
                                    </tr>
                                    '; } echo '
                                </tbody>
                            </table>
                            '; ?> @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
