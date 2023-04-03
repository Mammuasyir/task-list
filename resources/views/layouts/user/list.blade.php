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
    <table class="table table-bordered table-dark table-striped">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Role</th>
                <th scope="col">Email</th>
                <th scope="col">Name</th>
                <th scope="col">Number Phone</th>
                <th scope="col">Address</th>
                <th scope="col">Delete</th>
            </tr>
        </thead>
        <tbody>
            @foreach($users as $u)
            <tr>
                <th>{{$u->id}}</th>
                <td style="font-style: italic">{{$u->role}}</td>
                <td>{{$u->email}}</td>
                <td>{{$u->name}}</td>
                <td>{{$u->telepon}}</td>
                <td>{{$u->address}}</td>
                <td>
                    <div class="d-flex justify-content mb-3">
                        <form action="{{ route('delete.profile', $u->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Hapus Data {{$u->name}} ?')"><i class="fa-solid fa-trash"></i></button>
                        </form>
                    </div>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection