<!DOCTYPE html>
<html lang="hu">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('fs/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">

    <script src="{{ asset('bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <title>OOPEdu.hu</title>

    <link rel="stylesheet" href="/css/app.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            color: black;

        }

        .jumbotron {

            color: black;
            font-size: 18px;
            padding: 100px;

        }

        .jumbotron::after {
            content: '';
            background-image: url('kepek/borito.jpg');
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            opacity: 0.4;
            z-index: -1;
            background-size: cover;
        }

        .btn {
            background-color: #3498db;
            color: white;
            border: none;
            padding: 10px 20px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 18px;
            border-radius: 5px;
            cursor: pointer;
        }

        .card {
            border: 1px solid #ccc;
            border-radius: 10px;
            margin-bottom: 20px;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
        }

        footer {
            background-color: turquoise;
            color: white;
            padding: 10px;
            margin: auto;

            text-align: center;
            position: relative;
            bottom: 0;
            width: 100%;


        }

        .ratings-wrapper {

            display: inline-block;
            padding: 5px 10px;
        }

        .ratings {
            display: flex;
            flex-direction: row-reverse;
        }

        .ratings span {
            cursor: pointer;
            transition: color .3s, transform .3s;
            font-size: 50px;
        }

        .ratings span:hover {
            color: lightgoldenrodyellow;
            transform: scale(1.5);
        }

        .ratings span:hover~span {
            color: orange;

        }

        .ratings span[data-clicked] {
            color: orange;
        }

        .ratings span[data-clicked]~span {
            color: orange;
        }
    </style>
</head>

<body>
    @include('inc.navbar')

    <div class="container">

        <main>
            @yield('content')
        </main>
    </div>

    <footer class="text-center" id="footer">
        <p>Copyright 2023 &copy; OOPEdu.hu</p>
    </footer>

    @stack('scripts')
</body>

</html>
