@extends('education.edulayouts.eduapp')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-2 col-md-3 col-sm-12">
                @include('education.eduinc.sidebar')
            </div>
            <div class="col-lg-10 col-md-9 col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <h2 class="card-title">Bevezetés</h2>
                        <table class="table table-bordered table-striped">
                            <tbody>
                                @foreach ($data as $row)
                                    <tr>
                                        <td>{{ $row[0] }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>

                    </div>
                </div>
                <div class="card">
                    <form id="quizForm">
                        <div class="card-body">
                            <h2 class="card-title">Quiz</h2>
                            <table class="table table-bordered table-striped">
                                <tbody>
                                    @foreach ($quiz_data as $quiz_row)
                                        <tr>
                                            <td>{{ $quiz_row[0] }}</td>
                                            <td>
                                                @if ($quiz_row[1] === 'jelölős')
                                                    <div >
                                                        @foreach (explode(', ', $quiz_row[2]) as $option)
                                                            <input type="radio" name="{{ $quiz_row[0] }}"
                                                                value="{{ $option }}" />
                                                            <label>{{ $option }}</label><br>
                                                        @endforeach
                                                    </div>
                                                @endif
                                            </td>
                                            <input type="hidden" name="solution" value="{{ $quiz_row[3] }}">
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <button type="button" onclick="Quiz()" class="btn btn-success">Küldés</button>
                    </form>
                </div>

            </div>
            <div class="card">
                <div class="card-body">
                    <div id="EredmenyMutat"></div>
                </div>
            </div>
        </div>
    </div>
@endsection
