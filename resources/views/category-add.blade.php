@extends('layouts.mainlayout')

@section('title','Add Category')

@section('content')

    <h1>Add Category baru</h1>

    <div class="mt-5 w-50">

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                   @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                   @endforeach
                </ul>
            </div>
        @endif

        <form action="categori-add" method="post">
            @csrf
            <div>
                <label for="name" class="form-label">Name</label>
                <input type="text" name="name" id="name" class="form-control" placeholder="Isi kategori">
            </div>
            <div class="mt-3">
                <button class="btn btn-success" type="submit">Save</button>
            </div>
        </form>
    </div>
@endsection
