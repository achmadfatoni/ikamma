@extends('layouts.main')

@section('css')

@stop

@section('contents')
    <div class="row mt">
        <div class="col-md-12 col-xs-12">
            <h3 class="text-center">Create New Contact</h3>
            <hr>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6 col-md-offset-3 col-xs-12">
            @include('layouts.notifikasi')
        </div>
    </div>
    <div class="row mt">
        <div class="col-md-6 col-md-offset-3 col-xs-12">
            <form class="form" method="POST" action="{!! URL::to('contacts') !!}">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="form-group">
                    <label for="name">Nama</label>
                    <input type="text" class="form-control" name="name" placeholder="Isi nama"
                           value="{!! old('name') !!}" required>
                </div>
                <div class="form-group">
                    <label for="no_hp">No Hp</label>
                    <input type="text" class="form-control" name="no_hp" placeholder="Isi no hp"
                           value="{!! old('no_hp') !!}" required>
                </div>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </form>
        </div>
    </div>
@stop

@section('js')

@stop