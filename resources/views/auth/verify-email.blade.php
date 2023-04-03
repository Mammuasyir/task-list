@extends('layouts.app')

@section('main')

<div class="mt-5 mx-auto" style="width: 380px">
    <div class="card">
        <div class="card-body">
            @if (session('status'))
            <div class="alert alert-success">
                Link verifikasi email sudah dikirimkan, silahkan konfirmasi
            </div>
            @endif

            Before proceeding, please check your email fo verification, or
            <form action="{{ route('verification.send') }}" method="POST">
                @csrf
                <button type="submit" class="btn btn-link p-0 m-0 align-baseline">{{ ('click here to request another') }}</button>
            </form>
        </div>
    </div>
</div>

@endsection