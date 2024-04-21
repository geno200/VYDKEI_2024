@extends('education.edulayouts.eduapp')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-3 col-md-4 col-sm-4">
                @include('education.eduinc.sidebar')
            </div>
            <div class="col-lg-8 col-md-7 col-sm-8">
                <h1>2. Fejezet teszt</h1>
                <div>
                    @include('education.quiz.quiz_template')
                </div>
            </div>
        </div>
    </div>
@endsection
