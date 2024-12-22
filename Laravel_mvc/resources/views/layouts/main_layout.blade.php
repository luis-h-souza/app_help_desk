<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>App Help Desk</title>
    <link rel="stylesheet" href="{{ asset('assets/bootstrap/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/fontawesome/css/all.min.css') }}">
    <link rel="shortcut icon" href="{{ asset('assets/images/logo.png') }}" type="image/png">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>

    <nav class="navbar navbar-dark bg-dark border border-dark shadow">
        <div class="navbar-brand border-0 my-2">
            <a href="{{ route('home') }}" class="text-decoration-none d-flex align-items-center">
                <img src="{{ asset('assets/images/logo.png') }}" width="50" height="auto"
                    class="d-inline-block ms-4" alt="logo">
                <h2 class="ms-2">App Help Desk</h2>
            </a>
        </div>
        <div class="d-flex justify-content-end align-items-center me-5">
            <span class="me-5 d-flex align-items-center">
                <i class="fa-solid fa-user-circle fa-lg text-info me-2 fs-3"></i>{{ session('user.email') }}
            </span>
            <a href="{{ route('logout') }}" class="btn btn-outline-info px-3">
                Logout<i class="fa-solid fa-arrow-right-from-bracket ms-2"></i>
            </a>
        </div>
    </nav>
    </header>

    @yield('content')

    <script src="{{ asset('assets/bootstrap/bootstrap.bundle.min.js') }}"></script>
</body>

</html>
