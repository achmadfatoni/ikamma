@extends('layouts.main')

@section('css')

@stop

@section('contents')
    <div class="row mt">
        <div class="col-md-12 col-xs-12">
            <h3 class="text-center">Edit Contact</h3>
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
            <form class="form" method="POST" action="{!! URL::to('contacts/'.$contact->id) !!}">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <input type="hidden" name="_method" value="PUT">
                <div class="form-group">
                    <label for="name">Nama</label>
                    <input type="text" class="form-control" name="name" placeholder="Isi nama"
                           value="{!! $contact->name !!}" required>
                </div>
                <div class="form-group">
                    <label for="no_hp">No Hp</label>
                    <input type="text" class="form-control" name="no_hp" placeholder="Isi no hp"
                           value="{!! $contact->no_hp !!}">
                </div>
                <div class="form-group">
                    <label for="status">Status</label>
                    <div class="radio">
                        <label><input type="radio" name="is_active" value="0" {{ $contact->is_active ? null : 'checked' }}>Tidak Aktif</label>
                    </div>
                    <div class="radio">
                        <label><input type="radio" name="is_active" value="1" {{ $contact->is_active ? 'checked' : null }}>Aktif</label>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </form>
        </div>
    </div>
@stop

@section('js')

@stop