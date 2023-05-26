<!DOCTYPE html>
<html>
<head>
    <title>Custom Auth in Laravel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<nav class="navbar navbar-light navbar-expand-lg mb-5" style="background-color: #e3f2fd;">
    <div class="container">
<<<<<<< HEAD
        <a class="navbar-brand mr-auto" href="#">Tintuc.com</a>
=======
        <a class="navbar-brand mr-auto" href="#">PositronX</a>
>>>>>>> TrungHieu
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                @guest
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register-user') }}">Register</a>
                    </li>
                @else
                    <li class="nav-item" >
                        <a class="nav-link" href="{{ route('signout') }}">Logout</a>
                    </li>
                  
                    <li class="nav-item">
                        <a class="nav-link" href="">Xem thông tin người dùng</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('viewall') }}">Xem thông tin tất cả người dùng</a>
                    </li>
                    
                    
                @endguest
            </ul>
        </div>
    </div>
</nav>
@yield('content')
</body>
</html>