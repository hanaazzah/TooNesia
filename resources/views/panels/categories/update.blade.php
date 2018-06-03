@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <h4>Tambah Kategori</h4>
            </div>
            <div class="ibox-content">
                    {!! Form::open([
                        'method' => 'PATCH',
                        'route' => ['categories.update', $category->id]
                    ])!!}
                    <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                        {!! Form::label('Nama Kategori') !!}
                        {!! Form::text('name', $category->name, ['class' => 'form-control', 'placeholder' => 'Nama Kategori'])!!}
                        <span class="help-block">
                            <strong>{{ $errors->first('name') }}</strong>
                        </span>
                    </div>
                    <div class="form-group">
                        <input type="submit" class="btn btn-success" value="Update">
                    </div>
                    {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>
@endsection
