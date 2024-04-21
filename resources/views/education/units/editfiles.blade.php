<!DOCTYPE html>
<html lang="hu">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Elérhető CSV Fájlok</title>
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">
    <script src="{{ asset('bootstrap/js/bootstrap.bundle.min.js') }}"></script>
</head>

<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-6">
                <h1 class="text-center">Tananyag fájlok</h1>
                <form method="post" action="{{ route('edit.show') }}" class="text-center mt-4">
                    @csrf
                    <div class="form-group">
                        <select name="file" class="form-control">
                            @foreach ($files as $file)
                                <option value="{{ $file }}">{{ $file }}</option>
                            @endforeach
                        </select>
                    </div>
                    <br></br>
                    <button type="submit" class="btn btn-primary">Tananyag szerkesztése</button>
                </form>
            </div>
            <div class="col-md-6">
                <h1 class="text-center">Kvíz fájlok</h1>
                <form method="post" action="{{ route('quizedit.show') }}" class="text-center mt-4">
                    @csrf
                    <div class="form-group">
                        <select name="quiz_file"  class="form-control">
                            @foreach ($quiz_files as $quiz_file)
                                <option value="{{ $quiz_file }}">{{ $quiz_file }}</option>
                            @endforeach
                        </select>
                    </div>
                    <br></br>
                    <button type="submit" class="btn btn-primary">Kvíz szerkesztése</button>
                </form>
            </div>
        </div>
    </div>
</body>

</html>
