@extends('layouts.app')
@section('title','Notification')
@section('bs')
<style>

</style>
@endsection
@section('content')
<div class="container mt-3 p-0">
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
            <div class="card">
                @foreach ($notifi as $notification)
                <div class="card-body border-bottom">
                    <div class="card-text"><h4> {{$notification->title}}</h4></div>
                    <div class="card-title">
                        <div class="col-md-12"> {{$notification->date}} <span class="text-info"> {{$notification->time}} </span></div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        <div class="col-md-3"></div>
    </div>
</div>
@endsection
@section('js')
@endsection