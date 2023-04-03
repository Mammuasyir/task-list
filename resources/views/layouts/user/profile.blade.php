@extends('layouts.app')

@section('main')

<div class="mt-5 mx-auto" style="width: 380px">
    <div class="card">
        <h1 class="d-flex justify-content-center">MY PROFILE</h1>
        <div class="card-body">
            <div class="mb-3">
                <label for="" class="form-label">Name</label>
                <input disabled type="text" name="name" value="{{ old('name', $user->name) }}" class="form-control"></input>
                @error('name')
                <span class="text-danger">
                    {{ $message }}
                </span>
                @enderror
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Email</label>
                <input disabled class="form-control" name="email" id="" rows="3" value="{{ old('email', $user->email)}}"></input>
                @error('email')
                <span class="text-danger">
                    {{ $message }}
                </span>
                @enderror
            </div>
            <div class="mb-3">
                <label for="" class="form-label">telepon</label>
                <input disabled class="form-control" name="telepon" id="" rows="3" value="{{ old('telepon', $user->telepon)}}"></input>
                @error('telepon')
                <span class="text-danger">
                    {{ $message }}
                </span>
                @enderror
            </div>
            <div class="mb-3">
                <label for="" class="form-label">address</label>
                <input disabled class="form-control" name="address" id="" rows="3" value="{{ old('address', $user->address)}}"></input>
                @error('address')
                <span class="text-danger">
                    {{ $message }}
                </span>
                @enderror
            </div>

            <div class="mb-3">
                <label for="" class="form-label">image</label>
                @if (Auth::user()->image == '')
                <img src="https://ui-avatars.com/api/?name={{Auth::user()->name}}" alt=".." class="avatar-img rounded-circle w-25 me-1">
                @else
                <img src="{{url('/storage', $user->image)}}" alt=".." class="avatar-img rounded-circle w-25 me-1">
                @endif
            </div>
            <div class="d-flex justify-content-center">
                <a href="{{route ('edit.profile', $user->id) }}" class="btn btn-primary mt-3">Edit Profile</a>
            </div>
            </form>
        </div>
    </div>
</div>

@endsection