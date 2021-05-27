<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Web Designer</title>

    <!-- CSS Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <!-- CSS local -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

</head>
<body>
    <nav class="navbar navbar-kc-class">
        <div class="container">
            <a class="navbar-brand " href="/">
                <img src="{{ asset('Logos/PNG/The_KC_Classroom_Logo_landscape _white-04.png') }}" class="logo-kc-class" >
            </a>
        </div>
    </nav>
    <div class="banner-kc">
    </div>
    <div class="register-kc py-2 row">
        <div class="col-md-8 text-center">
                Would you like to host the KC Classroom at your school?
        </div>
        <div class="col-md-4 text-center">
            <botton class="button-kc-green btn">Regester Your Interest</botton>
        </div>
    </div>
    <div class="mission-kc">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h1 class="title-kc title-kc-green">
                        Our Mission
                    </h1>
                    <ul class="no_bullet">
                        <li class="img-kc-1">To shape a healthier future for everyone</li>
                        <li class="img-kc-1">To build a community of aspirational future ready learners, who are motivated to explore, create, and innovate.</li>
                        <li class="img-kc-1">To provide a creative and inspirational virtual curriculum available ON DEMAND in the classroom and for home learning.</li>
                        <li class="img-kc-1">To connect students to inspirational experts and young entrepreneurial role models via our weekly broadcasts.</li>

                    </ul>
                </div>
                <div class="col-md-6">
                    <div class="imag-00">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="text-imag">
        <div class="container">
            <div class="row align-items-center font-relaway-m text-center">
                <div class="col-sm-4">
                    <img src="{{ asset('Assets/PNGs/Asset-03.png') }}" class="logo-kc-class" >
                    <h5>Careers & Phse</h5>
                    The KC Classroom can be used in
                    careers programmes to widen
                    aspirations and help Careers Leaders
                    to meet Gatsby benchmark 5.
                    PHSE leaders can also make use of
                    our broadcasts in form time slots.
                    What a great way to start the day!
                </div>
                <div class="col-sm-4">
                    <img src="{{ asset('Assets/PNGs/Asset-04.png') }}" class="logo-kc-class" >
                    <h5>Flexibility</h5>
                    The KC Classroom can be used in
                    careers programmes to widen
                    aspirations and help Careers Leaders
                    to meet Gatsby benchmark 5.
                    PHSE leaders can also make use of
                    our broadcasts in form time slots.
                    What a great way to start the day!
                </div>
                <div class="col-sm-4">
                    <img src="{{ asset('Assets/PNGs/Asset-05.png') }}" class="logo-kc-class" >

                    <h5>The KC CLassroom Club</h5>
                    The KC Classroom can be used in
                    careers programmes to widen
                    aspirations and help Careers Leaders
                    to meet Gatsby benchmark 5.
                    PHSE leaders can also make use of
                    our broadcasts in form time slots.
                    What a great way to start the day!
                </div>
            </div>
        </div>
    </div>



<!-- JS Bootstrap -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>
