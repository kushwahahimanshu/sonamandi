<!doctype html>
<html class="no-js" lang="en">
    <head>
        <!-- title -->
        <title>{{ $w->title }}</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1" />
        <meta name="author" content="Farhad Khan">
        <!-- description -->
        <meta name="description" content="">
        <!-- keywords -->
        <meta name="keywords" content="">
        <!-- favicon -->
        <link rel="shortcut icon" href="{{ asset('images/favicon.png') }}">
        @include('common/main_headscripts')
        <style>
            .sonamandi-logo {
                width: 75px;
            }
            @media screen and (max-width: 600px) {
                .sonamandi-logo {
                    width: 40px;
                }
            }
        </style>
    </head>
    <body>
        <!-- start header -->
        <header>
            <!-- start navigation -->
            <nav class="navbar navbar-default bootsnav navbar-fixed-top header-light background-transparent nav-box-width white-link navbar-expand-lg">
                <div class="container nav-header-container">
                    <!-- start logo -->
                    <div class="col-auto pl-lg-0">
                        <a class="logo"><img src="{{ asset($w->logo) }}" data-rjs="{{ asset($w->logo) }}" class="logo-dark" alt="{{ $w->title }}"><img src="{{ asset($w->logo) }}" data-rjs="{{ asset($w->logo) }}" alt="{{ $w->title }}" class="logo-light default"></a>
                    </div>
                    <!-- end logo -->
                    <div class="col-auto col-lg accordion-menu pr-lg-0">
                        <button type="button" class="navbar-toggler collapsed" data-toggle="collapse" data-target="#navbar-collapse-toggle-1">
                            <span class="sr-only">toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <div class="navbar-collapse collapse justify-content-end" id="navbar-collapse-toggle-1">
                            <ul class="nav navbar-nav alt-font font-weight-700">
                                <li><a href="#home" title="Home" class="inner-link">Home</a></li>
                                <li><a href="#about" title="About" class="inner-link">About</a></li>
                                <li><a href="#services" title="Services" class="inner-link">Services</a></li>
                                <li><a href="#work" title="Work" class="inner-link">Products</a></li>
                                <li><a href="#contact" title="Contact" class="inner-link">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </nav>
            <!-- end navigation -->  
        </header>
        <!-- end header -->
        <!-- start slider section -->
        <section id="home" class="no-padding main-slider height-100 mobile-height wow fadeIn ">
            <div class="swiper-full-screen swiper-container white-move">
                <div class="swiper-wrapper">
                    @foreach($wslider as $r)
                        <div class="swiper-slide"><img src="{{ asset($r->image) }}" alt=""></div>
                    @endforeach
                </div>  
                <div class="swiper-pagination swiper-pagination-square swiper-pagination-white swiper-full-screen-pagination"></div>
                <div class="swiper-button-next swiper-button-black-highlight"></div>
                <div class="swiper-button-prev swiper-button-black-highlight"></div>
            </div>
        </section>
        <!-- end slider section --> 
        <!-- start about section -->
        <section id="about" class="wow fadeIn">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-xl-10 text-center mx-auto margin-eight-bottom sm-margin-three-bottom">
                        <h5 class="alt-font font-weight-700 text-extra-dark-gray margin-20px-bottom text-uppercase">About Us</h5>
                        <p class="font-weight-300 text-extra-dark-gray mb-0 sm-margin-15px-bottom">
                            {{ $w->about }}
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <!-- end about section -->
        <!-- start services section -->
        <section id="services" class="bg-light-gray wow fadeIn">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-xl-6 col-lg-8 mx-auto margin-eight-bottom text-center last-paragraph-no-margin">
                        <h5 class="alt-font font-weight-700 text-extra-dark-gray margin-20px-bottom text-uppercase">Our Services</h5>
                        <p class="width-90 mx-auto sm-width-100">
                            {{ $w->service_description }}
                        </p>
                    </div>  
                </div>
                <div class="row justify-content-center">
                    @foreach($wservices as $r)
                        <!-- start features box -->
                        <div class="col-12 col-lg-3 col-md-6 md-margin-four-bottom sm-margin-eight-bottom wow fadeInUp last-paragraph-no-margin">
                            <div class="bg-white box-shadow-light text-center padding-eighteen-tb feature-box-8 position-relative z-index-5">
                                <div class="alt-font text-extra-dark-gray font-weight-600 margin-10px-bottom">{{ $r->title }}</div>
                                <p class="width-75 lg-width-90 mx-auto">{{ $r->description }}</p>
                                <div class="feature-box-overlay bg-deep-pink"></div>
                            </div>
                        </div>
                        <!-- end features box -->
                    @endforeach
                </div>
            </div>
        </section>
        <!-- end services section -->
        <!-- start portfolio section -->
        <section id="work" class="no-padding-bottom wow fadeIn">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-xl-6 col-lg-8 mx-auto margin-eight-bottom text-center sm-margin-30px-bottom last-paragraph-no-margin">
                        <h5 class="alt-font font-weight-700 text-extra-dark-gray margin-20px-bottom text-uppercase">Our Product Catalogue</h5>
                    </div>  
                </div>
                <!-- <div class="row">
                    <div class="col-12">
                        <ul class="portfolio-filter nav nav-tabs justify-content-center border-0 portfolio-filter-tab-1 alt-font text-uppercase text-center margin-seven-bottom text-small font-weight-600">
                            <li class="nav active"><a href="javascript:void(0);" data-filter="*" class="light-gray-text-link text-very-small">All</a></li>
                            <li class="nav"><a href="javascript:void(0);" data-filter=".web" class="light-gray-text-link text-very-small">Platinum</a></li>
                            <li class="nav"><a href="javascript:void(0);" data-filter=".advertising" class="light-gray-text-link text-very-small">Diamond</a></li>
                            <li class="nav"><a href="javascript:void(0);" data-filter=".branding" class="light-gray-text-link text-very-small">Gold</a></li>
                            <li class="nav"><a href="javascript:void(0);" data-filter=".design" class="light-gray-text-link text-very-small">Silver</a></li>
                        </ul>
                    </div>
                </div> -->
            </div>
            <div class="container-fluid no-padding">
            <div class="row mx-0">
                <ul class="portfolio-grid work-4col hover-option2 gutter-small w-100">
                    <li class="grid-sizer"></li>
                    @foreach($wcatalogue as $r)
                    <!-- start image gallery item -->
                    <li class="grid-item wow fadeInUp">
                        <a href="{{ url($r->image) }}"  title="{{ $r->description }}" data-group="four-columns-zoom-animation" class="lightbox-group-gallery-item">
                            <figure>
                                <div class="portfolio-img bg-extra-dark-gray"><img src="{{ asset($r->image) }}" alt="{{ $w->title }}" class="project-img-gallery"/></div>
                                <figcaption>
                                    <div class="portfolio-hover-main text-center">
                                        <div class="portfolio-hover-box vertical-align-middle">
                                            <div class="portfolio-hover-content position-relative">
                                                <i class="ti-zoom-in text-white-2 fa-2x"></i>
                                            </div>
                                        </div>
                                    </div>
                                </figcaption>
                            </figure>
                        </a>
                    </li>
                    <!-- end image gallery item -->
                    @endforeach
                </ul>
            </div>
        </section>
        <!-- end portfolio section -->
        <!-- start contact section-->
        <section id="contact" class="wow fadeIn no-padding bg-extra-dark-gray">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 col-lg-6 cover-background sm-height-350px wow fadeIn" style="background: url({{ asset('images/wcimg.jpg') }})"></div>
                    <div class="col-12 col-lg-6 wow fadeIn">
                        <div class="padding-eleven-all text-center sm-no-padding-lr">
                            <div class="text-medium-gray alt-font text-small text-uppercase margin-5px-bottom sm-margin-three-bottom">Fill out the form and we'll be in touch soon!</div>
                            <h5 class="margin-55px-bottom text-white-2 alt-font font-weight-700 text-uppercase sm-margin-ten-bottom">Contact Us</h5>
                            @if(session('success'))
                                <p style="text-align: center;">
                                    <span class="bg-deep-pink" style="padding: 5px 8px; color: #fff; border-radius: 5px;">Thank You for contacting us!</span>
                                </p>
                            @endif
                            <div>
                                <div id="success-contact-form" class="no-margin-lr"></div>
                                <form action="{{ url('website-contact-submit') }}" method="post">
                                    @csrf
                                    <input type="hidden" name="id" value="{{ $w->id }}">
                                    <input type="text" name="name" id="name" placeholder="Name*" class="input-border-bottom" required>
                                    <input type="text" name="email" id="email" placeholder="E-mail*" class="input-border-bottom" required>
                                    <input type="text" name="phone" placeholder="Phone*" class="input-border-bottom" required>
                                    <textarea name="comment" id="comment" placeholder="Your Message" class="input-border-bottom" required></textarea>
                                    <button type="submit" class="btn btn-small btn-deep-pink margin-30px-top sm-margin-three-top">send message</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end contact section-->
        <!-- start form section-->
        <section class="wow fadeIn border-bottom border-color-extra-light-gray">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-lg-4 col-md-6 text-center md-margin-eight-bottom sm-margin-30px-bottom wow fadeInUp last-paragraph-no-margin">
                        <i class="icon-map-pin icon-medium margin-25px-bottom sm-margin-10px-bottom"></i>
                        <div class="text-extra-dark-gray text-uppercase text-small font-weight-600 alt-font margin-5px-bottom">Visit Us</div>
                        <p class="width-70 lg-width-85 md-width-70 sm-margin-10px-bottom mx-auto">{{ $w->address }}</p>
                    </div>
                    <div class="col-12 col-lg-4 col-md-6 text-center md-margin-eight-bottom sm-margin-30px-bottom wow fadeInUp last-paragraph-no-margin" data-wow-delay="0.2s">
                        <i class="icon-chat icon-medium margin-25px-bottom sm-margin-10px-bottom"></i>
                        <div class="text-extra-dark-gray text-uppercase text-small font-weight-600 alt-font margin-5px-bottom">Let's Talk</div>
                        <p class="width-70 lg-width-85 md-width-70 sm-margin-10px-bottom mx-auto">Phone: <a href="{{ url('tel:'.$w->phone) }}">{{ $w->phone }}</a> </p>
                    </div>
                    <div class="col-12 col-lg-4 col-md-6 text-center sm-margin-30px-bottom wow fadeInUp last-paragraph-no-margin" data-wow-delay="0.4s">
                        <i class="icon-envelope icon-medium margin-25px-bottom sm-margin-10px-bottom"></i>
                        <div class="text-extra-dark-gray text-uppercase text-small font-weight-600 alt-font margin-5px-bottom">E-mail Us</div>
                        <p class="width-70 lg-width-85 md-width-70 sm-margin-10px-bottom mx-auto"><a href="{{ url('mailto:'.$w->email) }}">{{ $w->email }}</a></p>
                    </div>
                </div>
            </div>
        </section>
        <!-- end form section-->
        <!-- start footer --> 
        <footer class="footer-strip padding-50px-tb sm-padding-30px-tb">
            <div class="container">
                <div class="row align-items-center">
                    <!-- start logo -->
                    <div class="col-md-3 text-center text-md-left sm-margin-20px-bottom">
                        
                    </div> 
                    <!-- end logo -->
                    <!-- start copyright -->
                    <div class="col-md-6 text-center text-small alt-font sm-margin-10px-bottom">
                        &copy; {{ date('Y') }} {{ $w->title }} is Presented by <a href="http://www.sonamandi.com" target="_blank" title="Sonamandi">Sonamandi.com</a> & Powered by <a href="http://www.expertwebtech.com" target="_blank" title="Xpert Webtech">Xpert Webtech Pvt. Ltd.</a>.
                    </div>
                    <!-- end copyright -->
                    <!-- start social media -->
                    <div class="col-md-3 text-center text-md-right">
                        <div class="social-icon-style-8 d-inline-block align-middle">
                            <ul class="small-icon mb-0">
                                @if($w->facebook)
                                <li><a class="facebook" href="{{ url($w->facebook) }}" target="_blank"><i class="fab fa-facebook-f" aria-hidden="true"></i></a></li>
                                @endif
                                @if($w->twitter)
                                <li><a class="twitter" href="{{ url($w->twitter) }}" target="_blank"><i class="fab fa-twitter"></i></a></li>
                                @endif
                                @if($w->instagram)
                                <li><a class="instagram" href="{{ url($w->instagram) }}" target="_blank"><i class="fab fa-instagram"></i></a></li>
                                @endif
                            </ul>
                        </div>
                    </div>
                    <!-- end social media -->
                </div>
            </div>
        </footer>
        <!-- end footer -->
        <div class="sonamandi-logo" style="position: fixed; bottom: 25px; left: 25px; z-index: 99999999;">
            <a href="{{ url('/') }}" title="Powered By Sonamandi.com">
                <img src="{{ asset('images/logo.png') }}" style="width: 100%;">
            </a>
        </div>
        @if(session('success'))
            <div id="successModel" style="background-color: rgba(0,0,0,0.7); position: fixed; width: 100%; height: 100vh; top: 0px; left: 0px; z-index: 9999999; display: flex; justify-content: center; align-items: center;">
                <div onclick="closeSuccess()" style="position: absolute; right: 5%; top: 5%; cursor: pointer;">
                    <i class="far fa-times-circle text-white" style="font-size: 35px;"></i>
                </div>
                <div style="background-color: #fff; padding: 40px; border-top: 5px solid #bd9431;">
                    <h4 style="text-align: center; margin">Thank You</h4>
                    <p style="text-align: center; margin-bottom: 0px;">
                        We will get back to you soon!<br>
                        <i class="far fa-smile" style="color: #bd9431; font-size: 35px; margin-top: 10px;"></i>
                    </p>
                </div>
            </div>
            <script>
                function closeSuccess() {
                    var x = document.getElementById('successModel');
                    x.style.display = 'none';
                }
            </script>
        @endif
        @include('common/main_footscripts')
    </body>
</html>