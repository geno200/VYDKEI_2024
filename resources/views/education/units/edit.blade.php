<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('fs/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">
    <script src="{{ asset('bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <link rel="stylesheet" href="{{ asset('css/navbar.css') }}">
    <title>{{ $file }}</title>
</head>
<body>
    <form method="POST" action="{{ route('edit.update') }}">
        @csrf
        <div class="container">
            <div class="row">
                <h1>{{ $file }}</h1>
                @foreach ($data as $row)
                    <div class="col-md-4 mb-3">
                        <textarea name="csv_data[]" class="form-control" rows="5">{{$row[0]}}</textarea>
                    </div>
                @endforeach
                @for ($i = count($data); $i < 9; $i++)
                    <div class="col-md-4 mb-3">
                        <textarea name="csv_data[]" class="form-control" rows="5"></textarea>
                    </div>
                @endfor
            </div>
        </div>
        <div class="text-center">
            <input type="hidden" name="file" value="{{ $file }}">
            <button type="submit" class="btn btn-primary">Mentés</button>
        </div>
    </form>

</body>
</html>
