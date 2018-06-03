@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="ibox float-e-margins">
            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif
            <div class="ibox-title">
                <a href="{{ url('seasons/add') }}/{{{ Request::segment(2) }}}" class="btn btn-success">Tambah Season</a>
            </div>
            <div class="ibox-content">

                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th width="5%">#</th>
                        <th>Nama Season</th>
                        <th>Image</th>
                        <th width="15%" colspan="2">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                        @if(count($seasons))
                            @foreach($seasons as $key => $value)
                            <tr>
                                <td align="center">{{ $key+1 }}</td>
                                <td><a href="#" title="Lihat Season">{{ $value->season_name }}</a></td>
                                <td><img src="{{ env('APP_URL') }}/{{ str_replace('public/', '', $value->cover_image) }}" width="100px"></td>
                                <td>
                                    <a href="{{ url('seasons/update') }}/{{ $value->id}}" class="btn btn-success" title="Edit">Edit</i></a>
                                </td>
                                <td>
                                    {!! Form::open([
                                        'method' => 'DELETE',
                                        'url' => 'seasons/delete/'.Request::segment(2).'/'.$value->id
                                    ]) !!}
                                    <button onclick="return confirm('Apakah anda yakin akan menghapus data ini?')" class="btn btn-danger" type="submit">Delete</button>
                                    {!! Form::close() !!}
                                </td>
                            </tr>
                            @endforeach
                        @else
                            <td colspan="3" align="center">Data tidak di temukan</td>
                        @endif
                    </tbody>
                </table>
                {{ $seasons->links() }}
            </div>
        </div>
    </div>
</div>
@endsection
