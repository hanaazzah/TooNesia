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
                        'method' => 'PATCH',
                        'enctype' => 'multipart/form-data',
                        'route' => ['comics.update', $comic->id]
                    ]) !!}

                    <div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
                        {!! Form::label('Judul Komik') !!}
                        {!! Form::text('title', $comic->title, ['class' => 'form-control', 'placeholder' => 'Judul Komik'])!!}
                        <span class="help-block">
                            <strong>{{ $errors->first('title') }}</strong>
                        </span>
                    </div>

                    <div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
                        {!! Form::label('Judul Komik') !!}
                        {!! Form::textarea('description', $comic->description, ['class' => 'form-control', 'placeholder' => 'Deskripsi'])!!}
                        <span class="help-block">
                            <strong>{{ $errors->first('description') }}</strong>
                        </span>
                    </div>

                    <div class="form-group{{ $errors->has('category') ? ' has-error' : '' }}">
                        {!! Form::label('Kategori') !!}
                        {!! Form::select('category', $categories, $comic->category_id, ['class' => 'form-control'])!!}
                        <span class="help-block">
                            <strong>{{ $errors->first('category') }}</strong>
                        </span>
                    </div>

                    <div class="form-group{{ $errors->has('image') ? ' has-error' : '' }}">
                        {!! Form::label('Image') !!}
                        {!! Form::file('image', ['class' => 'form-control'])!!}
                        <span class="help-block">
                            <strong>{{ $errors->first('image') }}</strong>
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
