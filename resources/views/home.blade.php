@extends('layouts.app')

@section('content')
<section class="jumbotron">
    <div class="container">
        <h1 class="display-4">Objektumorientált Programozás Tanfolyam</h1>
        <p class="lead">Üdvözöljük az Objektumorientált Programozás (OOP) tanfolyamunkon! Iskolánk elkötelezett
            amellett, hogy a legmagasabb szintű oktatást és fejlesztési lehetőségeket nyújtsa a diákoknak a modern
            szoftvertervezés és fejlesztés területén.</p>
        <hr class="my-4">
        <p>Korszerű technológiák, tapasztalt oktatók, egyedi oktatási módszerek és izgalmas projektek várnak rád!</p>
    </div>
    <p class="lead">
        @if(Auth::check())
            <a class="btn btn-light btn-lg" href="/bevezetes" role="button">Lásd a tananyagot!</a>
        @else
            <div class="alert alert-warning">
                Kérlek, jelentkezz be a tananyag megtekintéséhez!
            </div>
            <a class="btn btn-light btn-lg" href="{{ route('auth.login') }}" class="btn btn-primary">Lásd a tananyagot!</a>
        @endif
    </p>
</section>
    <section class="container my-5">
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h2 class="card-title"><i class="fas fa-laptop-code"></i> Korszerű Technológia</h2>
                        <p class="card-text">Tanfolyamunk során a legújabb és legfejlettebb programozási eszközöket és
                            technológiákat használjuk, hogy felkészítsük diákjainkat a valós életbeli projektekre és
                            kihívásokra.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h2 class="card-title"><i class="fas fa-chalkboard-teacher"></i> Magasan Képzett Oktatók</h2>
                        <p class="card-text">Oktatóink tapasztalt szakemberek, akik gazdagítják a tanfolyamot gyakorlati
                            tapasztalatukkal, és segítenek a konkrét problémák megoldásában.

                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h2 class="card-title"><i class="fas fa-graduation-cap"></i> Egyedi Oktatási Módszerek</h2>
                        <p class="card-text">Hiszünk abban, hogy minden diák egyedi tanulási igényekkel rendelkezik. Egyedi
                            oktatási módszereink lehetővé teszik a saját tempójú tanulást és a gyakorlati alkalmazást.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h2 class="card-title"><i class="fas fa-project-diagram"></i> Projektalapú Tanulás</h2>
                        <p class="card-text">Tanfolyamunk középpontjában a projektalapú tanulás áll. Diákjaink izgalmas
                            projekteken dolgoznak, amelyek során alkalmazhatják az OOP alapelveit és tervezési módszereit.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-5">
        <div class="container text-center">
            <h2 class="mb-4">Csatlakozz Hozzánk és Lépj Be a Szoftvertervezés és Fejlesztés Világába!</h2>
            <p class="lead">Ha szeretnél többet megtudni a tanfolyamunkról, látogass el a "Tanfolyamok" szekcióba, vagy
                lépj kapcsolatba velünk a "Kapcsolat" oldalon. Várunk szeretettel minden ambiciózus hallgatót és programozói
                tehetséget!</p>
            <a class="btn btn-success btn-lg" href="\contact" role="button">További Információk</a>
        </div>
    </section>
@endsection
