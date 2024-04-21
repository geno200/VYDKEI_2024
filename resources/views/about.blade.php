@extends('layouts.app')

@section('content')
    <style>
        .aboutus {
            text-align: center;
            font-size: 18px;
            margin-top: 10px;
            margin-bottom: 10px;
        }

        .content-text {
            max-width: 600px;
            text-align: left;
        }

        .image-container {
            display: flex;
            justify-content: flex-end;
            margin-top: 10px;
            margin-bottom: 10px;
        }

        .image {
            width: 450px;
            height: 275px;
            overflow: hidden;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0.2, 0, 0.2);
        }

        .image img {
            width: 100%;
            height: 100%;

        }


    </style>


    <div class="aboutus">
        <h1>Rólunk</h1>
        <p></p>

        <div class="container">
            <div class="row">

                <div class="col">
                    <div class="content-text">
                        <p>Az oktatási vállalatunk 2010-ben alakult azzal a céllal, hogy minőségi oktatást nyújtson, amely
                            alkalmazkodik minden tanuló igényeihez. Hiszünk abban, hogy olyan tanulási környezetet kell
                            teremteni, ahol a diákok kiteljesedhetnek és elérhetik teljes potenciáljukat.</p>

                        <p>Az OOP Edu Oktatás csapata elkötelezett az kiválóság iránt. Tapasztalt oktatóink és támogató
                            munkatársaink fáradhatatlanul dolgoznak azért, hogy dinamikus tanulási élményt teremtsenek
                            minden diák számára. A személyre szabott oktatásra összpontosítunk, biztosítva, hogy minden diák
                            megkapja a figyelmet és az erőforrásokat a siker érdekében.</p>

                        <p>Az évek során jelentős mérföldköveket értünk el, segítve számos diákot az oktatási céljaik
                            elérésében. Az innovációra és folyamatos fejlesztésre való elkötelezettségünk arra ösztönöz,
                            hogy a lehető legjobb tanulási környezetet nyújtsuk.</p>

                        <p>Értékeljük a visszajelzéseket és folyamatosan törekszünk arra, hogy programjainkat a diákok és
                            családjaik tapasztalatai és javaslatai alapján továbbfejlesszük.</p>

                        <p>Köszönjük, hogy az OOP Edu Oktatás mellett döntött az oktatási utazásán. Alig várjuk, hogy
                            részesei lehessünk a tanulási siker történetének!</p>
                    </div>
                </div>


                <div class="col">
                    <div class="image-container">
                        <div class="image">
                            <img src="kepek\office.png" alt="Iroda">
                        </div>
                    </div>
                    <div class="image-container">
                        <div class="image">
                            <img src="kepek\building.png" alt="Irodaház">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
