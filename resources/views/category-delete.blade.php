@extends('layouts.mainlayout')

@section('title', 'Detele Category')

@section('content')

    <h2>apakah kamu yakin menghapus {{$category->name}}</h2>
    <div>
        <a href="/categori-destroy/{{$category->slug}}" class="btn btn-danger">Sure</a>
        <a href="/categories" class="btn btn-info">Cancel</a>
    </div>
@endsection
