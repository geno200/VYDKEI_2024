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
                    <div class="card-header">
                        <h2 class="brand-text text-info ms-1">Bejelentkezés</h2>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('auth.login') }}">
                            @csrf
                            <div class="mb-3">
                                <label for="email" class="form-label">Email cím:</label>
                                <input type="email" class="form-control" name="email">
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Jelszó:</label>
                                <input type="password" class="form-control" name="password">
                            </div>
                            <button type="submit" class="btn btn-info text text-white">Bejelentkezés</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
