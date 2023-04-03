@extends('layouts.app')

@section('main')

<div class="border rounded mt-5 mx-auto d-flex flex-column align-items-stretch bg-white" style="width: 380px;">
    <div class="d-flex justify-content-between flex-shrink-0 p-3 link-dark  border-bottom">
        <span class="fs-5 fw-semibold">Task Lists</span>
        @if(Auth::user()->role == 'admin')
        <a href="{{route('task.create')}}"><span class="btn btn-sm btn-primary">add</span></a>
        @endif
    </div>

    @foreach($tasks as $data)
    <div class="list-group list-group-flush border-bottom scrollarea">
        @if($data->prioritas_id == 1)
        <div class="list-group-item list-group-item-action py-3 lh-tight bg-warning p-3" aria-current="true">
            <div class="d-flex w-100 align-items-center justify-content-between">
                <strong class="mb-1">{{ $data->activity}}</strong>
                <small>{{$data->created_at}}</small>
            </div>
            <div class="col-10 mb-1 small">{{ $data->name }}</div>
            @if(Auth::user()->role == 'admin')
            <div class="group-action">
                <form action="{{ route('task.destroy', $data->id)}}" method="POST">
                    @csrf @method('DELETE')

                    <a href="{{route('task.edit', $data->id)}}" class="badge bg-info text-white">edit</a>
                    <button type="submit" class="badge bg-danger text-white">delete</button>
                </form>
            </div>
            @endif
        </div>
        @elseif($data->prioritas_id == 2)
        <div class="list-group-item list-group-item-action py-3 lh-tight bg-success p-3" aria-current="true">
            <div class="d-flex w-100 align-items-center justify-content-between">
                <strong class="mb-1">{{ $data->activity}}</strong>
                <small>{{$data->created_at}}</small>
            </div>
            <div class="col-10 mb-1 small">{{ $data->name }}</div>
            @if(Auth::user()->role == 'admin')
            <div class="group-action">
                <form action="{{ route('task.destroy', $data->id)}}" method="POST">
                    @csrf @method('DELETE')

                    <a href="{{route('task.edit', $data->id)}}" class="badge bg-info text-white">edit</a>
                    <button type="submit" class="badge bg-danger text-white">delete</button>
                </form>
            </div>
            @endif
        </div>
        @else
        <div class="list-group-item list-group-item-action py-3 lh-tight bg-secondary p-3" aria-current="true">
            <div class="d-flex w-100 align-items-center justify-content-between">
                <strong class="mb-1">{{ $data->activity}}</strong>
                <small>{{$data->created_at}}</small>
            </div>
            <div class="col-10 mb-1 small">{{ $data->name }}</div>
            @if(Auth::user()->role == 'admin')
            <div class="group-action">
                <form action="{{ route('task.destroy', $data->id)}}" method="POST">
                    @csrf @method('DELETE')

                    <a href="{{route('task.edit', $data->id)}}" class="badge bg-info text-white">edit</a>
                    <button type="submit" class="badge bg-danger text-white">delete</button>
                </form>
            </div>
            @endif
        </div>
        @endif
    </div>
    @endforeach

    <div class="mt-4 d-flex justify-content-center">
        {{ $tasks->links('pagination::bootstrap-4') }}
    </div>



</div>

@endsection