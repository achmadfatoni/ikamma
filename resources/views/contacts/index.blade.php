@extends('layouts.main')

@section('css')
    <link href="/assets/css/datatables/dataTables.bootstrap.css" rel="stylesheet" type="text/css"/>
@stop

@section('contents')
    <div class="row mt">
        <div class="col-md-12 col-xs-12">
            <h3 class="text-center">DAFTAR ANGGOTA</h3>
            <hr>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12 col-xs-12 col-xs-12">
            <a href="{!! URL::to('contacts/create') !!}" class="btn btn-primary">Tambah Contacts</a>
            @include('layouts.notifikasi')
        </div>
    </div>

    <div class="row mt">
        <div class="col-md-12 col-xs-12">
            <div class="table-responsive">
                <table id='list' class="table table-bordered table-striped">
                    <thead>
                    <tr>
                        <th class="text-center" width="10%">No</th>
                        <th class="text-center">Nama</th>
                        <th class="text-center">Status</th>
                        <th class="text-center">No HP</th>
                        <th class="text-center" width="10%">Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php $no = 1; ?>
                    @foreach($list as $row)
                        <tr>
                            <td class="text-center">{!! $no !!}</td>
                            <td>{!! $row->name !!}</td>
                            <td>{!! $row->is_active ? 'Aktif' : 'Tidak aktif' !!}</td>
                            <td class="text-center">{!! $row->no_hp !!}</td>
                            <td class="text-center">
                                <form action="{!! URL::to('contacts/'.$row->id) !!}" method="POST">
                                    <input type="hidden" name="_method" value="DELETE"/>
                                    <input type="hidden" name="_token" value="{!! csrf_token() !!}"/>
                                    <a href="{!! URL::to('contacts/'.$row->id.'/edit') !!}" class="btn btn-xs btn-primary"><i class="glyphicon glyphicon-pencil white"></i></a>
                                    <button type="submit" class="btn btn-xs btn-danger"><i class="glyphicon glyphicon-remove white"></i></button>
                                </form>
                            </td>
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
    <script src="assets/js/datatables/jquery.dataTables.js"></script>
    <script src="assets/js/datatables/dataTables.bootstrap.js"></script>
    <script>
        $(document).ready(function () {
            $('#list').dataTable();
        });
    </script>
@stop
