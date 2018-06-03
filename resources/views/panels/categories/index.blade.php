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
                <a href="{{ route('categories.add') }}" class="btn btn-success">Tambah Kategori</a>
            </div>
            <div class="ibox-content">

                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th width="5%">#</th>
                        <th>Name</th>
                        <th width="15%" colspan="2">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                        @if(count($categories))
                            @foreach($categories as $key => $value)
                            <tr>
                                <td align="center">{{ $key+1 }}</td>
                                <td>{{ $value->name }}</td>
                                <td>
                                    <a href="{{ url('categories/update') }}/{{ $value->id}}" class="btn btn-success" title="Edit">Edit</i></a>
                                </td>
                                <td>
                                    {!! Form::open([
                                        'method' => 'DELETE',
                                        'route' => ['categories.delete', $value->id]
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
                {{ $categories->links() }}
            </div>
        </div>
    </div>
</div>
@endsection
