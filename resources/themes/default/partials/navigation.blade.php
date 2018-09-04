<!-- <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item"><a class="nav-link" href="{{ url('/') }}">Home</a></li>
            @menu('main', 'cms-frontend::partials.main-menu')
            <li class="nav-item"><a class="nav-link" href="{{ url('blog') }}">Blog</a></li>
            <li class="nav-item"><a class="nav-link" href="{{ url('events') }}">Events</a></li>
            <li class="nav-item"><a class="nav-link" href="{{ url('faqs') }}">FAQs</a></li>
            <li class="nav-item"><a class="nav-link" href="{{ url('gallery') }}">Gallery</a></li>
            @modules()
            @languages()
        </ul>
        <ul class="navbar-nav px-3">
            <li class="nav-item text-nowrap">
                @if (auth()->user())
                    <a class="nav-link" href="{!! url('user/settings') !!}"><span class="fa fa-fw fa-user"></span> Settings</a>
                @else
                    <a class="nav-link" href="{!! url('login') !!}"><span class="fa fa-fw fa-sign-in"></span> Login</a>
                @endif
            </li>
        </ul>
    </div>
</nav> -->

    <div class="et_slide_in_menu_container">
        <!--Logo Slide-->
        <div class="et_slide_menu_top">
            <span class="mobile_menu_bar et_pb_header_toggle et_toggle_slide_menu"></span>
            <img src="{{asset('frontend/images/Naisa-Global-Logo-Rimg1.png')}}" alt="logo" class="image-logo-slide" style="height: 47px;float: left;position: relative;top: 21px;">
        </div>
        <!-- .et_slide_menu_top -->
        <div class="et_pb_fullscreen_nav_container">
            <ul id="mobile_menu_slide" class="et_mobile_menu">
            <li class="et-has-child" >
                <a href="javascript:void(0)">About
                    <span class="et_mobile_menu_arrow"></span>
                </a>
                <ul class="sub-menu">
                    @menu('test', 'cms-frontend::partials.main-menu')
                    <li><a href="{{url('/annual-reports')}}">Our Annual Reports</a></li>
                    <li><a href="">Our Testimonials</a></li>
                    <li><a href="">Our Member Spotlights</a></li>
                    <li><a href="">Our Photo Gallery</a></li>
                    <li><a href="">Our Videos</a></li>
                    <li><a href="">Our Infographics</a></li>
                </ul>
            </li>
            <li class="et-has-child" >
                <a href="javascript:void(0)">Programs
                    <span class="et_mobile_menu_arrow"></span>
                </a>
                <ul class="sub-menu">
                    <li><a href="">Our Services</a></li>
                    <li><a href="">naisA Talks</a></li>
                    <li><a href="">Mentor-Protégé Program</a></li>
                    <li><a href="">Mentoring &#8211; naisA Flash Advice (nFA)</a></li>
                    <li><a href="">naisA-Flash-Webinar</a></li>
                    <li><a href="">naisA GLobal Fellowship Program</a></li>
                    <li><a href="">naisA Global ABCs (Assessment of Business Communication Skills)</a></li>
                    <li><a href="">naisA Talks</a></li>
                </ul>
            </li>
            <li><a href="">Mentoring</a></li>
            <li class="et-has-child" >
                <a href="javascript:void(0)">Support
                    <span class="et_mobile_menu_arrow"></span>
                </a>
                <ul class="sub-menu">
                    <li><a href="">Donate</a></li>
                    <li><a href="">Sponsorship</a></li>
                    <li><a href="">Sponsors &#038; Partners</a></li>
                </ul>
            </li>
            <li class="et-has-child" >
                <a href="javascript:void(0)">Events
                    <span class="et_mobile_menu_arrow"></span>
                </a>
                <ul class="sub-menu">
                    <li><a href="">Gala Photo Albums</a></li>
                    <li><a href="">2017 Awards Gala</a></li>
                    <li><a href="">naisA Events</a></li>
                    <li><a href="">Event Calendar</a></li>
                </ul>
            </li>
            <li class="et-has-child" >
                <a href="javascript:void(0)">Blog & News
                    <span class="et_mobile_menu_arrow"></span>
                </a>
                <ul class="sub-menu">
                    <li><a href="">Blog</a></li>
                    <li><a href="">naisA News</a></li>
                    <li><a href="">Brochures</a></li>
                    <li><a href="">Newsletters</a></li>
                    <li><a href="">naisA Global Press Release</a></li>
                </ul>
            </li>
            <li><a href="">LOGIN</a></li>
            <li><a href="">DONATE</a></li>
            <li><a href="">JOIN OUR MAILING LIST</a></li>
            <li><a href="">T: 202-379-2525</a></li>
            <li><a href="javascript:void(0)">STAY CONNECTED</a></li>
            <li class="social-link">
                <a href="" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a>
            </li>
            <li class="social-link">
                <a href=""><i class="fa fa-twitter" aria-hidden="true"></i></a>
            </li>
            <li class="social-link">
                <a href=""><i class="fa fa-linkedin" aria-hidden="true"></i></a>
            </li>
            <li class="social-link">
                <a href="" target="_blank"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
            </li>
        </ul>
        </div>
    </div>
    <header id="main-header" data-height-onload="66">
        <div class="container clearfix et_menu_container">

            <div class="logo_container">
                <span class="logo_helper"></span>
                <a href="{{url('/')}}">
                    <img src="{{asset('frontend/images/Naisa-Global-Logo-Rimg.png')}}" alt="naisA Global" id="logo" />
                </a>
            </div>
            <div id="et-top-navigation" data-height="66" data-fixed-height="40">
                <span class="mobile_menu_bar et_pb_header_toggle et_toggle_slide_menu"></span>
                <a href=""><img src="{{asset('frontend/images/Naisa-Global-Logo-Rimg.png')}}" alt="logo" class="image-logo" style="height: 57px; float: left; position: relative; top: -45px; left: 39px;"></a>
                <div style="float: right;" class="header_primary">
                    <a href="" title="Donate">Donate</a>
                    <a href="" title="Join Our Mailing List">Join Our Mailing List</a>
                    <a href="" title="Sign In">Sign In</a>
                </div>
            </div>
            <!-- #et-top-navigation -->
        </div>
        <!-- .container -->
        <div class="et_search_outer">
            <div class="container et_search_form_container">
                <form role="search" method="get" class="et-search-form" action="">
                    <input type="search" class="et-search-field" placeholder="Search &hellip;" value="" name="s" title="Search for:" />
                </form>
                <span class="et_close_search_field"></span>
            </div>
        </div>
    </header>

