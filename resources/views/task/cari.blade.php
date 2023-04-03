@extends('layouts.app')

@section('main')

<div class="container mt-5">
    <div class="card text-center">
        <div class="card-header">
            My Task
        </div>
        @foreach($cari as $cari)
        <div class="card-body">
            <h5 class="card-title">{{$cari->name}}</h5>
            <p class="card-text">{{$cari->activity}}</p>
            <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
            
        </div>
        <div class="card-footer text-muted">
        {{$cari->created_at->diffForHumans()}}
        </div>
        @endforeach
    </div>
</div>

@endsection