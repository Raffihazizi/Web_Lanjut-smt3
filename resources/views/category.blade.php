@extends('layouts.mainlayout')

@section('title', 'Category')

@section('content')

    <h2>Category List</h2>

    <div class="d-flex justify-content-end">
        <a href="categori-deleted" class="btn btn-secondary me-3">View Deleted Data</a>
        <a href="categori-add" class="btn btn-primary">Add Data</a>
    </div>

    <div class="mt-5">
        @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif
    </div>


    <div class="my-5">
        <table class="table">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Name</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($categories as $item)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $item->name }}</td>
                        <td>
                            <a href="categori-edit/{{$item->slug}}">edit</a>
                            <a href="categori-delete/{{$item->slug}}">delete</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
