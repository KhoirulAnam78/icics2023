    {{-- @if (Auth::user())
        <div class="container-fluid">
            <div class="row justify-content-end p-3" style="background-color: #0366fc">
                <a href="/dashboard" class="primary-btn">{{ Auth::user()->email }}</a>
            </div>
        </div>
    @else
        <div class="container-fluid">
            <div class="row justify-content-end p-3" style="background-color: #0366fc">
                <a href="/login" class="primary-btn">Login</a>
                <a href="/register" class="primary-btn mx-3">Registration</a>
            </div>
        </div>
    @endif --}}
    <!-- Header Section Begin -->
    <header class="header-section">

        <div class="container">
            <div class="logo">
                <a href="./index.html">
                    {{-- <h2>ICICS2023</h2> --}}
                    <img src="{{ url('') }}/assets/img/logo-icics2023.png" alt="logo.png">
                </a>
            </div>
            <div class="nav-menu">
                <nav class="mainmenu mobile-menu">
                    <ul>
                        <li class="{{ $title == 'Home' ? 'active' : '' }}"><a href="/">Home</a></li>
                        <li
                            class="{{ ($title == 'Registration Fee' or $title == 'Scientific Committee' or $title == 'Steering Committee' or $title == 'Organizing Committee' or $title == 'About' or $title == 'Contact') ? 'active' : '' }}">
                            <a href="#">Information</a>
                            <ul class="dropdown" style="width:300px">
                                <li><a href="/registration-fee">Registration fee</a></li>
                                <li><a href="/scientific-committe">Scientific Committee</a></li>
                                <li><a href="/steering-committe">Steering Committee</a></li>
                                <li><a href="/organizing-committe">Organizing Committee</a></li>
                                <li><a href="/about-conference">About Conference</a></li>
                                <li><a href="/contact">Contacts</a></li>
                            </ul>
                        </li>
                        </li>
                        {{-- <li class="{{ $title == 'Presentations' ? 'active' : '' }}"><a
                            href="./about-us.html">Presentations</a></li> --}}
                        <li class="{{ $title == 'Rundown ICICS 2023' ? 'active' : '' }}"><a
                                href="/rundown-icics2023">Rundown</a></li>

                        <li
                            class="{{ ($title == 'FGD MBKM' or $title == 'FGD Akreditasi Internasional' or $title == 'Kongres HKI' or $title == 'Forum Ketua Jurusan Kimia' or $title == 'Field Trip') ? 'active' : '' }}">
                            <a href="#">Satellite
                                Event</a>
                            <ul class="dropdown" style="width:300px">
                                <li><a href="/fgd-mbkm">FGD MBKM</a></li>
                                <li><a href="/fgd-akreditasi-internasional">FGD Akreditasi Internasional</a></li>
                                <li><a href="/kongres-hki">Kongres HKI</a></li>
                                <li><a href="/forum-ketua-jurusan-kimia">Forum Ketua Jurusan Kimia</a></li>
                                <li><a href="/field-trip">Field Trip</a></li>
                            </ul>
                        </li>
                        <li class="{{ $title == 'Download' ? 'active' : '' }}"><a href="/downloads">Download</a>
                        </li>
                        <li class="{{ $title == 'Previously' ? 'active' : '' }}"><a href="#">Previously</a>
                            <ul class="dropdown" style="width:300px">
                                <li><a href="https://icics2022.uho.ac.id/">10th ICICS 2022 Kendari</a></li>
                                <li><a href="https://icics2021.unram.ac.id/">9th ICICS 2021 Lombok</a></li>
                                <li><a href="http://icics2019.ipb.ac.id/">8th ICICS 2019 Bogor</a></li>
                                <li><a href="https://www.hki.or.id/ICICS">7th ICICS 2018 Jayapura</a></li>
                                <li><a href="https://www.hki.or.id/ICICS">6th ICICS 2017 Palembang</a></li>
                                <li><a href="https://www.hki.or.id/ICICS">5th ICICS 2016 Samarinda</a></li>
                                <li><a href="https://www.hki.or.id/ICICS">4th ICICS 2015 Medan</a></li>
                                <li><a href="https://www.hki.or.id/ICICS">3rd ICICS 2014 Maluku</a></li>
                                <li><a href="https://www.hki.or.id/ICICS">2nd ICICS 2013 Jogjakarta</a></li>
                                <li><a href="https://www.hki.or.id/ICICS">1st ICICS 2012 Surabaya</a></li>
                            </ul>
                        </li>
                    </ul>
                </nav>
                @if (Auth::user())
                    <a href="/dashboard" class="primary-btn">{{ Auth::user()->email }}</a>
                @else
                    <a href="/login" class="primary-btn">Login</a>
                    <a href="/register" class="primary-btn mx-3">Registration</a>
                @endif
            </div>
            <div id="mobile-menu-wrap"></div>
        </div>
    </header>
    <!-- Header End -->
