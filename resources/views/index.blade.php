<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ __("title") }}</title>
        
        <link rel="shortcut icon" href="/image/logo.png" type="image/x-icon">

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Advent+Pro:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link rel="stylesheet" href="/css/app.css">

        <!-- aos -->
        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

        <style>
            body {
                margin: 0;
                padding: 0;
                font-family: 'Advent Pro', sans-serif;
                overflow: hidden;
            }
        </style>
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-light container-xxl min-h-screen position-sticky top-0">
            <div class="container-fluid">
                <a id="logo" class="navbar-brand align-self-start" href="#">
                    <svg width="58" height="88" viewBox="0 0 58 88" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <rect width="58" height="88" fill="black"/>
                    <path d="M11.64 69L11.64 41H17.48L17.48 63.76H26.12V69H11.64ZM36.8563 40.96C38.7763 40.96 40.4296 41.2933 41.8163 41.96C43.2029 42.6267 44.2696 43.6267 45.0163 44.96C45.7896 46.2667 46.1763 47.88 46.1763 49.8L46.1763 60.72C46.1763 62.48 45.8563 63.9867 45.2163 65.24C44.6029 66.4667 43.6563 67.4 42.3763 68.04C41.1229 68.68 39.5496 69 37.6562 69H29.2963L29.2963 40.96H36.8563ZM37.2963 63.76C37.9629 63.76 38.4963 63.68 38.8963 63.52C39.3229 63.36 39.6296 63.1467 39.8163 62.88C40.0296 62.6133 40.1629 62.3067 40.2163 61.96C40.2963 61.6133 40.3363 61.2533 40.3363 60.88V49.44C40.3363 48.72 40.2296 48.1467 40.0163 47.72C39.8296 47.2667 39.5229 46.9333 39.0963 46.72C38.6696 46.48 38.1096 46.36 37.4163 46.36H35.1363L35.1363 63.76H37.2963Z" fill="white"/>
                    </svg>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse pt-2" id="navbarText">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0 px-4 py-2 fs-5 fw-bolder font-monospace">
                    <li class="nav-item">
                    <a class="nav-link" href="#">{{ strtoupper(__("mempelai")) }}</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="#">{{ strtoupper(__("acara")) }}</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="#">{{ strtoupper(__("galeri")) }}</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="#">{{ strtoupper(__("cerita")) }}</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="#">{{ strtoupper(__("rsvp")) }}</a>
                    </li>
                </ul>
                </div>
            </div>
        </nav>
        
        <section id="content-section">
            <div class="container-xxl min-h-screen">
                <div class="d-flex flex-column flex-lg-row">
                    <div class="col-sm-12 col-lg-3 min-h-screen position-relative">
                        <div id="vertical-text-container" class="ps-md-5 ms-md-5 position-md-absolute top-md-25 ps-2 my-5 pb-5">
                        <span id="wedding_date" class="m-0 p-0 d-flex items-justify-center fs-xl-6" style="transform: translate(0, 10px)">{{ strtoupper(__("wedding-date")) }}</span>
                            <h2 id="wedding_invitation" class="m-0 p-0 d-flex items-justify-center fs-lg-6 fs-xl-5 lh-1" style="transform: translate(0, 10px)">{{ strtoupper(__("wedding-invitation")) }}</h2>
                            <h2 id="groom_name" class="m-0 p-0 d-flex items-justify-center lh-1" style="transform: translate(0, 10px)">Levi & Dio</h2>
                        </div>
                    </div>
                    <div class="col-sm-12 col-lg-9 m-0 p-0 pb-sm-5">
                        <img id="groom_image" src="/image/hero-image.png" alt="">
                    </div>
                </div>
            </div>
        </section>

        <section id="opening" data-aos="fade-right" data-aos-duration="3000">
            <div class="container-xxl min-h-screen">
                <div class="d-flex flex-column flex-lg-row">
                    <div class="col-sm-12 col-lg-3 min-h-screen position-relative">
                        <div id="vertical-text-container" class="ps-md-5 ms-md-5 position-md-absolute top-md-25 ps-2 my-5 pb-5">
                            <span id="wedding_date" class="m-0 p-0 d-flex items-justify-center fs-xl-6" style="transform: translate(0, 10px)">{{ strtoupper(__("wedding-date")) }}</span>
                            <h2 id="wedding_invitation" class="m-0 p-0 d-flex items-justify-center fs-lg-6 fs-xl-5 lh-1" style="transform: translate(0, 10px)">{{ strtoupper(__("wedding-invitation")) }}</h2>
                            <h1 id="groom_name" class="m-0 p-0 d-flex items-justify-center lh-1" style="transform: translate(0, 10px)">Levi & Dio</h1>
                        </div>
                    </div>
                    <div class="col-sm-12 col-lg-9 m-0 p-0 pb-sm-5">
                        <img id="groom_image" src="/image/hero-image.png" alt="">
                    </div>
                </div>
            </div>
        </section>

        <div id="card-open-container" class="container-xxl min-h-screen z-index-1 mx-auto">
            <div class="row">
                <div class="container-fluid px-3 d-flex align-items-center">
                    <div id="invitation-dest" class="align-self-baseline text-white">
                        <h3>{{ strtoupper(__("wedding-invitation-to-label")) }}</h3>
                        <h4>Ekky Mulia Lasardi</h4>
                    </div>
                    <div class="ms-auto ">
                    <button id="button-open-invitation" class="btn btn-outline-dark" type="button">
                    {{ strtoupper(__("wedding-open-button")) }}
                    </button>
                    </div>
                </div>
            </div>
        </div>


        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
        <script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
       
        <script>
            AOS.init()

            $(window).on('load', function() {
                $('html, body').scrollTop(0);
            });

            $(document).ready(function() {
                $("#card-open-container").addClass("show-content")
                $("#button-open-invitation").click(function() {
                    window.scrollTo(0, 0);
                    $("#opening").addClass('fade-out');
                    setTimeout(function() {
                        $("#card-open-container").removeClass('show-content');
                        $("#card-open-container").addClass('fade-out');
                    }, 750);
                    setTimeout(function() {
                        $("#content-section").addClass("show-content")
                        $("#content-section").show();
                        $("body").addClass("allow-scroll")
                    }, 1000);
                });
            });     
        </script>
    </body>
</html>
