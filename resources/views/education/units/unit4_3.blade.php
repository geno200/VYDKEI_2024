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
                        <h2 class="card-title">Proxy</h2>
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
            </div>
        </div>
    </div>
@endsection
