<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('fs/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">
    <script src="{{ asset('bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <link rel="stylesheet" href="{{ asset('css/navbar.css') }}">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #64D8CB;">
        <div class="container">
            <div class="navbar-collapse">
                <div class="menu">
                    <a class="navbar-brand text text-white">OOP Edu</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse " id="navbarNav">
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item">
                                <div class="menu-item">
                                    <a class="nav-link text text-white " href="/">
                                        <i class="fas fa-home"></i> Home
                                    </a>
                                    <span>
                                        <a class="nav-link " href="/">
                                            <i class="fas fa-home"></i> Home
                                        </a>
                                    </span>
                                </div>
                            </li>
                            <li class="nav-item">
                                <div class="menu-item">
                                    <a class="nav-link text text-white " href="/about">
                                        <i class="fas fa-address-card"></i> Rólunk
                                    </a>
                                    <span>
                                        <a class="nav-link" href="/about">
                                            <i class="fas fa-address-card"></i> Rólunk
                                        </a>
                                    </span>
                                </div>
                            </li>
                            <li class="nav-item">
                                <div class="menu-item">
                                    <a class="nav-link text text-white" href="/contact">
                                        <i class="fas fa-envelope"></i> Kapcsolat
                                    </a>
                                    <span>
                                        <a class="nav-link" href="/contact">
                                            <i class="fas fa-envelope"></i> Kapcsolat
                                        </a>
                                    </span>
                                </div>
                            </li>
                            <li class="nav-item">
                                <div class="menu-item">
                                    <a class="nav-link text text-white" href="{{ route('auth.reg') }}">
                                        <i class="fas fa-registered"></i> Regisztráció
                                    </a>
                                    <span>
                                        <a class="nav-link" href="{{ route('auth.reg') }}">
                                            <i class="fas fa-registered"></i> Regisztráció
                                        </a>
                                    </span>
                                </div>
                            </li>
                            <li class="nav-item">
                                <div class="menu-item">
                                    <a class="nav-link text text-white" href="{{ route('auth.login') }}">
                                        <i class="fas fa-sign-in-alt"></i> Bejelentkezés
                                    </a>
                                    <span>
                                        <a class="nav-link" href="{{ route('auth.login') }}">
                                            <i class="fas fa-sign-in-alt"></i> Bejelentkezés
                                        </a>
                                    </span>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </nav>

</body>
</html>
