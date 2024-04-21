@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        @if ($errors->any())
            <div class="col-12">
                @foreach ($errors->all() as $error)
                    <div class="alert alert-danger">{{ $error }}</div>
                @endforeach
            </div>
        @endif
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header"><h2 class="brand-text text-info ms-1">Regisztráció</h2></div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('auth.reg') }}">
                            @csrf
                            <div class="mb-3">
                                <label class="form-label">Teljes név: </label>
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
                            <div class="mb-3">
                                <label class="form-label">Felhasználó típusa: </label>
                                <select class="form-control" name="usertype">
                                    <option value="student">Diák</option>
                                    <option value="teacher">Tanár</option>
                                </select>
                            </div>
                            <button type="submit" class="btn btn-info text text-white">Regisztráció</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
