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
            <form action="{{ route('task.update', $task->id)}}" method="POST">
                @csrf @method('PATCH')
                <div class="mb-3">
                    <label for="" class="form-label">Name</label>
                    <input type="text" name="name" value="{{ old('name', $task->name) }}" class="form-control">
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
                        @if($p->id == $task->prioritas_id)
                        <option value="{{$p->id}}" selected='selected'>&nbsp;&nbsp;&nbsp;{{$p->prioritas}}</option>
                        @else
                        <option value="{{$p->id}}">&nbsp;&nbsp;&nbsp;{{$p->prioritas}}</option>
                        @endif
                        @endforeach
                    </select>
                </div>

                <div class="mb-3">
                    <label for="" class="form-label">Task</label>
                    <textarea class="form-control" name="activity" value="" id="" rows="3">{{ old('activity', $task->activity)}}</textarea>
                    @error('activity')
                    <span class="text-danger">
                        {{ $message }}
                    </span>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary">Edit data</button>
            </form>
        </div>
    </div>
</div>

@endsection