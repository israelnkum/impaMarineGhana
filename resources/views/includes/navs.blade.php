<div class="page-wraper">
<header class="site-header header-style-1 ">
    <!-- TOP BAR START -->
    <div class="top-bar">
        <div class="container">
            <div class="row">
                <div class="wt-topbar-right clearfix">
                    <ul class="social-bx list-inline pull-right">
                        <li><a href="#" class="fa fa-facebook"></a></li>
                        <li><a href="#" class="fa fa-twitter"></a></li>
                        <li><a href="#" class="fa fa-linkedin"></a></li>
                        <li><a href="#" class="fa fa-instagram"></a></li>
                    </ul>
                    <ul class="list-unstyled e-p-bx pull-right">
                        <li><i class="fa fa-envelope"></i>impamarinegh@outlook.com</li>
                        <li><i class="fa fa-phone"></i>+233 (0)508333919</li>
                    </ul>

                </div>
            </div>
        </div>
    </div>
    <!-- MAIN BAR START -->
    <div class="sticky-header main-bar-wraper">
        <div class="main-bar ">
            <div class="container">
                <!-- SITE LOGO -->
                <div class="logo-header mostion header-skew">
                    <a href="/">
                        <img src="{{asset('images/logo.jpg')}}" width="230" height="67" alt="" />
                    </a>
                </div>
                <!-- NAV TOGGLE BUTTON -->
                <button data-target=".header-nav" data-toggle="collapse" type="button" class="navbar-toggle collapsed">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <!-- MAIN NAV -->
                <div class="header-nav navbar-collapse collapse ">
                    <ul class=" nav navbar-nav">
                        <li class="{{ Request::is('welcome') ? 'active' : '' }}">
                            <a href="{{route('welcome')}}">Home</a>
                        </li>

                        <li>
                            <a href="#">Services</a>
                        </li>

                        <li class="{{ Request::is('product') ? 'active' : '' }}">
                            <a href="{{route('product')}}">Product</a>
                        </li>

                        <li class="{{ Request::is('about') ? 'active' : '' }}">
                            <a href="{{route('about')}}">About Us</a>
                        </li>
                        <li class="{{ Request::is('contact') ? 'active' : '' }}">
                            <a href="{{route('contact')}}">Contact Us</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</header>