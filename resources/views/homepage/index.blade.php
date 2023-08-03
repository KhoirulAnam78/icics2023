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
            {{-- <div class="row"> --}}
            {{-- <div class="col-lg-6">
                    <div class="ha-pic">
                        <img src="{{ url('') }}/assets/img/h-about.jpg" alt="">
                    </div>
                </div> --}}
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
                        {{-- <ul class="nav nav-tabs" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" data-toggle="tab" href="#tabs-1" role="tab">
                                    <h5>Day 1</h5>
                                    <p>May 04, 2019</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#tabs-2" role="tab">
                                    <h5>Day 2</h5>
                                    <p>May 05, 2019</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#tabs-3" role="tab">
                                    <h5>Day 3</h5>
                                    <p>May 06, 2019</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#tabs-4" role="tab">
                                    <h5>Day 4</h5>
                                    <p>May 07, 2019</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#tabs-5" role="tab">
                                    <h5>Day 5</h5>
                                    <p>May 08, 2019</p>
                                </a>
                            </li>
                        </ul><!-- Tab panes --> --}}
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
                {{-- <div class="col-lg-4 col-md-8">
                    <div class="price-item">
                        <h4>Profesional Presenter</h4>
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
                </div> --}}
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
    <!-- Pricing Section End -->

    <!-- latest BLog Section Begin -->
    {{-- <section class="latest-blog spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>Latest News</h2>
                        <p>Do not miss anything topic abput the event</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="latest-item set-bg large-item"
                        data-setbg="{{ url('') }}/assets/img/blog/latest-b/latest-1.jpg">
                        <div class="li-tag">Marketing</div>
                        <div class="li-text">
                            <h4><a href="./blog-details.html">Improve You Business Cards And Enchan Your Sales</a></h4>
                            <span><i class="fa fa-clock-o"></i> 19th May, 2019</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="latest-item set-bg"
                        data-setbg="{{ url('') }}/assets/img/blog/latest-b/latest-2.jpg">
                        <div class="li-tag">Experience</div>
                        <div class="li-text">
                            <h5><a href="./blog-details.html">All users on MySpace will know that there are millions of
                                    people out there.</a></h5>
                            <span><i class="fa fa-clock-o"></i> 19th May, 2019</span>
                        </div>
                    </div>
                    <div class="latest-item set-bg"
                        data-setbg="{{ url('') }}/assets/img/blog/latest-b/latest-3.jpg">
                        <div class="li-tag">Marketing</div>
                        <div class="li-text">
                            <h5><a href="./blog-details.html">A Pocket PC is a handheld computer, which features many
                                    of the same capabilities.</a></h5>
                            <span><i class="fa fa-clock-o"></i> 19th May, 2019</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    <!-- latest BLog Section End -->

    <!-- Newslatter Section Begin -->
    {{-- <section class="newslatter-section">
        <div class="container">
            <div class="newslatter-inner set-bg" data-setbg="{{ url('') }}/assets/img/newslatter-bg.jpg">
                <div class="ni-text">
                    <h3>Subscribe Newsletter</h3>
                    <p>Subscribe to our newsletter and don’t miss anything</p>
                </div>
                <form action="#" class="ni-form">
                    <input type="text" placeholder="Your email">
                    <button type="submit">Subscribe</button>
                </form>
            </div>
        </div>
    </section> --}}
    <!-- Newslatter Section End -->

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
                            <p>01 Pascale Springs Apt. 339, NY City <br />United State</p>
                        </div>
                        <ul>
                            <li>
                                <span>Phone:</span>
                                (+12)-345-67-8910
                            </li>
                            <li>
                                <span>Email:</span>
                                info.colorlib@gmail.com
                            </li>
                        </ul>
                        <div class="ct-links">
                            <span>Website:</span>
                            <p>https://conference.colorlib.com</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="cs-map">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d52901.38789495531!2d-118.19465514866786!3d34.03523211493029!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80c2cf71ad83ff9f%3A0x518b28657f4543b7!2sEast%20Los%20Angeles%2C%20CA%2C%20USA!5e0!3m2!1sen!2sbd!4v1579763856144!5m2!1sen!2sbd"
                            height="400" style="border:0;" allowfullscreen=""></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact Section End -->
@endsection
