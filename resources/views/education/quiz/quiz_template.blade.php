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
    <div>
        <div class="card">
            <div class="card-body">
                <form id="quizForm">
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped">
                            <tbody>
                                @foreach ($data as $row)
                                    <tr>
                                        <td>{{ $row[1] }}</td>
                                        <td>
                                            @if ($row[2] === 'igaz-hamis')
                                                <label><input type="radio" name="{{ $row[0] }}" value="Igaz">
                                                    Igaz</label>
                                                <label><input type="radio" name="{{ $row[0] }}" value="Hamis">
                                                    Hamis</label>
                                            @elseif ($row[2] === 'szövegkitöltős')
                                                <input type="text" name="{{ $row[0] }}"
                                                    placeholder="Írd ide a válaszod!">
                                            @elseif ($row[2] === 'képes')
                                                <img src="{{ $row[3] }}" width="300"><br><br> <input
                                                    type="text" name="{{ $row[0] }}"
                                                    placeholder="Írd ide a válaszod!">
                                            @elseif ($row[2] === 'választásos')
                                                <select name="{{ $row[0] }}">
                                                    @foreach (explode(', ', $row[3]) as $option)
                                                        <option name="{{ $option }}">{{ $option }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            @elseif ($row[2] === 'jelölős')
                                                @foreach (explode(', ', $row[3]) as $option)
                                                    <input type="radio" name="{{ $row[0] }}"
                                                        value="{{ $option }}" />
                                                    <label>{{ $option }}</label><br>
                                                @endforeach
                                            @endif
                                        </td>
                                        <input type="hidden" name="solution" value="{{ $row[4] }}">
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <button type="button" onclick="Quiz()" class="btn btn-success">Küldés</button>
                </form>
            </div>
        </div>
        <div class="card">
            <div class="card-body">
                <div id="EredmenyMutat"></div>
            </div>
        </div>
        <br>
        <button type="button" onclick="Kezdes()" class="btn btn-dark">Indul<p id="countdown"></p></button>
        <script src="js/timer.js"></script>
    </div>

</body>

</html>
