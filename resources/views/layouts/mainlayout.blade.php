<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Rental Buku | @yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
</head>



<body>

    <div class="main d-flex flex-column justify-content-between">
        <nav class="navbar navbar-dark navbar-expand-lg bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="dashboard" ><i class="bi bi-house-fill"></i>Rental Buku</a>
                 <a class="navbar-brand" href="/logout"><i class="bi bi-box-arrow-in-left"></i>Logout</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
            </div>
        </nav>

        <div class="body-content h-100">
            <div class="row g-0 h-100">
                <div class="sidebar col-lg-2 collapse d-lg-block" id="navbarTogglerDemo03">
                    @if (Auth::user())
                            @if (Auth::user()->role_id == 1)
                                <a href="/dashboard"     @if (request()->route()->uri == 'dashboard') class="active" @endif><i class="bi bi-person-video"></i>DASHBOARD</a>
                                <a href="/books"         @if (request()->route()->uri == 'books') class="active" @endif> <i class="bi bi-book"></i> BOOKS</a>
                                <a href="/categories"    @if (request()->route()->uri == 'categories'|| request()->route()->uri == 'categori-add' || request()->route()->uri == 'categori-deleted'|| request()->route()->uri == 'categori-edit/{slug}'|| request()->route()->uri == 'categori-delete/{slug}') class="active" @endif><i class="bi bi-journal-text"></i> CATEGORIES</a>
                                <a href="/users"         @if (request()->route()->uri == 'users' || request()->route()->uri == 'registed-user') class="active" @endif><i class="bi bi-person-circle"></i> USERS</a>
                                <a href="/rent-logs"     @if (request()->route()->uri == 'rent-logs') class="active" @endif><i class="bi bi-file-bar-graph"></i>RENT LOG</a>
                                <a href="/"         @if (request()->route()->uri == '/') class="active" @endif ><i class="bi bi-cart-check-fill"></i> DAFTAR BUKU</a>
                                <a href="/book-rent"  @if (request()->route()->uri == 'book-rent') class="active" @endif ><i class="bi bi-book-half"></i>RENTAL BUKU</a>
                            @else
                                <a href="/profile"  @if (request()->route()->uri == 'profile') class="active" @endif>Profile</a>
                                <a href="/">Book List</a>
                                <a href="/logout">Logout</a>
                            @endif
                        @else
                         <a href="/login">Login</a>
                    @endif
                </div>
                <div class="content p-5 col-lg-10">
                    @yield('content')
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</body>
</html>
