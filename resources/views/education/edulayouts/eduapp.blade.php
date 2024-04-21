<!DOCTYPE html>
<html lang="hu">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>OOPEdu.hu</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">
    <script src="{{ asset('bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <link rel="stylesheet" href="/css/app.css">
    <script src="js/quiz.js"></script>
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <main class="col-md-12">
                @yield('content')
            </main>
        </div>
    </div>

    <footer class="text-center" id="footer">
        <p>Copyright 2023 &copy; OOPEdu.hu</p>
    </footer>

    @stack('scripts')
</body>

</html>
