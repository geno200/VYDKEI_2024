<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('fs/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">
    <title>Admin Szerkesztő</title>
</head>

<body>
    <div class="container">
        <div class="row justify-content-center align-items-center">
            <div class="col-md-12 justify-content-center align-items-center ">
                <h1 class="text-center">Felhasználók kezelése</h1>
                <table class="table table-striped table-bordered table-responsive table-dark">
                    <thead class="thead">
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Név</th>
                            <th scope="col">Email</th>
                            <th scope="col">Létrehozva</th>
                            <th scope="col">Módosítva</th>
                            <th scope="col">Típus</th>
                            <th scope="col">Törlés</th>
                            <th scope="col">Módosít</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if ($users->isNotEmpty())
                            @foreach ($users as $user)
                                <tr>
                                    <th scope="row">{{ $user->id }}</th>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>{{ $user->created_at }}</td>
                                    <td>{{ $user->updated_at }}</td>
                                    <td>{{ $user->usertype }}</td>
                                    <td>
                                        <form action="{{ route('adminDeleteUser', $user->id) }}" method="POST"
                                            onsubmit="return confirm('Biztosan törölni szeretnéd ezt a felhasználót?')">
                                            @csrf
                                            @method('DELETE')
                                            <div class="form-group d-flex justify-content-center align-items-center" >
                                            <button type="submit" class="btn btn-danger">Törlés</button>
                                            </div>
                                        </form>
                                    </td>
                                    <td>
                                        <form method="POST" action="{{ route('AdminChangeUsertype', $user->id) }}"
                                            onsubmit="return confirm('Biztosan módosítani akarod az adataid?')">
                                            @csrf
                                            @method('PUT')
                                            <div class="form-group d-flex justify-content-center align-items-center ml-3">

                                                    <input  type="text" name="usertype" class="form-control"
                                                        value="{{ $user->usertype }}" placeholder="Típus">

                                                <div >
                                                    <button type="submit" class="btn btn-warning">Mentés</button>
                                                </div>
                                            </div>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>

</html>
