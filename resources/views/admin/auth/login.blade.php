<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('fs/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">
    <script src="{{ asset('bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <title>Admin Bejeletkezés</title>
</head>

<body>
    <div class="row justify-content-center">
        <div class="col-md-8">
            @if (\Session::get('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <div class="alert-body">
                        {{ \Session::get('success') }}
                    </div>
                    <button type="button" class="btn-close"></button>
                </div>
            @endif
            {{ \Session::forget('success') }}
            @if (\Session::get('error'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <div class="alert-body">
                        {{ \Session::get('error') }}
                    </div>
                    <button type="button" class="btn-close"></button>
                </div>
            @endif
            <div class="card">
                <div class="card-body">
                    <h2 class="brand-text text-info ms-1">Admin Bejelentkezés</h2>

                    <form action="{{ route('adminLoginPost') }}" method="post">
                        @csrf
                        <div class="mb-3">
                            <label class="form-label">Email cím: </label>
                            <input type="email" class="form-control" name="email">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Jelszó: </label>
                            <input type="password" class="form-control" name="password">
                        </div>
                        <button type="submit" class="btn btn-info text text-white">Bejelentkezés</button>
                </div>

                </form>
            </div>
        </div>

    </div>
    </div>
</body>

</html>
