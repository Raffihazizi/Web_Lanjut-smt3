@extends('layouts.mainlayout')

@section('title', 'Daleted Category')

@section('content')

    <h2>Delete Category List</h2>

     <div class="d-flex justify-content-end">

        <a href="/categories" class="btn btn-primary">Kembali</a>
    </div>


    <dir class="mt-5">
        @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif
    </dir>


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
                @foreach ($deletedCategories as $item)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $item->name }}</td>
                        <td>
                            <a href="categori-restore/{{$item->slug}}">restore</a>

                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
