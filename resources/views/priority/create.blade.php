@extends('layouts.app')

@section('main')

<div class="mt-5 mx-auto" style="width: 380px">
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
    <div class="card">
        <div class="card-body">
            <form action="{{ route('priority.store') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="" class="form-label">Prioritas</label>
                    <input required name="prioritas" type="text" value="{{ old('prioritas') }}" class="form-control">
                    @error('prioritas')
                    <span class="text-danger">
                        {{ $message }}
                    </span>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>

@endsection