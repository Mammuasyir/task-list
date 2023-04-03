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
            <form action="{{ url('/tasks') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="" class="form-label">Name</label>
                    <input required name="name" type="text" value="{{ old('name') }}" class="form-control">
                    @error('name')
                    <span class="text-danger">
                        {{ $message }}
                    </span>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="" class="form-label">Priority</label>
                    <select name="prioritas_id" style="border: 1px solid;" required class="form-select bg-light">
                        <option value="">&nbsp;&nbsp;&nbsp;-- Priority --</option>
                        @foreach($priority as $p)
                        <option value="{{$p->id}}">&nbsp;&nbsp;&nbsp;{{$p->prioritas}}</option>
                        @endforeach
                    </select>
                </div>

                <div class="mb-3">
                    <label for="" class="form-label">Task</label>
                    <textarea required name="activity" class="form-control" id="" rows="3">{{ old('activity') }}</textarea>
                    @error('activity')
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