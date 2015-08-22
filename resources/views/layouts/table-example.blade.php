@extends('layouts.main')

@section('css')
    {!!HTML::style("assets/css/datatables/dataTables.bootstrap.css")!!}
@stop

@section('contents')
    <div class="row mt">
        <div class="col-md-12 col-xs-12">
            <h3 class="text-center">DAFTAR -----</h3>
            <hr>
        </div>
    </div>
    <div class="row mt">
        <div class="col-md-12 col-xs-12">
            <div class="table-responsive">
                <table id='list' class="table table-bordered table-striped">
                    <thead>
                    <tr>
                        <th class="text-center">No</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php $no = 1; ?>
                    @foreach($list as $row)
                        <tr>
                            <td class="text-center">{!!$no!!}</td>
                        </tr>
                        <?php $no++; ?>
                    @endforeach
                    </tbody>
                    <tfoot>
                </table>
            </div>
        </div>
    </div>


@stop

@section('js')
    {!!HTML::script("assets/js/datatables/jquery.dataTables.js")!!}
    {!!HTML::script("assets/js/datatables/dataTables.bootstrap.js")!!}
    <script>
        $(document).ready(function () {
            $('#list').dataTable();
        });
    </script>
@stop
