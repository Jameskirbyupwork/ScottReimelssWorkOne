<!doctype html>

<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximum-scale=1">

        <title>{{ config('app.name') }} @if (isset($page) && !is_null($page->title)) - {{ $page->title }} @endif</title>

        <meta name="description" content="@yield('seoDescription')">
        <meta name="keywords" content="@yield('seoKeywords')">
        <meta name="author" content="">

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
        <!-- Custom CSS included -->
        <link rel="stylesheet" href="{{asset('frontend/css/jquery.bxslider.min.css')}}" />
        <link rel='stylesheet' href="{{asset('frontend/css/main.css')}}" type='text/css' media='all' />
        <link rel='stylesheet' href="{{asset('frontend/css/slick.css')}}" type='text/css' media='all' />
        <link rel='stylesheet' href="{{asset('frontend/css/post-carousel.css')}}" type='text/css' media='all' />
        <link rel='stylesheet' href="{{asset('frontend/css/settings.css')}}" type='text/css' media='all' />
        <link rel='stylesheet' href="{{asset('frontend/css/testimonial-rotator-style.css')}}" type='text/css' media='all' />
        <link rel='stylesheet' href="{{asset('frontend/css/font-awesome.min.css')}}" type='text/css' media='all' />

        <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Roboto+Condensed%3A300%2C300italic%2Cregular%2Citalic%2C700%2C700italic%7CLato%3A100%2C100italic%2C300%2C300italic%2Cregular%2Citalic%2C700%2C700italic%2C900%2C900italic&#038;%20ver=744ba46599a7d4bb3dbca7a1571be0cd#038;subset=latin,latin-ext' type='text/css' media='all' />
        <link rel="stylesheet" href="{{asset('frontend/css/stylesheet.css')}}" type="text/css" charset="utf-8" />
        <link rel="stylesheet" href="{{asset('frontend/css/et-core.min.css')}}" />
        <link rel="stylesheet" href="{{asset('frontend/css/spfont.css')}}" />
        <script type='text/javascript' src="{{asset('frontend/js/jquery.min.js')}}"></script>
        <!-- Custom CSS included -->
        @yield('stylesheets')
    </head>

 <body class="page-template-default et_fullwidth_nav et_fullwidth_secondary_nav et_fixed_nav et_show_nav et_hide_primary_logo et_cover_background et_pb_gutter windows et_pb_gutters3 et_primary_nav_dropdown_animation_fade et_secondary_nav_dropdown_animation_fade et_pb_footer_columns4 et_header_style_slide et_header_style_left et_pb_pagebuilder_layout et_right_sidebar et_divi_theme et-db et_minified_css">

        @theme('partials.navigation')

        <div class="site-wrapper @if (Request::is('/')) homepage @endif">
            <div class="container-fluid">
                @yield('content')
            </div>
        </div>

