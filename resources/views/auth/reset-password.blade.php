@extends('layouts.app')

@section('main')

<div class="mt-5 mx-auto" style="width: 380px">
    <div class="card">
        <div class="card-body">
            <form action="{{ route('password.update') }}" method="POST">
                @csrf
                <input type="hidden" name="token" value="{{ $request->route('token') }}">
                <div class="mb-3">
                    <label for="" class="form-label">Email</label>
                    <input name="email" value="{{ old('email', $request->email) }}" type="email" class="form-control" id="" rows="3"></input>
                    @error('email')
                    <span class="text-danger">
                        {{ $message }}
                    </span>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="" class="form-label">Password</label>
                    <input value="{{ old('password') }}" name="password" type="password" class="form-control" id="" rows="3"></input>
                    @error('password')
                    <span class="text-danger">
                        {{ $message }}
                    </span>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="" class="form-label">Password Confirmation</label>
                    <input name="password_confirmation" type="password" class="form-control" id="" rows="3"></input>
                </div>
                <button type="submit" class="btn btn-success">Reset Password</button>
            </form>
        </div>
    </div>
</div>

@endsection