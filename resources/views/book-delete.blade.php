@extends('layouts.mainlayout')

@section('title', 'Detele Book')

@section('content')

    <h2>apakah kamu yakin menghapus {{$book->title}}</h2>
    <div>
        <a href="/book-destroy/{{$book->slug}}" class="btn btn-danger">Sure</a>
        <a href="/books" class="btn btn-info">Cancel</a>
    </div>
@endsection
