<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title') | Kavindu Rashmika</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    @vite(['resources/css/app.css'])
</head>
<body class="d-flex flex-column min-vh-100">

    <!-- Navbar -->
    <nav class="navbar navbar-dark bg-dark fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{ url('/') }}">Kavindu Rashmika</a>
            <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbarRight">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="d-none d-lg-flex">
                <ul class="navbar-nav flex-row ms-auto">
                    <li class="nav-item px-3"><a class="nav-link text-white" href="{{ url('/') }}">Home</a></li>
                    <li class="nav-item px-3"><a class="nav-link text-white" href="{{ url('/about') }}">About Us</a></li>
                    <li class="nav-item px-3"><a class="nav-link text-white" href="{{ url('/contact') }}">Contact Us</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Offcanvas Mobile -->
    <div class="offcanvas offcanvas-end bg-dark text-white" id="offcanvasNavbarRight">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title">Menu</h5>
            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas"></button>
        </div>
        <div class="offcanvas-body">
            <ul class="navbar-nav">
                <li class="nav-item"><a class="nav-link text-white" href="{{ url('/') }}">Home</a></li>
                <li class="nav-item"><a class="nav-link text-white" href="{{ url('/about') }}">About Us</a></li>
                <li class="nav-item"><a class="nav-link text-white" href="{{ url('/contact') }}">Contact Us</a></li>
            </ul>
        </div>
    </div>

    <!-- Main Content -->
    <main class="flex-grow-1 container mt-5 pt-5">
        @yield('content')
    </main>

    <!-- Footer Always at Bottom -->
    <footer class="bg-dark text-white text-center py-3 mt-auto">
        <p class="mb-0">&copy; {{ date('Y') }} Kavindu Rashmika. All rights reserved.</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
