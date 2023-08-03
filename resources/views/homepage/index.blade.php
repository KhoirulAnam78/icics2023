@extends('layouts.main')

@section('content')
    <!-- Hero Section Begin -->
    <section class="hero-section set-bg" data-setbg="{{ url('') }}/assets/img/home-gentala.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <div class="hero-text">
                        <span style="font-size: 30px">16 November 2023, Jambi</span>
                        <h3 style="color: white; font-size: 50px">Strengthening the Role of Chemistry as Basic
                            Science in Supporting the
                            Downstreaming of Agro-Industrial Products</h3>
                        <br>
                        <a href="#" class="primary-btn">Buy Ticket</a>
                    </div>
                </div>
                <div class="col-lg-5">
                    <img src="{{ url('') }}/assets/img/hero-right.png" alt="">
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Section End -->

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
                    <div class="cd-timer" id="countdown">
                        <div class="cd-item">
                            <span>40</span>
                            <p>Days</p>
                        </div>
                        <div class="cd-item">
                            <span>18</span>
                            <p>Hours</p>
                        </div>
                        <div class="cd-item">
                            <span>46</span>
                            <p>Minutes</p>
                        </div>
                        <div class="cd-item">
                            <span>32</span>
                            <p>Seconds</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Counter Section End -->

    <!-- Home About Section Begin -->
    <section class="home-about-section spad" style="padding-top:0px">
        <div class="container">
            <div class="col-lg-6">
                <div class="ha-text">
                    <h2>ICICS Scopes</h2>
                    <ul>
                        <li><span class="icon_check"></span> Organic and Bio Chemistry</li>
                        <li><span class="icon_check"></span> Analytical and Enviromental Chemistry</li>
                        <li><span class="icon_check"></span> Inorganic and Material Chemistry</li>
                        <li><span class="icon_check"></span> Physical and Computation Chemistry</li>
                        <li><span class="icon_check"></span> Chemical Education</li>
                    </ul>
                    {{-- <a href="#" class="ha-btn">Discover Now</a> --}}
                </div>
            </div>
            {{-- </div> --}}
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
                <div class="mi-social">
                    <div class="mi-social-inner bg-gradient">
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-instagram"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-linkedin"></i></a>
                    </div>
                </div>
                <div class="mi-text">
                    <h5>Prof. Drs. Roto, M.Eng, Ph.D</h5>
                    <span>Gadjah Mada University</span>
                </div>
            </div>

            <div class="member-item set-bg" style="margin: 10px;border: 3px solid black"
                data-setbg="{{ url('') }}/assets/img/team-member/fgd-2.jpg">
                <div class="mi-social">
                    <div class="mi-social-inner bg-gradient">
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-instagram"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-linkedin"></i></a>
                    </div>
                </div>
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
                data-setbg="{{ url('') }}/assets/img/team-member/keynote-1.jpg">
                <div class="mi-social">
                    <div class="mi-social-inner bg-gradient">
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-instagram"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-linkedin"></i></a>
                    </div>
                </div>
                <div class="mi-text">
                    <h5>Prof. Sedat Ballikaya, Ph.D</h5>
                    <span>Istanbul University, Cerrapasha Turkey</span>
                </div>
            </div>
            <div class="member-item set-bg" style="margin: 10px;border: 3px solid black"
                data-setbg="{{ url('') }}/assets/img/team-member/keynote-2.jpg">
                <div class="mi-social">
                    <div class="mi-social-inner bg-gradient">
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-instagram"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-linkedin"></i></a>
                    </div>
                </div>
                <div class="mi-text">
                    <h5>Prof. Teruna Siahaan, Ph.D</h5>
                    <span>Kansas University</span>
                </div>
            </div>
            <div margin: 20px class="member-item set-bg" style="margin: 10px;border: 3px solid black"
                data-setbg="{{ url('') }}/assets/img/team-member/keynote-3.jpg">
                <div class="mi-social">
                    <div class="mi-social-inner bg-gradient">
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-instagram"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-linkedin"></i></a>
                    </div>
                </div>
                <div class="mi-text">
                    <h5>Prof. Dr. Ir. Muh. Nurdin, M.Sc., IPU., ASEAN Eng.</h5>
                    <span>Halu Oleo University & Muhammadiyah University of Kendari</span>
                </div>
            </div>
            <div class="member-item set-bg" style="margin: 10px;border: 3px solid black"
                data-setbg="{{ url('') }}/assets/img/team-member/keynote-4.jpg">
                <div class="mi-social">
                    <div class="mi-social-inner bg-gradient">
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-instagram"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-linkedin"></i></a>
                    </div>
                </div>
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
                <div class="mi-social">
                    <div class="mi-social-inner bg-gradient">
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-instagram"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-linkedin"></i></a>
                    </div>
                </div>
                <div class="mi-text">
                    <h5>Prof. Dr. Dyah Iswantini</h5>
                    <span>IPB University</span>
                </div>
            </div>
            <div class="member-item set-bg" style="margin: 10px;border: 3px solid black"
                data-setbg="{{ url('') }}/assets/img/team-member/invited-2.jpg">
                <div class="mi-social">
                    <div class="mi-social-inner bg-gradient">
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-instagram"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-linkedin"></i></a>
                    </div>
                </div>
                <div class="mi-text">
                    <h5>Nazarudin, S.Si., M.Si., Ph.D</h5>
                    <span>Universitas Jambi</span>
                </div>
            </div>
            <div class="member-item set-bg" style="margin: 10px;border: 3px solid black"
                data-setbg="{{ url('') }}/assets/img/team-member/invited-3.jpg">
                <div class="mi-social">
                    <div class="mi-social-inner bg-gradient">
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-instagram"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-linkedin"></i></a>
                    </div>
                </div>
                <div class="mi-text">
                    <h5>Prof. Yuli Rahmawati, Ph.D</h5>
                    <span>Jakarta State University</span>
                </div>
            </div>
            <div class="member-item set-bg" style="margin: 10px;border: 3px solid black"
                data-setbg="{{ url('') }}/assets/img/team-member/invited-4.jpg">
                <div class="mi-social">
                    <div class="mi-social-inner bg-gradient">
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-instagram"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-linkedin"></i></a>
                    </div>
                </div>
                <div class="mi-text">
                    <h5>Prof. Indriana Kartini, Ph.D</h5>
                    <span>Gadjah Mada University</span>
                </div>
            </div>
        </div>
    </section>
    <!-- Team Member Section End -->

    <!-- Schedule Section Begin -->
    <section class="schedule-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>IMPORTANT DATE</h2>
                        <p>Do not miss anything topic about the event</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="schedule-tab">
                        <div class="tab-content">
                            <div class="tab-pane active" id="tabs-1" role="tabpanel">
                                <div class="st-content">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-lg-3">
                                                <div class="sc-pic">
                                                    <i style="font-size: 50px;padding-top: 20px" class="fa fa-file-text-o"
                                                        aria-hidden="true"></i>

                                                </div>
                                            </div>
                                            <div class="col-lg-5">
                                                <div class="sc-text">
                                                    <h4>Abstract Submission Deadline</h4>
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <ul class="sc-widget">
                                                    <li style="font-size: 20px"><i style="font-size: 20px"
                                                            class="fa fa-calendar" aria-hidden="true"></i>16 SEPTEMBER
                                                        2023
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="st-content">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-lg-3">
                                                <div class="sc-pic">
                                                    <i style="font-size: 50px;padding-top: 20px"
                                                        class="fa fa-check-square-o" aria-hidden="true"></i>
                                                </div>
                                            </div>
                                            <div class="col-lg-5">
                                                <div class="sc-text">
                                                    <h4>Abstract Acceptance Notifications</h4>
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <ul class="sc-widget">
                                                    <li style="font-size: 20px"><i style="font-size: 20px"
                                                            class="fa fa-calendar" aria-hidden="true"></i>20 SEPTEMBER
                                                        2023
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="st-content">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-lg-3">
                                                <div class="sc-pic">

                                                    <i style="font-size: 50px;padding-top: 20px" class="fa fa-book"
                                                        aria-hidden="true"></i>
                                                </div>
                                            </div>
                                            <div class="col-lg-5">
                                                <div class="sc-text">
                                                    <h4>Full Paper Submission</h4>
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <ul class="sc-widget">
                                                    <li style="font-size: 20px"><i style="font-size: 20px"
                                                            class="fa fa-calendar" aria-hidden="true"></i>30 SEPTEMBER
                                                        2023
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="st-content">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-lg-3">
                                                <div class="sc-pic">
                                                    <i style="font-size: 50px;padding-top: 20px" class="fa fa-globe"
                                                        aria-hidden="true"></i>

                                                </div>
                                            </div>
                                            <div class="col-lg-5">
                                                <div class="sc-text">
                                                    <h4>Conference</h4>
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <ul class="sc-widget">
                                                    <li style="font-size: 20px"><i style="font-size: 20px"
                                                            class="fa fa-calendar" aria-hidden="true"></i> 16 NOVEMBER
                                                        2023
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
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
                        <h4 style="padding-bottom: 10px; color: black;font-weight: 400">550K IDR/36,20 USD</h4>
                        <div class="pi-price">
                            <ul>
                                <li>
                                    <h3 style="color: white">ONLINE</h3>
                                </li>
                            </ul>
                        </div>
                        <h4 style="color: black;font-weight: 400">150K IDR/9,87 USD</h4>
                        <a href="#" class="price-btn">Get Ticket <span class="arrow_right"></span></a>
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
                        <h4 style="padding-bottom: 10px; color: black;font-weight: 400">750K IDR/49,38 USD</h4>
                        <div class="pi-price">
                            <ul>
                                <li>
                                    <h3 style="color: white">ONLINE</h3>
                                </li>
                            </ul>
                        </div>
                        <h4 style="color: black;font-weight: 400">250K IDR/16,46 USD</h4>
                        <a href="#" class="price-btn">Get Ticket <span class="arrow_right"></span></a>
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
                        <h4 style="padding-bottom: 10px; color: black;font-weight: 400">350K IDR/23,04 USD</h4>
                        <div class="pi-price">
                            <ul>
                                <li>
                                    <h3 style="color: white">ONLINE</h3>
                                </li>
                            </ul>
                        </div>
                        <h4 style="color: black;font-weight: 400">100K IDR/6,58 USD</h4>
                        <a href="#" class="price-btn">Get Ticket <span class="arrow_right"></span></a>
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
                                Indra (+6282142265676)<br />
                                Aulia (+6285266180861) <br />
                                Yusnaidar (+628127866961) <br />
                            </li>

                            <li>
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
