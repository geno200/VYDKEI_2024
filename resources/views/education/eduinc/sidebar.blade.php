<!DOCTYPE html>
<html lang="hu">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('fs/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">
    <script src="{{ asset('bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <link rel="stylesheet" href="{{ asset('css/sidebar.css') }}">
    <title>OOPEdu</title>

</head>

<body>
    <div class="container-fluid">
        <div class="row ">
            <div class="d-flex flex-column justify-content-between col-auto bg-dark min-vh-100">
                @if (Auth::user()->usertype === 'teacher')
                <div class=" mt-4 d-flex justify-content-center">
                    <a href="\list" class="text-white text-decoration-none d-flex align-items-center">
                        <span class="fas fa-edit"> Tananyag </span>
                    </a>
                </div>
                @else
                <div class=" mt-4 d-flex justify-content-center">
                    <a class="text-white text-decoration-none d-flex align-items-center">
                        <span class="fas fa-school"> OOP Edu </span>
                    </a>
                </div>
                @endif
                <hr class="text-white d-none d-sm-block" />
                <ul class="nav nav-pills flex-column mt-3 mt-sm-0" id="menu">
                    <li class="nav-item my-sm-1 my-2">
                        <a href="/" class="nav-link text-white">
                            <i class="fs-5 fa fa-home"></i><span class="fs-4 ms-3 d-none d-sm-inline">Főoldalra</span>
                        </a>
                    </li>
                    <li class="nav-item my-sm-1 my-2">
                        <a href="/profil" class="nav-link text-white">
                            <i class="fs-5 fa fa-circle-user"></i>
                            <span class="fs-4 ms-3 d-none d-sm-inline">Fiókom</span>
                        </a>
                    </li>
                    <li class="nav-item my-sm-1 my-2">
                        <a href="/bevezetes" class="nav-link text-white">
                            <i class="fs-5 fa fa-book-open"></i><span
                                class="fs-4 ms-3 d-none d-sm-inline">Bevezetés</span>
                        </a>
                    </li>
                </ul>
                <button class="dropdown-btn ">
                    <i class="fs-5 fa fa-bars"></i>
                    <span class="fs-5 ms-4 d-none d-sm-inline">
                        1.Fejezet
                    </span>
                    <i class="fa fa-caret-down"></i>
                </button>
                <div class="dropdown-container">
                    <div class="col-md-12">
                        <a href="/unit1_1">- Előnye és fontossága</a>
                    </div>
                    <div class="col-md-12">
                        <a href="/unit1_2">- Alapelvek</a>
                    </div>
                    <div class="col-md-12">
                        <a href="/unit1_3">- Tervezési minták</a>
                    </div>
                    <div class="col-md-12">
                        <a href="/unit1_quiz">1. Teszt</a>
                    </div>
                </div>
                <button class="dropdown-btn">
                    <i class="fs-5 fa fa-bars"></i>
                    <span class="fs-5 ms-4 d-none d-sm-inline">
                        2.Fejezet
                    </span>
                    <i class="fa fa-caret-down"></i>
                </button>
                <div class="dropdown-container">
                    <div class="col-md-12">
                        <a href="/unit2_1">- Egységbezárás</a>
                    </div>
                    <div class="col-md-12">
                        <a href="/unit2_2">- Öröklődés</a>
                    </div>
                    <div>
                        <a href="/unit2_3">- Polimorfizmus</a>
                    </div>
                    <div class="col-md-12">
                        <a href="/unit2_quiz">2. Teszt</a>
                    </div>
                </div>
                <button class="dropdown-btn">
                    <i class="fs-5 fa fa-bars"></i>
                    <span class="fs-5 ms-4 d-none d-sm-inline">
                        3.Fejezet
                    </span>
                    <i class="fa fa-caret-down"></i>
                </button>
                <div class="dropdown-container">
                    <div class="col-md-12">
                        <a href="/unit3_1">- Singleton</a>
                    </div>
                    <div class="col-md-12">
                        <a href="/unit3_2">- Prototype</a>
                    </div>
                    <div class="col-md-12">
                        <a href="/unit3_3">- Factory Method</a>
                    </div>
                    <div class="col-md-12">
                        <a href="/unit3_quiz">3. Teszt</a>
                    </div>
                </div>
                <button class="dropdown-btn">
                    <i class="fs-5 fa fa-bars"></i>
                    <span class="fs-5 ms-4 d-none d-sm-inline">
                        4.Fejezet
                    </span>
                    <i class="fa fa-caret-down"></i>
                </button>
                <div class="dropdown-container">
                    <div class="col-md-12">
                        <a href="/unit4_1">- Adapter</a>
                    </div>
                    <div class="col-md-12">
                        <a href="/unit4_2">- Decorator</a>
                    </div>
                    <div class="col-md-12">
                        <a href="/unit4_3">- Proxy</a>
                    </div>
                    <div class="col-md-12">
                        <a href="/unit4_quiz">4. Teszt</a>
                    </div>
                </div>
                <button class="dropdown-btn ">
                    <i class="fs-5 fa fa-bars"></i>
                    <span class="fs-5 ms-4 d-none d-sm-inline">
                        5.Fejezet
                    </span>
                    <i class="fa fa-caret-down"></i>
                </button>
                <div class="dropdown-container">
                    <div class="col-md-12">
                        <a href="/unit5_1">- State</a>
                    </div>
                    <div class="col-md-12">
                        <a href="/unit5_2">- Observer</a>
                    </div>
                    <div class="col-md-12">
                        <a href="/unit5_3">- Template & Strategy</a>
                    </div>
                    <div class="col-md-12">
                        <a href="/unit5_quiz">5. Teszt</a>
                    </div>
                </div>
            </div>



        </div>
    </div>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            var dropdownButtons = document.getElementsByClassName("dropdown-btn");
            for (var i = 0; i < dropdownButtons.length; i++) {
                dropdownButtons[i].addEventListener("click", function() {
                    this.classList.toggle("active");
                    var dropdownContent = this.nextElementSibling;

                    if (dropdownContent.style.maxHeight) {
                        dropdownContent.style.maxHeight = null;
                    } else {
                        dropdownContent.style.maxHeight = dropdownContent.scrollHeight;
                    }
                });
            }
        });
    </script>

</body>

</html>
