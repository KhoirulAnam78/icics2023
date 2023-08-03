@extends('layouts.main')

@section('content')
    <!-- Contact Form Section Begin -->
    <section class="contact-from-section spad" style="padding-top:0px">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>Rundown ICICS 2023</h2>
                        {{-- <p>Fill in the form below to register.</p> --}}
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            {{-- <section class="schedule-section spad" style="padding-top: 0px">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="schedule-tab">
                                                <ul class="nav nav-tabs" role="tablist">
                                                    <li class="nav-item">
                                                        <a class="nav-link active" data-toggle="tab" href="#tabs-1"
                                                            role="tab">
                                                            <h5>Day 1</h5>
                                                            <p>November 14, 2023</p>
                                                        </a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" data-toggle="tab" href="#tabs-2" role="tab">
                                                            <h5>Day 2</h5>
                                                            <p>November 15, 2023</p>
                                                        </a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" data-toggle="tab" href="#tabs-3" role="tab">
                                                            <h5>Day 3</h5>
                                                            <p>November 16, 2023</p>
                                                        </a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" data-toggle="tab" href="#tabs-4" role="tab">
                                                            <h5>Day 4</h5>
                                                            <p>November 17, 2023</p>
                                                        </a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" data-toggle="tab" href="#tabs-5" role="tab">
                                                            <h5>Day 5</h5>
                                                            <p>May 08, 2019</p>
                                                        </a>
                                                    </li>
                                                </ul><!-- Tab panes -->
                                                <div class="tab-content">
                                                    <div class="tab-pane active" id="tabs-1" role="tabpanel">
                                                        <div class="st-content">
                                                            <div class="container">
                                                                <div class="row">
                                                                    <div class="col-lg-3">
                                                                        <div class="sc-pic">
                                                                            <img src="img/schedule/schedule-1.jpg"
                                                                                alt="">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-5">
                                                                        <div class="sc-text">
                                                                            <h4>Arrival and Registration</h4>
                                                                            <ul>
                                                                                <li><i class="fa fa-user"></i> Committee
                                                                                </li>

                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-4">
                                                                        <ul class="sc-widget">
                                                                            <li><i class="fa fa-clock-o"></i> 13:00 -
                                                                                18:00 WIB</li>
                                                                            <li><i class="fa fa-map-marker"></i>
                                                                                Swissbell-Hotel, Jambi
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
                                                                            <img src="img/schedule/schedule-2.jpg"
                                                                                alt="">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-5">
                                                                        <div class="sc-text">
                                                                            <h4>Gala Dinner</h4>
                                                                            <ul>
                                                                                <li><i class="fa fa-user"></i>PNHKI, Branch
                                                                                    Head, FKJKI
                                                                                </li>

                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-4">
                                                                        <ul class="sc-widget">
                                                                            <li><i class="fa fa-clock-o"></i> 19:30 -
                                                                                22:00 WIB</li>
                                                                            <li><i class="fa fa-map-marker"></i>
                                                                                Swissbell-Hotel, Jambi
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="tab-pane" id="tabs-2" role="tabpanel">
                                                            <div class="st-content">
                                                                <div class="container">
                                                                    <div class="row">
                                                                        <div class="col-lg-3">
                                                                            <div class="sc-pic">
                                                                                <img src="img/schedule/schedule-1.jpg"
                                                                                    alt="">
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-lg-5">
                                                                            <div class="sc-text">
                                                                                <h4>Dealing with Easy People</h4>
                                                                                <ul>
                                                                                    <li><i class="fa fa-user"></i> John
                                                                                        Smith
                                                                                    </li>
                                                                                    <li><i class="fa fa-envelope"></i>
                                                                                        john@Colorlib.com
                                                                                    </li>
                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-lg-4">
                                                                            <ul class="sc-widget">
                                                                                <li><i class="fa fa-clock-o"></i> 08:00 am -
                                                                                    10:00 AM</li>
                                                                                <li><i class="fa fa-map-marker"></i>
                                                                                    Swissbell-Hotel, Jambi
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
                                                                                <img src="img/schedule/schedule-2.jpg"
                                                                                    alt="">
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-lg-5">
                                                                            <div class="sc-text">
                                                                                <h4>V7 Digital Photo Printing</h4>
                                                                                <ul>
                                                                                    <li><i class="fa fa-user"></i> John
                                                                                        Smith
                                                                                    </li>
                                                                                    <li><i class="fa fa-envelope"></i>
                                                                                        john@Colorlib.com
                                                                                    </li>
                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-lg-4">
                                                                            <ul class="sc-widget">
                                                                                <li><i class="fa fa-clock-o"></i> 08:00 am
                                                                                    -
                                                                                    10:00 AM</li>
                                                                                <li><i class="fa fa-map-marker"></i>
                                                                                    Swissbell-Hotel, Jambi
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
                                                                                <img src="img/schedule/schedule-3.jpg"
                                                                                    alt="">
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-lg-5">
                                                                            <div class="sc-text">
                                                                                <h4>Beyond The Naked Eye</h4>
                                                                                <ul>
                                                                                    <li><i class="fa fa-user"></i> John
                                                                                        Smith
                                                                                    </li>
                                                                                    <li><i class="fa fa-envelope"></i>
                                                                                        john@Colorlib.com
                                                                                    </li>
                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-lg-4">
                                                                            <ul class="sc-widget">
                                                                                <li><i class="fa fa-clock-o"></i> 08:00 am
                                                                                    -
                                                                                    10:00 AM</li>
                                                                                <li><i class="fa fa-map-marker"></i>
                                                                                    Swissbell-Hotel, Jambi
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
                                                                                <img src="img/schedule/schedule-4.jpg"
                                                                                    alt="">
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-lg-5">
                                                                            <div class="sc-text">
                                                                                <h4>Influencing The Influencer</h4>
                                                                                <ul>
                                                                                    <li><i class="fa fa-user"></i> John
                                                                                        Smith
                                                                                    </li>
                                                                                    <li><i class="fa fa-envelope"></i>
                                                                                        john@Colorlib.com
                                                                                    </li>
                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-lg-4">
                                                                            <ul class="sc-widget">
                                                                                <li><i class="fa fa-clock-o"></i> 08:00 am
                                                                                    -
                                                                                    10:00 AM</li>
                                                                                <li><i class="fa fa-map-marker"></i>
                                                                                    Swissbell-Hotel, Jambi
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="tab-pane" id="tabs-3" role="tabpanel">
                                                            <div class="st-content">
                                                                <div class="container">
                                                                    <div class="row">
                                                                        <div class="col-lg-3">
                                                                            <div class="sc-pic">
                                                                                <img src="img/schedule/schedule-1.jpg"
                                                                                    alt="">
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-lg-5">
                                                                            <div class="sc-text">
                                                                                <h4>Dealing with Intermediate People</h4>
                                                                                <ul>
                                                                                    <li><i class="fa fa-user"></i> John
                                                                                        Smith
                                                                                    </li>
                                                                                    <li><i class="fa fa-envelope"></i>
                                                                                        john@Colorlib.com
                                                                                    </li>
                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-lg-4">
                                                                            <ul class="sc-widget">
                                                                                <li><i class="fa fa-clock-o"></i> 08:00 am
                                                                                    -
                                                                                    10:00 AM</li>
                                                                                <li><i class="fa fa-map-marker"></i>
                                                                                    Swissbell-Hotel, Jambi
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
                                                                                <img src="img/schedule/schedule-2.jpg"
                                                                                    alt="">
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-lg-5">
                                                                            <div class="sc-text">
                                                                                <h4>V7 Digital Photo Printing</h4>
                                                                                <ul>
                                                                                    <li><i class="fa fa-user"></i> John
                                                                                        Smith
                                                                                    </li>
                                                                                    <li><i class="fa fa-envelope"></i>
                                                                                        john@Colorlib.com
                                                                                    </li>
                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-lg-4">
                                                                            <ul class="sc-widget">
                                                                                <li><i class="fa fa-clock-o"></i> 08:00 am
                                                                                    -
                                                                                    10:00 AM</li>
                                                                                <li><i class="fa fa-map-marker"></i>
                                                                                    Swissbell-Hotel, Jambi
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
                                                                                <img src="img/schedule/schedule-3.jpg"
                                                                                    alt="">
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-lg-5">
                                                                            <div class="sc-text">
                                                                                <h4>Beyond The Naked Eye</h4>
                                                                                <ul>
                                                                                    <li><i class="fa fa-user"></i> John
                                                                                        Smith
                                                                                    </li>
                                                                                    <li><i class="fa fa-envelope"></i>
                                                                                        john@Colorlib.com
                                                                                    </li>
                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-lg-4">
                                                                            <ul class="sc-widget">
                                                                                <li><i class="fa fa-clock-o"></i> 08:00 am
                                                                                    -
                                                                                    10:00 AM</li>
                                                                                <li><i class="fa fa-map-marker"></i>
                                                                                    Swissbell-Hotel, Jambi
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
                                                                                <img src="img/schedule/schedule-4.jpg"
                                                                                    alt="">
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-lg-5">
                                                                            <div class="sc-text">
                                                                                <h4>Influencing The Influencer</h4>
                                                                                <ul>
                                                                                    <li><i class="fa fa-user"></i> John
                                                                                        Smith
                                                                                    </li>
                                                                                    <li><i class="fa fa-envelope"></i>
                                                                                        john@Colorlib.com
                                                                                    </li>
                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-lg-4">
                                                                            <ul class="sc-widget">
                                                                                <li><i class="fa fa-clock-o"></i> 08:00 am
                                                                                    -
                                                                                    10:00 AM</li>
                                                                                <li><i class="fa fa-map-marker"></i>
                                                                                    Swissbell-Hotel, Jambi
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="tab-pane" id="tabs-4" role="tabpanel">
                                                            <div class="st-content">
                                                                <div class="container">
                                                                    <div class="row">
                                                                        <div class="col-lg-3">
                                                                            <div class="sc-pic">
                                                                                <img src="img/schedule/schedule-1.jpg"
                                                                                    alt="">
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-lg-5">
                                                                            <div class="sc-text">
                                                                                <h4>Dealing with Expert People</h4>
                                                                                <ul>
                                                                                    <li><i class="fa fa-user"></i> John
                                                                                        Smith
                                                                                    </li>
                                                                                    <li><i class="fa fa-envelope"></i>
                                                                                        john@Colorlib.com
                                                                                    </li>
                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-lg-4">
                                                                            <ul class="sc-widget">
                                                                                <li><i class="fa fa-clock-o"></i> 08:00 am
                                                                                    -
                                                                                    10:00 AM</li>
                                                                                <li><i class="fa fa-map-marker"></i>
                                                                                    Swissbell-Hotel, Jambi
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
                                                                                <img src="img/schedule/schedule-2.jpg"
                                                                                    alt="">
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-lg-5">
                                                                            <div class="sc-text">
                                                                                <h4>V7 Digital Photo Printing</h4>
                                                                                <ul>
                                                                                    <li><i class="fa fa-user"></i> John
                                                                                        Smith
                                                                                    </li>
                                                                                    <li><i class="fa fa-envelope"></i>
                                                                                        john@Colorlib.com
                                                                                    </li>
                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-lg-4">
                                                                            <ul class="sc-widget">
                                                                                <li><i class="fa fa-clock-o"></i> 08:00 am
                                                                                    -
                                                                                    10:00 AM</li>
                                                                                <li><i class="fa fa-map-marker"></i>
                                                                                    Swissbell-Hotel, Jambi
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
                                                                                <img src="img/schedule/schedule-3.jpg"
                                                                                    alt="">
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-lg-5">
                                                                            <div class="sc-text">
                                                                                <h4>Beyond The Naked Eye</h4>
                                                                                <ul>
                                                                                    <li><i class="fa fa-user"></i> John
                                                                                        Smith
                                                                                    </li>
                                                                                    <li><i class="fa fa-envelope"></i>
                                                                                        john@Colorlib.com
                                                                                    </li>
                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-lg-4">
                                                                            <ul class="sc-widget">
                                                                                <li><i class="fa fa-clock-o"></i> 08:00 am
                                                                                    -
                                                                                    10:00 AM</li>
                                                                                <li><i class="fa fa-map-marker"></i>
                                                                                    Swissbell-Hotel, Jambi
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
                                                                                <img src="img/schedule/schedule-4.jpg"
                                                                                    alt="">
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-lg-5">
                                                                            <div class="sc-text">
                                                                                <h4>Influencing The Influencer</h4>
                                                                                <ul>
                                                                                    <li><i class="fa fa-user"></i> John
                                                                                        Smith
                                                                                    </li>
                                                                                    <li><i class="fa fa-envelope"></i>
                                                                                        john@Colorlib.com
                                                                                    </li>
                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-lg-4">
                                                                            <ul class="sc-widget">
                                                                                <li><i class="fa fa-clock-o"></i> 08:00 am
                                                                                    -
                                                                                    10:00 AM</li>
                                                                                <li><i class="fa fa-map-marker"></i>
                                                                                    Swissbell-Hotel, Jambi
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
                                </div>
                            </section> --}}
                            <section class="schedule-section spad">
                                <div class="container">
                                    {{-- <div class="row">
                                        <div class="col-lg-12">
                                            <div class="section-title">
                                                <h2>Our Schedule</h2>
                                                <p>Do not miss anything topic about the event</p>
                                            </div>
                                        </div>
                                    </div> --}}
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="schedule-tab">
                                                <ul class="nav nav-tabs" role="tablist">
                                                    <li class="nav-item">
                                                        <a class="nav-link active" data-toggle="tab" href="#tabs-1"
                                                            role="tab">
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
                                                </ul><!-- Tab panes -->
                                                <div class="tab-content">
                                                    <div class="tab-pane active" id="tabs-1" role="tabpanel">
                                                        <div class="st-content">
                                                            <div class="container">
                                                                <div class="row">
                                                                    <div class="col-lg-3">
                                                                        <div class="sc-pic">
                                                                            <img src="img/schedule/schedule-1.jpg"
                                                                                alt="">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-5">
                                                                        <div class="sc-text">
                                                                            <h4>Dealing with Difficult People</h4>
                                                                            <ul>
                                                                                <li><i class="fa fa-user"></i> John Smith
                                                                                </li>
                                                                                <li><i class="fa fa-envelope"></i>
                                                                                    john@Colorlib.com
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-4">
                                                                        <ul class="sc-widget">
                                                                            <li><i class="fa fa-clock-o"></i> 08:00 am -
                                                                                10:00 AM</li>
                                                                            <li><i class="fa fa-map-marker"></i> 59 Breanne
                                                                                Canyon Suite, USA
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
                                                                            <img src="img/schedule/schedule-2.jpg"
                                                                                alt="">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-5">
                                                                        <div class="sc-text">
                                                                            <h4>V7 Digital Photo Printing</h4>
                                                                            <ul>
                                                                                <li><i class="fa fa-user"></i> John Smith
                                                                                </li>
                                                                                <li><i class="fa fa-envelope"></i>
                                                                                    john@Colorlib.com
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-4">
                                                                        <ul class="sc-widget">
                                                                            <li><i class="fa fa-clock-o"></i> 08:00 am -
                                                                                10:00 AM</li>
                                                                            <li><i class="fa fa-map-marker"></i> 59 Breanne
                                                                                Canyon Suite, USA
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
                                                                            <img src="img/schedule/schedule-3.jpg"
                                                                                alt="">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-5">
                                                                        <div class="sc-text">
                                                                            <h4>Beyond The Naked Eye</h4>
                                                                            <ul>
                                                                                <li><i class="fa fa-user"></i> John Smith
                                                                                </li>
                                                                                <li><i class="fa fa-envelope"></i>
                                                                                    john@Colorlib.com
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-4">
                                                                        <ul class="sc-widget">
                                                                            <li><i class="fa fa-clock-o"></i> 08:00 am -
                                                                                10:00 AM</li>
                                                                            <li><i class="fa fa-map-marker"></i> 59 Breanne
                                                                                Canyon Suite, USA
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
                                                                            <img src="img/schedule/schedule-4.jpg"
                                                                                alt="">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-5">
                                                                        <div class="sc-text">
                                                                            <h4>Influencing The Influencer</h4>
                                                                            <ul>
                                                                                <li><i class="fa fa-user"></i> John Smith
                                                                                </li>
                                                                                <li><i class="fa fa-envelope"></i>
                                                                                    john@Colorlib.com
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-4">
                                                                        <ul class="sc-widget">
                                                                            <li><i class="fa fa-clock-o"></i> 08:00 am -
                                                                                10:00 AM</li>
                                                                            <li><i class="fa fa-map-marker"></i> 59 Breanne
                                                                                Canyon Suite, USA
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="tab-pane" id="tabs-2" role="tabpanel">
                                                        <div class="st-content">
                                                            <div class="container">
                                                                <div class="row">
                                                                    <div class="col-lg-3">
                                                                        <div class="sc-pic">
                                                                            <img src="img/schedule/schedule-1.jpg"
                                                                                alt="">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-5">
                                                                        <div class="sc-text">
                                                                            <h4>Dealing with Easy People</h4>
                                                                            <ul>
                                                                                <li><i class="fa fa-user"></i> John Smith
                                                                                </li>
                                                                                <li><i class="fa fa-envelope"></i>
                                                                                    john@Colorlib.com
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-4">
                                                                        <ul class="sc-widget">
                                                                            <li><i class="fa fa-clock-o"></i> 08:00 am -
                                                                                10:00 AM</li>
                                                                            <li><i class="fa fa-map-marker"></i> 59 Breanne
                                                                                Canyon Suite, USA
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
                                                                            <img src="img/schedule/schedule-2.jpg"
                                                                                alt="">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-5">
                                                                        <div class="sc-text">
                                                                            <h4>V7 Digital Photo Printing</h4>
                                                                            <ul>
                                                                                <li><i class="fa fa-user"></i> John Smith
                                                                                </li>
                                                                                <li><i class="fa fa-envelope"></i>
                                                                                    john@Colorlib.com
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-4">
                                                                        <ul class="sc-widget">
                                                                            <li><i class="fa fa-clock-o"></i> 08:00 am -
                                                                                10:00 AM</li>
                                                                            <li><i class="fa fa-map-marker"></i> 59 Breanne
                                                                                Canyon Suite, USA
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
                                                                            <img src="img/schedule/schedule-3.jpg"
                                                                                alt="">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-5">
                                                                        <div class="sc-text">
                                                                            <h4>Beyond The Naked Eye</h4>
                                                                            <ul>
                                                                                <li><i class="fa fa-user"></i> John Smith
                                                                                </li>
                                                                                <li><i class="fa fa-envelope"></i>
                                                                                    john@Colorlib.com
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-4">
                                                                        <ul class="sc-widget">
                                                                            <li><i class="fa fa-clock-o"></i> 08:00 am -
                                                                                10:00 AM</li>
                                                                            <li><i class="fa fa-map-marker"></i> 59 Breanne
                                                                                Canyon Suite, USA
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
                                                                            <img src="img/schedule/schedule-4.jpg"
                                                                                alt="">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-5">
                                                                        <div class="sc-text">
                                                                            <h4>Influencing The Influencer</h4>
                                                                            <ul>
                                                                                <li><i class="fa fa-user"></i> John Smith
                                                                                </li>
                                                                                <li><i class="fa fa-envelope"></i>
                                                                                    john@Colorlib.com
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-4">
                                                                        <ul class="sc-widget">
                                                                            <li><i class="fa fa-clock-o"></i> 08:00 am -
                                                                                10:00 AM</li>
                                                                            <li><i class="fa fa-map-marker"></i> 59 Breanne
                                                                                Canyon Suite, USA
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="tab-pane" id="tabs-3" role="tabpanel">
                                                        <div class="st-content">
                                                            <div class="container">
                                                                <div class="row">
                                                                    <div class="col-lg-3">
                                                                        <div class="sc-pic">
                                                                            <img src="img/schedule/schedule-1.jpg"
                                                                                alt="">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-5">
                                                                        <div class="sc-text">
                                                                            <h4>Dealing with Intermediate People</h4>
                                                                            <ul>
                                                                                <li><i class="fa fa-user"></i> John Smith
                                                                                </li>
                                                                                <li><i class="fa fa-envelope"></i>
                                                                                    john@Colorlib.com
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-4">
                                                                        <ul class="sc-widget">
                                                                            <li><i class="fa fa-clock-o"></i> 08:00 am -
                                                                                10:00 AM</li>
                                                                            <li><i class="fa fa-map-marker"></i> 59 Breanne
                                                                                Canyon Suite, USA
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
                                                                            <img src="img/schedule/schedule-2.jpg"
                                                                                alt="">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-5">
                                                                        <div class="sc-text">
                                                                            <h4>V7 Digital Photo Printing</h4>
                                                                            <ul>
                                                                                <li><i class="fa fa-user"></i> John Smith
                                                                                </li>
                                                                                <li><i class="fa fa-envelope"></i>
                                                                                    john@Colorlib.com
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-4">
                                                                        <ul class="sc-widget">
                                                                            <li><i class="fa fa-clock-o"></i> 08:00 am -
                                                                                10:00 AM</li>
                                                                            <li><i class="fa fa-map-marker"></i> 59 Breanne
                                                                                Canyon Suite, USA
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
                                                                            <img src="img/schedule/schedule-3.jpg"
                                                                                alt="">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-5">
                                                                        <div class="sc-text">
                                                                            <h4>Beyond The Naked Eye</h4>
                                                                            <ul>
                                                                                <li><i class="fa fa-user"></i> John Smith
                                                                                </li>
                                                                                <li><i class="fa fa-envelope"></i>
                                                                                    john@Colorlib.com
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-4">
                                                                        <ul class="sc-widget">
                                                                            <li><i class="fa fa-clock-o"></i> 08:00 am -
                                                                                10:00 AM</li>
                                                                            <li><i class="fa fa-map-marker"></i> 59 Breanne
                                                                                Canyon Suite, USA
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
                                                                            <img src="img/schedule/schedule-4.jpg"
                                                                                alt="">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-5">
                                                                        <div class="sc-text">
                                                                            <h4>Influencing The Influencer</h4>
                                                                            <ul>
                                                                                <li><i class="fa fa-user"></i> John Smith
                                                                                </li>
                                                                                <li><i class="fa fa-envelope"></i>
                                                                                    john@Colorlib.com
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-4">
                                                                        <ul class="sc-widget">
                                                                            <li><i class="fa fa-clock-o"></i> 08:00 am -
                                                                                10:00 AM</li>
                                                                            <li><i class="fa fa-map-marker"></i> 59 Breanne
                                                                                Canyon Suite, USA
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="tab-pane" id="tabs-4" role="tabpanel">
                                                        <div class="st-content">
                                                            <div class="container">
                                                                <div class="row">
                                                                    <div class="col-lg-3">
                                                                        <div class="sc-pic">
                                                                            <img src="img/schedule/schedule-1.jpg"
                                                                                alt="">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-5">
                                                                        <div class="sc-text">
                                                                            <h4>Dealing with Expert People</h4>
                                                                            <ul>
                                                                                <li><i class="fa fa-user"></i> John Smith
                                                                                </li>
                                                                                <li><i class="fa fa-envelope"></i>
                                                                                    john@Colorlib.com
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-4">
                                                                        <ul class="sc-widget">
                                                                            <li><i class="fa fa-clock-o"></i> 08:00 am -
                                                                                10:00 AM</li>
                                                                            <li><i class="fa fa-map-marker"></i> 59 Breanne
                                                                                Canyon Suite, USA
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
                                                                            <img src="img/schedule/schedule-2.jpg"
                                                                                alt="">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-5">
                                                                        <div class="sc-text">
                                                                            <h4>V7 Digital Photo Printing</h4>
                                                                            <ul>
                                                                                <li><i class="fa fa-user"></i> John Smith
                                                                                </li>
                                                                                <li><i class="fa fa-envelope"></i>
                                                                                    john@Colorlib.com
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-4">
                                                                        <ul class="sc-widget">
                                                                            <li><i class="fa fa-clock-o"></i> 08:00 am -
                                                                                10:00 AM</li>
                                                                            <li><i class="fa fa-map-marker"></i> 59 Breanne
                                                                                Canyon Suite, USA
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
                                                                            <img src="img/schedule/schedule-3.jpg"
                                                                                alt="">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-5">
                                                                        <div class="sc-text">
                                                                            <h4>Beyond The Naked Eye</h4>
                                                                            <ul>
                                                                                <li><i class="fa fa-user"></i> John Smith
                                                                                </li>
                                                                                <li><i class="fa fa-envelope"></i>
                                                                                    john@Colorlib.com
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-4">
                                                                        <ul class="sc-widget">
                                                                            <li><i class="fa fa-clock-o"></i> 08:00 am -
                                                                                10:00 AM</li>
                                                                            <li><i class="fa fa-map-marker"></i> 59 Breanne
                                                                                Canyon Suite, USA
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
                                                                            <img src="img/schedule/schedule-4.jpg"
                                                                                alt="">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-5">
                                                                        <div class="sc-text">
                                                                            <h4>Influencing The Influencer</h4>
                                                                            <ul>
                                                                                <li><i class="fa fa-user"></i> John Smith
                                                                                </li>
                                                                                <li><i class="fa fa-envelope"></i>
                                                                                    john@Colorlib.com
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-4">
                                                                        <ul class="sc-widget">
                                                                            <li><i class="fa fa-clock-o"></i> 08:00 am -
                                                                                10:00 AM</li>
                                                                            <li><i class="fa fa-map-marker"></i> 59 Breanne
                                                                                Canyon Suite, USA
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="tab-pane" id="tabs-5" role="tabpanel">
                                                        <div class="st-content">
                                                            <div class="container">
                                                                <div class="row">
                                                                    <div class="col-lg-3">
                                                                        <div class="sc-pic">
                                                                            <img src="img/schedule/schedule-1.jpg"
                                                                                alt="">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-5">
                                                                        <div class="sc-text">
                                                                            <h4>Dealing with Too Difficult People</h4>
                                                                            <ul>
                                                                                <li><i class="fa fa-user"></i> John Smith
                                                                                </li>
                                                                                <li><i class="fa fa-envelope"></i>
                                                                                    john@Colorlib.com
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-4">
                                                                        <ul class="sc-widget">
                                                                            <li><i class="fa fa-clock-o"></i> 08:00 am -
                                                                                10:00 AM</li>
                                                                            <li><i class="fa fa-map-marker"></i> 59 Breanne
                                                                                Canyon Suite, USA
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
                                                                            <img src="img/schedule/schedule-2.jpg"
                                                                                alt="">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-5">
                                                                        <div class="sc-text">
                                                                            <h4>V7 Digital Photo Printing</h4>
                                                                            <ul>
                                                                                <li><i class="fa fa-user"></i> John Smith
                                                                                </li>
                                                                                <li><i class="fa fa-envelope"></i>
                                                                                    john@Colorlib.com
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-4">
                                                                        <ul class="sc-widget">
                                                                            <li><i class="fa fa-clock-o"></i> 08:00 am -
                                                                                10:00 AM</li>
                                                                            <li><i class="fa fa-map-marker"></i> 59 Breanne
                                                                                Canyon Suite, USA
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
                                                                            <img src="img/schedule/schedule-3.jpg"
                                                                                alt="">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-5">
                                                                        <div class="sc-text">
                                                                            <h4>Beyond The Naked Eye</h4>
                                                                            <ul>
                                                                                <li><i class="fa fa-user"></i> John Smith
                                                                                </li>
                                                                                <li><i class="fa fa-envelope"></i>
                                                                                    john@Colorlib.com
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-4">
                                                                        <ul class="sc-widget">
                                                                            <li><i class="fa fa-clock-o"></i> 08:00 am -
                                                                                10:00 AM</li>
                                                                            <li><i class="fa fa-map-marker"></i> 59 Breanne
                                                                                Canyon Suite, USA
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
                                                                            <img src="img/schedule/schedule-4.jpg"
                                                                                alt="">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-5">
                                                                        <div class="sc-text">
                                                                            <h4>Influencing The Influencer</h4>
                                                                            <ul>
                                                                                <li><i class="fa fa-user"></i> John Smith
                                                                                </li>
                                                                                <li><i class="fa fa-envelope"></i>
                                                                                    john@Colorlib.com
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-4">
                                                                        <ul class="sc-widget">
                                                                            <li><i class="fa fa-clock-o"></i> 08:00 am -
                                                                                10:00 AM</li>
                                                                            <li><i class="fa fa-map-marker"></i> 59 Breanne
                                                                                Canyon Suite, USA
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
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact Form Section End -->
@endsection
