<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('fs/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">
    <script src="{{ asset('bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <link rel="stylesheet" href="{{ asset('css/navbar.css') }}">
    <title>{{ $quiz_file }}</title>
</head>
<body>
    <form method="POST">
        @csrf
        <div class="container">
            <h1>{{ $quiz_file }}</h1>
            <table class="table table-dark table-responsive">
                <thead>
                    <tr>
                        <th scope="col">Azonosító</th>
                        <th scope="col">Kérdés</th>
                        <th scope="col">Típus</th>
                        <th scope="col">Válaszok</th>
                        <th scope="col">Megoldás</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $row)
                        <tr>
                            <th scope="row"> <textarea class="form-control" rows="1">{{$row[0]}}</textarea></th>
                            <td><textarea class="form-control" rows="2">{{$row[1]}}</textarea></td>
                            <td>
                                <select class="form-control">
                                <option selected disabled>{{$row[2]}}</option>
                                <option value="igaz-hamis">Igaz-Hamis</option>
                                <option value="képes">Kép leírás</option>
                                <option value="választásos">Választásos</option>
                                <option value="jelölős">Jelölős</option>
                                <option value="szövegkitöltős">Kitöltésées</option>
                            </select></td>
                            <td><textarea class="form-control" rows="2">{{$row[3]}}</textarea></td>
                            <td><textarea class="form-control" rows="1">{{$row[4]}}</textarea></td>
                        </tr>
                    @endforeach
                    @for ($i = count($data); $i < 9; $i++)
                        <tr>
                            <th scope="row"> <textarea class="form-control" rows="1"></textarea></th>
                            <td><textarea class="form-control" rows="2"></textarea></td>
                            <td><select class="form-control">
                                <option value="igaz-hamis">Igaz-Hamis</option>
                                <option value="képes">Kép leírás</option>
                                <option value="választásos">Választásos</option>
                                <option value="jelölős">Jelölős</option>
                                <option value="szövegkitöltős">Kitöltésées</option>
                            </select></td>
                            <td><textarea class="form-control" rows="2"></textarea></td>
                            <td><textarea class="form-control" rows="1"></textarea></td>
                        </tr>
                    @endfor
                </tbody>
            </table>
        </div>
        <div class="text-center">
            <input type="hidden" name="file" value="{{ $quiz_file }}">
            <button type="submit" class="btn btn-primary">Mentés</button>
        </div>
    </form>

</body>
</html>
