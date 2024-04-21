@extends('layouts.app')

@section('content')
    <div style="text-align: center;">
        <h1>Vegye fel velünk a kapcsolatot és értékeljen minket!</h1>
        @if (Auth::check())
            <div class="ratings-wrapper">
                <div class="ratings">
                    <span data-rating="5">&#9733;</span>
                    <span data-rating="4">&#9733;</span>
                    <span data-rating="3">&#9733;</span>
                    <span data-rating="2">&#9733;</span>
                    <span data-rating="1">&#9733;</span>
                </div>
            </div>
        @else
            <div class="alert alert-warning">
                Csak regisztrált felhsználók értékelhetnek!
            </div>
                <div class="ratings-wrapper">
                    <div class="ratings">
                        <span data-rating="5">&#9733;</span>
                        <span data-rating="4">&#9733;</span>
                        <span data-rating="3">&#9733;</span>
                        <span data-rating="2">&#9733;</span>
                        <span data-rating="1">&#9733;</span>
                    </div>
                </div>
        @endif
    </div>
    </div>

    <div style="margin: 10px auto; max-width: 600px;">
        <div class="form-group">
            <label for="message">Hozzászólás</label>
            <textarea id="editor" class="form-control" id="message" name="message"></textarea>
        </div>

        <div class="map-container" style="margin-top: 20px; border-top: 1px solid #000; ">
            <label for="message">Székhely:</label><br><br>
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2695.6708949003037!2d19.067038175938325!3d47.49632429558665!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4741dc6767b07d9b%3A0x7be2e24544320049!2sBudapest%2C%20Blaha%20Lujza%20t%C3%A9r%2C%201085!5e0!3m2!1shu!2shu!4v1698614037234!5m2!1shu!2shu"
                width="100%" height="300" style="border:1px;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>

        <div style="margin-top: 5px;">
            <p><i class="fas fa-phone"></i> Tel.:</p>
            <p>+36 1 234 5678</p>
        </div>

        <h1>Ha kérdése van írjon nekünk üzenetet!</h1>

        <form method="POST" action="{{ route('contact.send') }}" enctype="multipart/form-data">
            @csrf
            @if (Session::has('message_sent'))
                <div class="alert alert-success" role="alert">
                    {{ Session::get('message_sent') }}
                </div>
            @endif
            <div class="form-group">
                <label for="name">Név</label>
                <input type="text" name="name" class="form-control" />
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="text" name="email" class="form-control" />
            </div>
            <div class="form-group">
                <label for="msg">Üzenet</label>
                <textarea name="msg" class="form-control"></textarea>
            </div>
            <div>
                <button type="submit" class="btn btn-primary float-right">Küldés</button>
            </div>
        </form>

        <script>
            document.addEventListener('DOMContentLoaded', function() {
                let csillagok = document.querySelectorAll('.ratings span');

                for (let csillag of csillagok) {
                    csillag.addEventListener("click", function() {
                        this.setAttribute("data-clicked", "true");
                    });
                }
            });
        </script>
    @endsection
