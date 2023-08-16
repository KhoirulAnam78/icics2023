@extends('layouts.main')

@section('content')
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" style="margin-top:100px">
        <ol class="carousel-indicators mb-3">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <!-- Hero Section Begin -->
                <section class="hero-section set-bg" data-setbg="{{ url('') }}/assets/img/home-gentala.jpg">
                    <div class="container" style="padding-top:50px; padding-bottom:50px">
                        <div class="row">
                            <div class="col-lg-7">
                                <h3 class="primary-btn mb-3" style="font-size:20px">
                                    14-16
                                    November 2023, Swissbell-Hotel, Jambi
                                </h3>
                                <h3 style="color: white; font-size: 40px">Strengthening the Role of Chemistry as Basic
                                    Science in Supporting the
                                    Downstreaming of Agro-Industrial Products</h3>
                                <br>
                                <a href="/register" class="primary-btn mb-3">Buy Ticket</a>

                            </div>
                            <div class="col-lg-5">
                                <h3 class="primary-btn mb-3" style="font-size:20px">Opening Speech</h3>
                                <div class="row">
                                    <div class="col-5"><img src="{{ url('') }}/assets/img/opening-1.png"
                                            alt="">
                                    </div>
                                    <div class="col-7" style="padding-top: 12%">
                                        <h5 style="color: white"> Prof. Drs. Sutrisno, Ph.D
                                            <span>Rector of Jambi University</span>
                                        </h5>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-5"><img src="{{ url('') }}/assets/img/opening-2.png"
                                            alt="">
                                    </div>
                                    <div class="col-7" style="padding-top: 12%">
                                        <h5 style="color: white"> Dr. Sukro Muhab, M.Si
                                            <span>President of HKI</span>
                                        </h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Hero Section End -->

            </div>
            <div class="carousel-item">
                <!-- Hero Section Begin -->
                <section class="hero-section set-bg" data-setbg="{{ url('') }}/assets/img/home-gentala.jpg">
                    <div class="container" style="padding-top:50px; padding-bottom:50px">
                        <div class="row">
                            <div class="col-lg-7">
                                <h3 class="primary-btn mb-3" style="font-size:20px">
                                    14-16
                                    November 2023, Swissbell-Hotel, Jambi
                                </h3>
                                <h3 style="color: white; font-size: 40px">Strengthening the Role of Chemistry as Basic
                                    Science in Supporting the
                                    Downstreaming of Agro-Industrial Products</h3>
                                <br>
                                <a href="/register" class="primary-btn mb-3">Buy Ticket</a>

                            </div>
                            <div class="col-lg-5">
                                <h3 class="primary-btn mb-3" style="font-size:20px">Opening Speech</h3>
                                <div class="row">
                                    <div class="col-5"><img src="{{ url('') }}/assets/img/opening-1.png"
                                            alt="">
                                    </div>
                                    <div class="col-7" style="padding-top: 12%">
                                        <h5 style="color: white"> Prof. Drs. Sutrisno, Ph.D
                                            <span>Rector of Jambi University</span>
                                        </h5>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-5"><img src="{{ url('') }}/assets/img/opening-2.png"
                                            alt="">
                                    </div>
                                    <div class="col-7" style="padding-top: 12%">
                                        <h5 style="color: white"> Dr. Sukro Muhab, M.Si
                                            <span>President of HKI</span>
                                        </h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Hero Section End -->
            </div>
            <div class="carousel-item">
                <!-- Hero Section Begin -->
                <section class="hero-section set-bg" data-setbg="{{ url('') }}/assets/img/home-gentala.jpg">
                    <div class="container" style="padding-top:50px; padding-bottom:50px">
                        <div class="row">
                            <div class="col-lg-7">
                                <h3 class="primary-btn mb-3" style="font-size:20px">
                                    14-16
                                    November 2023, Swissbell-Hotel, Jambi
                                </h3>
                                <h3 style="color: white; font-size: 40px">Strengthening the Role of Chemistry as Basic
                                    Science in Supporting the
                                    Downstreaming of Agro-Industrial Products</h3>
                                <br>
                                <a href="/register" class="primary-btn mb-3">Buy Ticket</a>

                            </div>
                            <div class="col-lg-5">
                                <h3 class="primary-btn mb-3" style="font-size:20px">Opening Speech</h3>
                                <div class="row">
                                    <div class="col-5"><img src="{{ url('') }}/assets/img/opening-1.png"
                                            alt="">
                                    </div>
                                    <div class="col-7" style="padding-top: 12%">
                                        <h5 style="color: white"> Prof. Drs. Sutrisno, Ph.D
                                            <span>Rector of Jambi University</span>
                                        </h5>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-5"><img src="{{ url('') }}/assets/img/opening-2.png"
                                            alt="">
                                    </div>
                                    <div class="col-7" style="padding-top: 12%">
                                        <h5 style="color: white"> Dr. Sukro Muhab, M.Si
                                            <span>President of HKI</span>
                                        </h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Hero Section End -->
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    <!-- Counter Section Begin -->
    <section class="counter-section bg-gradient">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="counter-text">
                        <span>Conference Date</span>
                        <h3>Count Every Second <br />Until the Event</h3>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="cd-timer" id="demo">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Counter Section End -->

    <!-- Home About Section Begin -->
    <section class="home-about-section" style="padding-bottom: 2%">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="ha-text">
                        <h2>ICICS Scopes</h2>
                        <p>
                            Your valuable work and ideas in all brances of chemistry, such as mining, geochemistry,
                            isolation prediction, Artificial Intelegences in Chemistry, Chemical Synthesis, Chemical
                            Education, Instrumental Chemistry, Applied Chemistry, Material and Environtmental Chemistry.
                        </p>
                        <p>All the topics related to Energy, Food, Materials, Environtment, Life, Industry, and Health.</p>
                        {{-- <ul>
                            <li><span class="icon_check"></span> Organic and Bio Chemistry</li>
                            <li><span class="icon_check"></span> Analytical and Enviromental Chemistry</li>
                            <li><span class="icon_check"></span> Inorganic and Material Chemistry</li>
                            <li><span class="icon_check"></span> Physical and Computation Chemistry</li>
                            <li><span class="icon_check"></span> Chemical Education</li>
                        </ul> --}}
                        {{-- <a href="#" class="ha-btn">Discover Now</a> --}}
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="ha-text">
                        <img src="{{ url('') }}/assets/img/logo-fix.png" alt="">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="ha-text">
                        <h3 style="font-weight: 600;padding-bottom:2%">Implementation</h3>
                        <ul>
                            <li><span class="icon_check"></span> Offline at Swissbell-Hotel, Jambi</li>
                            <li><span class="icon_check"></span> Online Zoom:</li>
                        </ul>
                        <ul>
                            <li>Meeting ID: 284 802 1895
                            </li>
                            <li>Passcode: icics2023</li>
                        </ul>
                        <a href="https://zoom.us/join" class="primary-btn mb-3"> Open Zoom</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Home About Section End -->

    <!-- Team Member Section Begin -->
    <section class="team-member-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>FGD Speaker</h2>
                        {{-- <p>These are our communicators, you can see each person information</p> --}}
                    </div>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="member-item set-bg" style="margin: 10px; border: 3px solid black"
                data-setbg="{{ url('') }}/assets/img/team-member/fgd-1.jpg">
                {{-- <div class="mi-social">
                    <div class="mi-social-inner bg-gradient">
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-instagram"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-linkedin"></i></a>
                    </div>
                </div> --}}
                <div class="mi-text">
                    <h5>Prof. Drs. Roto, M.Eng, Ph.D</h5>
                    <span>Gadjah Mada University</span>
                </div>
            </div>
            <div class="member-item set-bg" style="margin: 10px;border: 3px solid black"
                data-setbg="{{ url('') }}/assets/img/team-member/fgd-2.jpg">
                {{-- <div class="mi-social">
                    <div class="mi-social-inner bg-gradient">
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-instagram"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-linkedin"></i></a>
                    </div>
                </div> --}}
                <div class="mi-text">
                    <h5>Prof. Anang WM Diah, M.Si., Ph.D</h5>
                    <span>Tadulako University</span>
                </div>
            </div>
        </div>
        <br>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>Keynote Speaker</h2>
                        {{-- <p>These are our communicators, you can see each person information</p> --}}
                    </div>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="member-item set-bg" style="margin: 10px;border: 3px solid black"
                data-setbg="{{ url('') }}/assets/img/team-member/keynote-1.png">
                {{-- <div class="mi-social">
                    <div class="mi-social-inner bg-gradient">
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-instagram"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-linkedin"></i></a>
                    </div>
                </div> --}}
                <div class="mi-text">
                    <h5>Prof. Sedat Ballikaya, Ph.D</h5>
                    <span>Istanbul University, Cerrapasha Turkey</span>
                </div>
            </div>
            <div class="member-item set-bg" style="margin: 10px;border: 3px solid black"
                data-setbg="{{ url('') }}/assets/img/team-member/keynote-2.jpg">
                {{-- <div class="mi-social">
                    <div class="mi-social-inner bg-gradient">
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-instagram"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-linkedin"></i></a>
                    </div>
                </div> --}}
                <div class="mi-text">
                    <h5>Prof. Teruna Siahaan, Ph.D</h5>
                    <span>Kansas University</span>
                </div>
            </div>
            <div margin: 20px class="member-item set-bg" style="margin: 10px;border: 3px solid black"
                data-setbg="{{ url('') }}/assets/img/team-member/keynote-3.jpg">
                {{-- <div class="mi-social">
                    <div class="mi-social-inner bg-gradient">
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-instagram"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-linkedin"></i></a>
                    </div>
                </div> --}}
                <div class="mi-text">
                    <h5>Prof. Dr. Ir. Muh. Nurdin, M.Sc., IPU., ASEAN Eng.</h5>
                    <span>Halu Oleo University & Muhammadiyah University of Kendari</span>
                </div>
            </div>
            <div class="member-item set-bg" style="margin: 10px;border: 3px solid black"
                data-setbg="{{ url('') }}/assets/img/team-member/keynote-4.jpg">
                {{-- <div class="mi-social">
                    <div class="mi-social-inner bg-gradient">
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-instagram"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-linkedin"></i></a>
                    </div>
                </div> --}}
                <div class="mi-text">
                    <h5>Dr. Agus Haryono</h5>
                    <span>Indonesian National Research and Innovation Agency</span>
                </div>
            </div>
        </div>
        <br>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>Invited Speaker</h2>
                        {{-- <p>These are our communicators, you can see each person information</p> --}}
                    </div>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="member-item set-bg" style="margin: 10px; border: 3px solid black"
                data-setbg="{{ url('') }}/assets/img/team-member/invited-1.jpg">
                {{-- <div class="mi-social">
                    <div class="mi-social-inner bg-gradient">
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-instagram"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-linkedin"></i></a>
                    </div>
                </div> --}}
                <div class="mi-text">
                    <h5>Prof. Dr. Dyah Iswantini</h5>
                    <span>IPB University</span>
                </div>
            </div>
            <div class="member-item set-bg" style="margin: 10px;border: 3px solid black"
                data-setbg="{{ url('') }}/assets/img/team-member/invited-2.jpg">
                {{-- <div class="mi-social">
                    <div class="mi-social-inner bg-gradient">
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-instagram"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-linkedin"></i></a>
                    </div>
                </div> --}}
                <div class="mi-text">
                    <h5>Nazarudin, S.Si., M.Si., Ph.D</h5>
                    <span>Universitas Jambi</span>
                </div>
            </div>
            <div class="member-item set-bg" style="margin: 10px;border: 3px solid black"
                data-setbg="{{ url('') }}/assets/img/team-member/invited-3.jpg">
                {{-- <div class="mi-social">
                    <div class="mi-social-inner bg-gradient">
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-instagram"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-linkedin"></i></a>
                    </div>
                </div> --}}
                <div class="mi-text">
                    <h5>Prof. Yuli Rahmawati, Ph.D</h5>
                    <span>Jakarta State University</span>
                </div>
            </div>
            <div class="member-item set-bg" style="margin: 10px;border: 3px solid black"
                data-setbg="{{ url('') }}/assets/img/team-member/invited-4.jpg">
                {{-- <div class="mi-social">
                    <div class="mi-social-inner bg-gradient">
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-instagram"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-linkedin"></i></a>
                    </div>
                </div> --}}
                <div class="mi-text">
                    <h5>Prof. Indriana Kartini, Ph.D</h5>
                    <span>Gadjah Mada University</span>
                </div>
            </div>
        </div>
    </section>
    <!-- Team Member Section End -->

    <!-- Schedule Section Begin -->
    <section class="schedule-section mb-5 mt-5" style="background-color: wheat; padding-top: 3%;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>IMPORTANT DATE</h2>
                        <p>Do not miss anything topic about the event</p>
                    </div>
                </div>
            </div>
            <ul class="list-group">
                <li class="list-group-item d-flex justify-content-between align-items-center"
                    style="font-size: 115%; font-weight: 700">
                    Abstract Submission Deadline
                    <span style="font-size: 115%; color: white" class="badge bg-primary rounded-pill">16 September
                        2023</span>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center"
                    style="font-size: 115%;font-weight: 700">
                    Abstract Acceptance Notifications
                    <span style="font-size: 115%; color: white" class="badge bg-primary rounded-pill">20 September
                        2023</span>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center"
                    style="font-size: 115%;font-weight: 700">
                    Full Paper Submission
                    <span style="font-size: 115%; color: white" class="badge bg-primary rounded-pill">30 September
                        2023</span>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center"
                    style="font-size: 115%;font-weight: 700">
                    Conference
                    <span style="font-size: 115%; color: white" class="badge bg-primary rounded-pill">16 November
                        2023</span>
                </li>
            </ul>
        </div>
    </section>
    <!-- Schedule Section End -->

    <!-- Pricing Section Begin -->
    <section class="pricing-section set-bg spad" data-setbg="{{ url('') }}/assets/img/pricing-bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>Ticket Pricing</h2>
                        <p>Get your event ticket plan</p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">

                <div class="col-lg-4 col-md-8">
                    <div class="price-item">
                        <h4>Student Presenter</h4>
                        <div class="pi-price">
                            <ul>
                                <li>
                                    <h3 style="color: white">OFFLINE</h3>
                                </li>
                            </ul>
                        </div>
                        <h4 style="padding-bottom: 10px; color: black;font-weight: 400">550K IDR/37 USD</h4>
                        <div class="pi-price">
                            <ul>
                                <li>
                                    <h3 style="color: white">ONLINE</h3>
                                </li>
                            </ul>
                        </div>
                        <h4 style="color: black;font-weight: 400">150K IDR/10 USD</h4>

                    </div>
                </div>
                <div class="col-lg-4 col-md-8">
                    <div class="price-item top-rated">
                        <div class="tr-tag">
                            <i class="fa fa-star"></i>
                        </div>
                        <h4 style="padding-top: 20px">Profesional Presenter</h4>
                        <div class="pi-price">
                            <ul>
                                <li>
                                    <h3 style="color: white">OFFLINE</h3>
                                </li>
                            </ul>
                        </div>
                        <h4 style="padding-bottom: 10px; color: black;font-weight: 400">750K IDR/50 USD</h4>
                        <div class="pi-price">
                            <ul>
                                <li>
                                    <h3 style="color: white">ONLINE</h3>
                                </li>
                            </ul>
                        </div>
                        <h4 style="color: black;font-weight: 400">250K IDR/17 USD</h4>

                    </div>
                </div>
                <div class="col-lg-4 col-md-8">
                    <div class="price-item">
                        <h4>Student Participant</h4>
                        <div class="pi-price">
                            <ul>
                                <li>
                                    <h3 style="color: white">OFFLINE</h3>
                                </li>
                            </ul>
                        </div>
                        <h4 style="padding-bottom: 10px; color: black;font-weight: 400">350K IDR/24 USD</h4>
                        <div class="pi-price">
                            <ul>
                                <li>
                                    <h3 style="color: white">ONLINE</h3>
                                </li>
                            </ul>
                        </div>
                        <h4 style="color: black;font-weight: 400">100K IDR/7 USD</h4>

                    </div>
                </div>


            </div>
        </div>
    </section>
    <!-- Contact Section Begin -->
    <section class="contact-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="section-title">
                        <h2>Location</h2>
                        <p>Get directions to our event center</p>
                    </div>
                    <div class="cs-text">
                        <div class="ct-address">
                            <span>Address:</span>
                            <p>Swissbell-Hotel, Jambi <br /> Indonesia</p>
                        </div>
                        <ul>
                            <li>
                                <span>Phone:</span>
                                Indra Lasmana Tarigan, M.Sc. (+6282142265676)<br />
                                Aulia Sanova, M.Pd. (+6285266180861) <br />
                                Dr. Yusnaidar, M.Si. (+628127866961) <br />
                                Restina Bemis, M.Si. (+6285274405887) <br>
                            </li>

                            <li class="mt-3">
                                <span>Email:</span>
                                icics2023@.unja.ac.id
                            </li>
                        </ul>
                        <div class="ct-links">
                            <span>Website:</span>
                            <p>https://icics2023unja.ac.id</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="cs-map">

                        <iframe src="https://maps.google.com/maps?q=swissbell jambi&t=&z=10&ie=UTF8&iwloc=&output=embed"
                            height="400" style="border:0;" allowfullscreen=""></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact Section End -->
