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
                <a href="{{ route('comics.add') }}" class="btn btn-success">Tambah Komik</a>
            </div>
            <div class="ibox-content">

                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th width="5%">#</th>
                        <th>Judul Komik</th>
                        <th>Kategori</th>
                        <th width="10%">Jumlah Season</th>
                        <th width="15%" colspan="2">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                        @if(count($comics))
                            @foreach($comics as $key => $value)
                            <tr>
                                <td align="center">{{ $key+1 }}</td>
                                <td><a href="{{ url('seasons')}}/{{$value->id}}" title="Lihat Season">{{ $value->title }}</a></td>
                                <td>{{ $value->category->name }}</td>
                                <td>{{ $value->seasons->count() }}</td>
                                <td>
                                    <a href="{{ url('comics/update') }}/{{ $value->id}}" class="btn btn-success" title="Edit">Edit</i></a>
                                </td>
                                <td>
                                    {!! Form::open([
                                        'method' => 'DELETE',
                                        'route' => ['comics.delete', $value->id]
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
                {{ $comics->links() }}
            </div>
        </div>
    </div>
</div>
@endsection
