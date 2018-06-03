@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <h4>Tambah Komik</h4>
            </div>
            <div class="ibox-content">
                    {!! Form::open([
                        'method' => 'POST',
                        'enctype' => 'multipart/form-data',
                        'route' => ['seasons.store', Request::segment(3)]
                    ]) !!}
                    <div class="form-group{{ $errors->has('season_name') ? ' has-error' : '' }}">
                        {!! Form::label('Nama Season') !!}
                        {!! Form::text('season_name', old('season_name'), ['class' => 'form-control', 'placeholder' => 'Nama Season'])!!}
                        <span class="help-block">
                            <strong>{{ $errors->first('season_name') }}</strong>
                        </span>
                    </div>

                    <div class="form-group{{ $errors->has('cover_image') ? ' has-error' : '' }}">
                        {!! Form::label('Cover Image') !!}
                        {!! Form::file('cover_image', ['class' => 'form-control'])!!}
                        <span class="help-block">
                            <strong>{{ $errors->first('cover_image') }}</strong>
                        </span>
                    </div>

                    <div class="form-group{{ $errors->has('file_comic') ? ' has-error' : '' }}">
                        {!! Form::label('File Komik') !!}
                        {!! Form::file('file_comic', ['class' => 'form-control'])!!}
                        <span class="help-block">
                            <strong>{{ $errors->first('file_comic') }}</strong>
                        </span>
                    </div>


                    <div class="form-group">
                        <input type="submit" class="btn btn-success" value="Simpan">
                        <a href="{{ route('comics.index') }}" class="btn btn-warning">Kembali</a>
                    </div>
                    {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>
@endsection
