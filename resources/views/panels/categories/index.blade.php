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
                <h5> Kategori </h5>
            </div>
            <div class="ibox-content">

                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                        @if(count($categories))
                            @foreach($categories as $key => $value)
                            <td>{{ $value->name }}</td>
                            <td>
                                <a href="" class="btn btn-success" title="Edit"><i class="fa fa-edit"></i></a>
                                <a href="" class="btn btn-danger" title="Hapus"><i class="fa fa-trash"></i></a>
                            </td> 
                            @endforeach
                        @else
                            <td colspan="3" align="center">Data tidak di temukan</td>
                        @endif
                    </tbody>
                </table>

            </div>
        </div>
    </div>
</div>
@endsection
