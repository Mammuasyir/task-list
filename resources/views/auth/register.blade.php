@extends('layouts.app')

@section('main')

<div class="mt-5 mx-auto" style="width: 380px">
    <div class="card">
        <div class="card-body">
            <form action="{{ route('register') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="" class="form-label">User</label>
                    <input name="name" type="text" value="{{ old('name') }}" class="form-control">
                    @error('name')
                    <span class="text-danger">
                        {{ $message }}
                    </span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Email</label>
                    <input name="email" value="{{ old('email') }}" type="email" class="form-control" id="" rows="3"></input>
                    @error('email')
                    <span class="text-danger">
                        {{ $message }}
                    </span>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="" class="form-label">Telepon</label>
                    <input name="telepon" value="{{ old('telepon') }}" type="text" class="form-control" id="" rows="3"></input>
                    @error('telepon')
                    <span class="text-danger">
                        {{ $message }}
                    </span>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="" class="form-label">Address</label>
                    <textarea name="address" type="text" class="form-control" id="" rows="3">{{ old('address') }}</textarea>
                    @error('address')
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
                
                <button type="submit" class="btn btn-success">Register</button>
            </form>
        </div>
    </div>
</div>

@endsection