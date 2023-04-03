@extends('layouts.app')

@section('main')

@if (Session::get('success'))
<div class="container mt-3">
    <div class="alert alert-success alert-dismissible fade-show" role="alert">
        {{Session::get('success')}}
    </div>
</div>
@endif

@if (Session::get('failed'))
<div class="container mt-3">
    <div class="alert alert-danger alert-dismissible fade-show" role="alert">
        {{Session::get('failed')}}
    </div>
</div>
@endif

<div class="container mt-5">
    <div class="d-flex justify-content-between mb-3">
        <h3>Daftar Prioritas</h3>
        <a href="{{ route('priority.create') }}" class="btn btn-primary">Tambah Prioritas</a>
    </div>
    <table class="table table-bordered table table-striped">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Prioritas</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($priority as $p)
            <tr>
                <th>{{$p->id}}</th>
                <td style="font-style: italic">{{$p->prioritas}}</td>
                <td>
                    <div class="d-flex justify-content mb-3">
                        <form action="{{ route('priority.destroy', $p->id) }}" method="POST">
                            @csrf
                            @method('DELETE')

                            <a href="{{ route('priority.edit', $p->id) }}" class="btn btn-primary"><i class="fa-solid fa-edit"></i></a>
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Hapus Data {{$p->prioritas}} ?')"><i class="fa-solid fa-trash"></i></button>
                        </form>
                    </div>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection