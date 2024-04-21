<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('fs/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">
    <script src="{{ asset('bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <title>Admin Regisztráció</title>
</head>
<body>
    <div class="container mt-5">
        @if ($errors->any())
            <div class="col-8">
                @foreach ($errors->all() as $error)
                    <div class="alert alert-danger">{{ $error }}</div>
                @endforeach
            </div>
        @endif
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header"> <h2 class="brand-text text-info ms-1">Admin Regisztráció</h2></div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('adminRegisterPost') }}">
                            @csrf
                            <div class="mb-3">
                                <label class="form-label">Felhasználó név: </label>
                                <input type="text" class="form-control" name="name">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Email cím: </label>
                                <input type="email" class="form-control" name="email">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Jelszó: </label>
                                <input type="password" class="form-control" name="password">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Jelszó megerősítése: </label>
                                <input type="password" class="form-control" name="password_confirmation">
                            </div>
                            <button type="submit" class="btn btn-info">Regisztráció</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