@endsection

@section('script')
    <script>
        // Set the date we're counting down to
        var countDownDate = new Date("Nov 16, 2023 10:00:00").getTime();

        // Update the count down every 1 second
        var x = setInterval(function() {

            // Get today's date and time
            var now = new Date().getTime();

            // Find the distance between now and the count down date
            var distance = countDownDate - now;

            // Time calculations for days, hours, minutes and seconds
            var days = Math.floor(distance / (1000 * 60 * 60 * 24));
            var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
            var seconds = Math.floor((distance % (1000 * 60)) / 1000);

            // Display the result in the element with id="demo"
            document.getElementById("demo").innerHTML =
                '<div class="cd-item"><span>' + days + '</span><p>Days</p></div>' + '<div class="cd-item"><span>' +
                hours + '</span><p>Hour</p></div>' + '<div class="cd-item"><span>' +
                minutes + '</span><p>Minutes</p></div>' + '<div class="cd-item"><span>' + seconds +
                '</span><p>Seconds</p></div>';


            // days + "d " + hours + "h " +
            // minutes + "m " + seconds + "s "

            // If the count down is finished, write some text
            if (distance < 0) {
                clearInterval(x);
                document.getElementById("demo").innerHTML = "EXPIRED";
            }
        }, 1000);
    </script>
@endsection
