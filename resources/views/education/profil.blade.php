@extends('education.edulayouts.eduapp')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3">
                @include('education.eduinc.sidebar')
            </div>
            <div class="col-md-9">
                @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @elseif (session('error'))
                    <div class="alert alert-danger">
                        {{ session('error') }}
                    </div>
                @endif
                <div class="card">
                    <div class="card-header">Profil kezelése</div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('education.profil.update') }}"
                            onsubmit="return confirm('Biztosan módosítani akarod az adataid?')">
                            @csrf

                            @method('PUT')
                            <div class="form-group">
                                <label for="name">Név:</label>
                                <input type="text" name="name" class="form-control" value="{{ $user->name }}">
                            </div>
                            <div class="form-group">
                                <label for="email">Email:</label>
                                <input type="email" name="email" class="form-control" value="{{ $user->email }}">
                            </div>
                            <button style="margin: 5px" type="submit" class="btn btn-success">Mentés</button>
                        </form>
                    </div>
                    <div class="card-footer">
                        <div class="d-flex justify-conten-right">

                            <form method="POST" action="{{ route('education.profil.delete') }}"
                                onsubmit="return confirm('Biztosan törölni szeretnéd a profilt?')">
                                @csrf
                                @method('DELETE')
                                <button style="margin: 5px" type="submit" class="btn btn-danger">Törlés</button>
                            </form>
                            <form method="POST" action="{{ route('logout') }}"
                            onsubmit="return confirm('Biztosan ki szeretnél jelentkezni?')">
                                @csrf
                                <button style="margin: 5px" type="submit" class="btn btn-secondary">Kijelentkezés</button>
                            </form>
                        </div>
                    </div>
                </div>
                <br>
                <div class="card">
                    <div class="card-header">Jelszó megváltoztatása</div>
                    <form method="POST" action="{{ route('education.profil.updatePassword') }}"
                        onsubmit="return confirm('Biztosan módosítani akarod az adataid?')">
                        @csrf
                        <div class="card-body">
                            <div class="mb-3">
                                <label for="actual" class="form-label">Jelenlegi jelszó:</label>
                                <input name="actual" type="password" class="form-control"
                                    placeholder="Kérlek add meg a jelenlegi jelszavad!">
                                @error('actual')
                                    <span class="text-danger">Hiányos mező</span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="new" class="form-label">Új jelszó:</label>
                                <input name="new" type="password" class="form-control"
                                    placeholder="Kérlek add meg az új jelszót!">
                                @error('new')
                                    <span class="text-danger">Hiányos mező</span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="new_confirmation" class="form-label">Jelszó ismét:</label>
                                <input name="new_confirmation" type="password" class="form-control"
                                    placeholder="Kérlek add meg az új jelszót ismét!">
                            </div>
                        </div>
                        <div class="card-footer">
                            <button type="submit" style="margin: 5px" class="btn btn-success">Mentés</button>
                        </div>
                    </form>
                </div>
                <br>
                <div class="card">
                    <div class="card-header">
                        Üzenet küldése tanárnak</div>

                    <form action="{{ route('teacher.send') }}" method="post">
                        @csrf
                        <div class="card-body">
                            <div class="form-group">
                                <label>Tanár email címek:</label>
                                <select class="form-control" id="teacher" name="teacher_email">
                                    @foreach ($teachers as $teacher)
                                        <option value="{{ $teacher->email }}">{{ $teacher->name }} - {{ $teacher->email }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="teachername">Oktató neve</label>
                                <input type="text" name="teachername" class="form-control" />
                            </div>
                            <div class="form-group">
                                <label for="question">Kérdés</label>
                                <input type="text" name="question" class="form-control" />
                            </div>
                            <div class="form-group">
                                <label for="description">Leírás:</label>
                                <textarea name="description" class="form-control"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="name">Saját név:</label>
                                <input type="text" name="name" class="form-control" />
                            </div>
                        </div>
                        <div class="card-footer">
                            <button type="submit" style="margin: 5px" class="btn btn-primary">Küldés</button>
                        </div>
                </div>
                </form>
            </div>
        </div>
    </div>
    </div>
@endsection
