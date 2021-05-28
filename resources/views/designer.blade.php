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
                <img src="{{ asset('logos/png/the_kc_classroom_logo_landscape _white-04.png') }}" class="logo-kc-class" >
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
                <div class="col-md-6 text-mission-kc">
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
                <div class="col-md-6 imag-00-kc">
                    <div class="imag-00">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="classroom-kc">
        <div class="container">
            <div class="div row">
                <div class="col-md-7">
                    <h1 class="title-kc title-kc-purple">
                        What is the KC Classroom?
                    </h1>
                    <div class="text-classroom-kc">
                        The KC Classroom is an online enrichment experience that focuses on health,
                        wellbeing, and education to inspire an awesome career in the food industry. We host 6
                        missions every year exploring real world projects and learners can journey through
                        each mission by participating in weekly broadcasts with young role models,
                        businesses and innovators and choose from 18 different challenges to complete as
                        scientists, engineers, artists, digital makers, creatives, and entrepreneurs.
                    </div>
                </div>
                <div class="col-md-5 img-classroom-kc">
                    <img src="{{ asset('logos/png/the_kc_classroom_logo-04_edit.png') }}" class="logo-kc-classroom" >
                </div>
            </div>
        </div>
    </div>

    <div class="text-curriculum-kc">
        <div class="container">
            <div class="title-kc title-kc-gold">
                A flecible curriculum
            </div>
            <div class="row align-items-center font-relaway-m text-center">
                <div class="col-sm-4">
                    <img src="{{ asset('assets/pngs/asset-03.png') }}" class="logo-kc-class" >
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
                    <img src="{{ asset('assets/pngs/asset-04.png') }}" class="logo-kc-class" >
                    <h5>Flexibility</h5>
                    The KC Classroom can be used in a variety
                    of ways to include in the classroom, as an
                    enrichment programme and home
                    learning. Due to the current restrictions in
                    delivering practical lessons you can inspire
                    your students with real world projects to
                    inspires young people to realise their
                    potential beyond education and empower
                    a generation to live and work well.
                    We also have created printable challenge
                    workbooks for schools that are teaching
                    whole year groups at the same time and
                    with limited access to ICT.
                </div>
                <div class="col-sm-4">
                    <img src="{{ asset('assets/pngs/asset-05.png') }}" class="logo-kc-class" >

                    <h5>The KC CLassroom Club</h5>
                    Start your own KC Classroom club
                    with a targeted group of students.
                    Get stuck into our project-based
                    challenges and help them to build a
                    portfolio of #futureready skills,
                    projects, and experiences.
                    As our resources are available on
                    demand you can host your club at
                    any time of the day or even virtually.
                </div>
            </div>
        </div>
    </div>



<!-- JS Bootstrap -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>
