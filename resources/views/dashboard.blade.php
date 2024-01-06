@extends('layouts.mainlayout')

@section('title','Dashboard')

@section('content')
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha384-c7oVVMEckIo1BPvUK1xbZt45H4mWWLxj6gQb9bMOyN8V0bKGdKDDZteXtWnEmPDG" crossorigin="anonymous">
    <h1>Dashboard</h1>
    <h2>Welcome {{Auth::user()->username}}</h2>

    <div class="row mt-5">
        <div class="col-lg-4">
            <div class="card-data book">
                <div class="row">
                    <div class="col-6"><i class="bi bi-journal-text"></i></div>
                    <div class="col-6 d-flex flex-column justify-content-center align-items-end">
                        <div class="card-desc">Book</div>
                        <div class="card-count">{{$book_count}}</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="card-data category">
                <div class="row">
                    <div class="col-6"><i class="bi bi-bookmark-check"></i></div>
                    <div class="col-6 d-flex flex-column justify-content-center align-items-end">
                        <div class="card-desc">Category</div>
                        <div class="card-count">{{$categoty_count}}</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="card-data user">
                <div class="row">
                    <div class="col-6"><i class="bi bi-person-check-fill"></i></div>
                    <div class="col-6 d-flex flex-column justify-content-center align-items-end">
                        <div class="card-desc">User</div>
                        <div class="card-count">{{$user_count}}</div>
                    </div>
                </div>
            </div>
        </div>
    </div>



</body>
</html>

@endsection
