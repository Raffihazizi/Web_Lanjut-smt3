@extends('layouts.mainlayout')

@section('title', 'Dashboard')

@section('page-name', 'dashboard')

@section('content')

    <h1>Daftar Rental Buku</h1>

    <div class="m-t5">
         <table class="table"th>
            <thead>
                <tr>
                    <th>No</th>
                    <th>User</th>
                    <th>Book</th>
                    <th>rent date</th>
                    <th>return date</th>
                    <th>actual return date</th>
                </tr>
            </thead>
            <tbody>
               @foreach ($rent_logs as $item)
                    <tr class="{{ $item->actual_return_date == null ? '' : ($item->return_date <
                        $item->actual_return_date ? 'text-bg-danger' : 'text-bg-success') }}">
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $item->user->username }}</td>
                        <td>{{ $item->book->title }}</td>
                        <td>{{ $item->rent_date }} </td>
                        <td>{{ $item->return_date }}</td>
                        <td>{{ $item->actual_return_date }}</td>
                    </tr>
               @endforeach
            </tbody>
        </table>
    </div>

    <h7>-Apabila telat mengembalikan Buku akan menampilkan warna merah pada list</h7><br>
    <h7>-Apabila tepat waktu mengumpulkan buku akan menampilkan warna hijau pada list</h7>





@endsection
