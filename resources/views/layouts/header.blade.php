    @if (Auth::user())
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
    @endif
    <!-- Header Section Begin -->
    <header class="header-section">

        <div class="container">
            <div class="logo">
                <a href="./index.html">
                    <h2>ICICS2023</h2>
                    {{-- <img src="{{ url('') }}/assets/img/logo.png" alt=""> --}}
                </a>
            </div>
            <div class="nav-menu">
                <nav class="mainmenu mobile-menu">
                    <ul>
                        <li class="{{ $title == 'Home' ? 'active' : '' }}"><a href="/">Home</a></li>
                        <li class="{{ $title == 'Registration' ? 'active' : '' }}"><a href="/register">Registration</a>
                            <ul class="dropdown">
                                <li><a href="#">Registration Information</a></li>
                                <li><a href="/register">Registration Conference</a></li>
                            </ul>
                        </li>
                        <li class="{{ $title == 'About' ? 'active' : '' }}"><a href="./speaker.html">About</a>
                            <ul class="dropdown">
                                <li><a href="/about-conference">About Conference</a></li>
                                <li><a href="#">Contacts</a></li>
                            </ul>
                        </li>
                        <li class="{{ $title == 'Speakers' ? 'active' : '' }}"><a href="./about-us.html">Speakers</a>
                        </li>
                        {{-- <li class="{{ $title == 'Presentations' ? 'active' : '' }}"><a
                            href="./about-us.html">Presentations</a></li> --}}
                        <li class="{{ $title == 'ICICS2023 Rundown' ? 'active' : '' }}"><a
                                href="./about-us.html">ICICS2023
                                Rundown</a></li>
                        <li class="{{ $title == 'Download' ? 'active' : '' }}"><a href="./about-us.html">Download</a>
                        </li>
                    </ul>
                </nav>
            </div>
            <div id="mobile-menu-wrap"></div>
        </div>
    </header>
    <!-- Header End -->
