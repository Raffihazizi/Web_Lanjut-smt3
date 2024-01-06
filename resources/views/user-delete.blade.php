@extends('layouts.mainlayout')

@section('title', 'Detele user')

@section('content')

    <h2>apakah kamu yakin menghapus {{$user->username}}</h2>
    <div>
        <a href="/user-destroy/{{$user->slug}}" class="btn btn-danger">Sure</a>
        <a href="/users" class="btn btn-info">Cancel</a>
    </div>
@endsection
