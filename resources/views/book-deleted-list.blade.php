@extends('layouts.mainlayout')

@section('title', 'Daleted book')

@section('content')

    <h2>Delete book List</h2>

     <div class="d-flex justify-content-end">

        <a href="/books" class="btn btn-primary">Kembali</a>
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
                    <th>Kode buku</th>
                    <th>Title</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($deletedBooks as $item)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $item->book_code }}</td>
                        <td>{{ $item->title}}</td>
                        <td>
                            <a href="/book-restore/{{$item->slug}}">restore</a>

                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
