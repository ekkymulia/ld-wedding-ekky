
@extends('template/app')

@section('content')
@include('template/nav')
    
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

@endsection