<!--         <div class="footer container-fluid navbar-fixed-bottom">
            <ul class="nav">
                <li class="nav-item">
                    <span class="nav-text">&copy; {{ date('Y') }}</span>
                </li>
                @can('cms')
                    <li class="nav-item"><a class="btn btn-sm btn-link" href="{{ url(config('cms.backend-route-prefix', 'cms').'/dashboard') }}">CMS</a></li>
                    @yield('cms')
                @else
                    <li class="nav-item"><a class="btn btn-sm btn-link" href="{{ url('login') }}">Login</a></li>
                @endcan
            </ul>
        </div> -->
           <footer id="main-footer">
            <div class="container">
                <div id="footer-widgets" class="clearfix">
                    <div class="footer-widget">
                        <div id="custom_html-6" class="widget_text fwidget et_pb_widget widget_custom_html">
                            <h4 class="title">Who We Are</h4>
                            <div class="textwidget custom-html-widget">naisA Global is a 501(c)3
                                nonprofit educational
                                organization with a high
                                caliber network of over
                                2,500 industry leaders and
                                talented young professionals
                                of Asian descent.
                            </div>
                        </div>
                        <!-- end .fwidget -->
                    </div>
                    <!-- end .footer-widget -->
                    <div class="footer-widget">
                        <div id="custom_html-7" class="widget_text fwidget et_pb_widget widget_custom_html">
                            <h4 class="title">Important Links</h4>
                            <div class="textwidget custom-html-widget">
                                <div class=" megaWrapper">
                                    <ul id="menu-programs" class="ait-megamenu">
                                        <li id="menu-item-16968" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="https://naisaglobal.org/">Home</a></li>
                                        <li id="menu-item-16418" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="https://naisaglobal.org/our-services/">Programs</a></li>
                                        <li id="menu-item-18119" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="https://naisaglobal.org/donate">Donate Now</a></li>
                                        <li id="menu-item-16419" class="menu-item menu-item-type-custom menu-item-object-custom"><a href="https://naisaglobal.org/sponsorship/">Sponsorship</a></li>
                                        <li><a href="https://naisaglobal.org/gala-photo-albums/">Events</a></li>
                                        <li><a href="https://nfa.naisaglobal.org/auth/register">Mentoring Signup</a></li>
                                        <li><a href="https://naisaglobal.org/our-story/">About Us</a></li>
                                        <li ><a href="https://naisaglobal.org/our-board/">Our Board</a></li>
                                        <li><a href="https://naisaglobal.org/blog/">Blog</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- end .fwidget -->
                    </div>
                    <!-- end .footer-widget -->
                    <div class="footer-widget">
                        <div id="custom_html-8" class="widget_text fwidget et_pb_widget widget_custom_html">
                            <h4 class="title">Contact Us</h4>
                            <div class="textwidget custom-html-widget">For general inquiries and
                                media requests, please
                                contact Angela Kim at
                                Angela@naisAGlobal.org or
                                202-349-2525
                            </div>
                        </div>
                        <!-- end .fwidget -->
                    </div>
                    <!-- end .footer-widget -->
                    <div class="footer-widget last">
                        <div id="custom_html-11" class="widget_text fwidget et_pb_widget widget_custom_html">
                            <h4 class="title">Location</h4>
                            <div class="textwidget custom-html-widget">naisA Global
                                750 9th St NW Suite 650
                                Washington, DC 20001
                            </div>
                        </div>
                        <!-- end .fwidget -->
                    </div>
                    <!-- end .footer-widget -->
                </div>
                <!-- #footer-widgets -->
            </div>
            <!-- .container -->
            <div class="container">
                <div id="footer-widgets test" class="clearfix">
                    <p  style="color: #fff;margin-bottom: 25px;">Copyright © 2018 naisA Global All Rights Reserved. No part of this website may be reproduced without express consent of naisA Global. Privacy Notice</p>
                </div>
            </div>
            <div id="footer-bottom">
                <div class="container clearfix">
                </div>
                <!-- .container -->
            </div>
        </footer>


    <script type="text/javascript">
        var _token = '{!! csrf_token() !!}';
        var _url = '{!! url("/") !!}';
    </script>
    @yield("pre-javascript")
    <!-- Custom Js included -->
    <script type='text/javascript' src="{{asset('frontend/js/slick.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('frontend/js/bootstrap.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('frontend/js/jquery.bxslider.min.js')}}"></script>
    <!-- Custom Js included -->
    <!-- <script type="text/javascript" src="https://code.jquery.com/jquery-1.12.0.min.js"></script> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <!-- <script type="text/javascript" src="{{ asset('js/app.js') }}"></script> -->
    @yield('javascript')

    <script>
    $(document).ready(function() {
        console.log('start...');
        $("#sp-post-carousel").slick({
            infinite: true,
            pauseOnFocus: false,
            dots: true,
            pauseOnHover: true,
            slidesToShow: 5,
            speed: 450,
            arrows: true,
            prevArrow: "<div class='slick-prev'><i class='sp-pc-font-icon sp-pc-icon-angle-left'></i></div>",
            nextArrow: "<div class='slick-next'><i class='sp-pc-font-icon sp-pc-icon-angle-right'></i></div>",
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 2000,
            swipe: true,
            draggable: true,
            rtl: false,
            responsive: [
                {
                    breakpoint: 1100,
                    settings: {
                        slidesToShow: 3
                    }
                },
                {
                    breakpoint: 990,
                    settings: {
                        slidesToShow: 2
                    }
                },
                {
                    breakpoint: 650,
                    settings: {
                        slidesToShow: 1
                    }
                }
            ]
        });

        $('.bxslider').bxSlider({
            mode: "fade",
            adaptiveHeight: true,
            useCSS: false,
            auto: true,
            autoStart: true,
            pause: 4000,
            pager: false,
            autoHover: true,
            autoDelay: 500,
        });

         // Toggle menu show hide
        $( ".mobile_menu_bar" ).on( "click", function() {
            $('.et_slide_in_menu_container').toggleClass("et_pb_slide_menu_opened");
            $('.et_toggle_slide_menu').toggleClass("set-close-btn");
        });

        $( "#mobile_menu_slide li a" ).on( "click", function() {
            $(this).find('span').toggleClass('et_pb_submenu_opened');
            $(this).next().toggleClass('et_pb_slide_dropdown_opened show');
        });
        $(document).scroll(function(){
            var scroll = $(window).scrollTop();
            if(scroll >= 100) {
                $("#main-header").addClass("et-fixed-header");
            }else{
                $("#main-header").removeClass("et-fixed-header");
            }
        });
    });
</script>
    </body>
</html>
