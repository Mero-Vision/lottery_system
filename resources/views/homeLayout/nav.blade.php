<!-- ======= Header ======= -->
<header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center">
        <h1 class="logo me-auto"><a href="{{ url('/') }}">Royal Lucky 10<span>.</span></a></h1>


        <nav id="navbar" class="navbar order-last order-lg-0">
            <ul>
                <li><a class="nav-link scrollto {{ request()->is('/') ? 'active' : '' }}"
                        href="{{ url('/') }}">Home</a></li>
                <li><a class="nav-link scrollto {{ request()->is('result/1-pm-result') ? 'active' : '' }}"
                        href="{{ url('result/1-pm-result') }}">1:00 PM Results</a></li>
                <li><a class="nav-link scrollto {{ request()->is('result/6-pm-result') ? 'active' : '' }}"
                        href="{{ url('result/6-pm-result') }}">6:00 PM Results</a></li>
                <li><a class="nav-link scrollto {{ request()->is('result/8-pm-result') ? 'active' : '' }}"
                        href="{{ url('result/8-pm-result') }}">8:00 PM Results</a></li>
                <li><a class="nav-link scrollto {{ request()->is('today-result') ? 'active' : '' }}"
                        href="{{ url('today-result') }}">Today Results</a></li>
                <li><a class="nav-link scrollto" href="#services">Old Results</a></li>
                <li><a class="nav-link scrollto" href="{{ url('contact-us') }}">Contact</a></li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->

        <a href="{{ url('/login') }}" class="get-started-btn scrollto">Login</a>
    </div>
</header><!-- End Header -->
