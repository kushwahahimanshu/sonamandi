<!-- start header -->
<!-- <div  id="overlay" class="overlay">
    <img src="{{ asset('images/preloader.gif') }}" style="max-width: 300px;">
</div> -->
<header class="header-with-topbar fixed-topbar">
    <!-- topbar -->
    <div class="top-header-area bg-blue padding-10px-tb">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-10 col-6 text-uppercase alt-font d-flex align-items-center justify-content-center justify-content-md-start"> 
                   
                    <marquee class="text-white" onmouseover="this.stop();" onmouseout="this.start();" direction="left" scrollamount="3">Gold (24KT): ₹ {{ $header->kt_twentyfour }}  | Gold (22KT): ₹ {{ $header->kt_twentytwo }}  | Gold (18KT): ₹ {{ $header->kt_eighteen }}  | Gold (14KT): ₹ {{ $header->   kt_fourteen }}  | Silver (1gm): ₹ {{ $header->gm_one }} </marquee>
                     

                </div>
                <div class="col-md-2 col-6 d-flex  align-items-center justify-content-end">
                    <div class="icon-social-very-small display-inline-block line-height-normal">
                        @if(Auth::user())
                            <a href="{{ url('dashboard') }}" class="text-link-white-2 text-uppercase alt-font">Hi! {{ Auth::user()->name }}</a>
                        @else
                            <a href="{{ url('login') }}" class="text-link-white-2 text-uppercase alt-font">Login</a>
                            <span style="padding: 0px 3px;">|</span>
                            <a href="{{ url('register') }}" class="text-link-white-2 text-uppercase alt-font">Register</a> 
                        @endif           
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end topbar -->
    <!-- start navigation -->
    <nav class="navbar navbar-default bootsnav navbar-fixed-top header-light-transparent background-transparent nav-box-width navbar-expand-lg" style="z-index: 99999; min-height: 72px;">
        <!-- start logo -->
        <div class="logo-div">
            <a href="{{ url('/') }}" class=""><img src="{{ asset('images/logo.png') }}" data-rjs="{{ asset('images/logo.png') }}" class="logo-dark default" alt="Pofo"></a>
        </div>
        <!-- end logo -->
        <div class="container nav-header-container">
            
            <div class="col accordion-menu">
                <button type="button" class="navbar-toggler collapsed" data-toggle="collapse" data-target="#navbar-collapse-toggle-1">
                    <span class="sr-only">toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                 <div class="navbar-collapse collapse justify-content-end" id="navbar-collapse-toggle-1">
                    <ul id="accordion" class="nav navbar-nav navbar-left no-margin alt-font text-normal" data-in="fadeIn" data-out="fadeOut">
                        <!-- start menu item --> 
                        <li><a href="{{ url('/') }}">Home</a></li>
                        @if(Auth::user() && Auth::user()->is_approved == 1)
                            <li><a href="{{ url('association') }}">Association</a></li>
                        @endif
                        @if(Auth::user() && Auth::user()->is_admin == 1)
                            <li><a href="{{ url('association') }}">Association</a></li>
                        @endif
                        <li><a href="{{ url('news') }}">News</a></li>
                        <li><a href="{{ url('blogs') }}">Blog</a></li>
                        <li><a href="{{ url('catalogue') }}">Catalogue</a></li>
                        @if(Auth::user() && Auth::user()->is_approved == 1)
                            <li><a href="{{ url('blacklist') }}">Credit Score</a></li>
                        @endif
                        @if(Auth::user() && Auth::user()->is_admin == 1)
                            <li><a href="{{ url('blacklist') }}">Credit Score</a></li>
                        @endif
                        <li><a href="{{ url('rate') }}">Rate</a></li>

                        <li><a href="{{ url('directory') }}">Directory</a></li>
                        <li><a href="{{ url('jobs') }}">Jobs</a></li>
                        <li><a href="{{ url('shop') }}">Shop</a></li>
                        <!-- <li><a href="{{ url('contact') }}">Contact</a></li> -->
                    </ul>
                </div>
            </div>
        </div>
    </nav>
    <!-- end navigation --> 
    <!-- topbar -->
    <div class="top-header-area bg-blue padding-10px-tb" style="position: fixed; top: 102px;">
        <div class="container">
            <div class="">
                <form action="{{url('search')}}" method="get">
                    <div class="row d-flex justify-content-center">
                        <div class="col-md-8 col-sm-8 col-xs-12 center-col text-uppercase alt-font xs-no-padding-lr xs-text-center" style="padding-top:2px;">
                            <div class="center-col">
                                <input type="text" name="city" id="citydemo"  placeholder="Your city" onload="createCookie()" onload="accessCookie()"  style="font-size: 11px; line-height: 16px; border: none; max-width: 32%; border-top-left-radius: 20px; border-bottom-left-radius: 20px; margin-bottom: 0px;"> 
                                <!--  <input type="text" name="keyword" id="keyword" placeholder="What are you looking for?" style="font-size: 11px; line-height: 16px; border: none; max-width: 32%; margin-bottom: 0px;"> -->
                                <select  name="keyword" id="keyword" placeholder="What are you looking for?" style="font-size: 11px; line-height: 16px; border: none; max-width: 32%; margin-bottom: 0px;">
                                  <option value="news">News</option>
                                  <option value="blogs">Blogs</option>
                                  <option value="catalogue">Catalogue</option>
                                  <option value="directory">Directory</option>
                                  <option value="shop">Shops</option> 
                                  <option value="jobs">Jobs</option>  
                                </select> 
                                <button type="submit" class="text-white" style="font-size: 11px; line-height: 32px; border: none; width: 32%; border-top-right-radius: 20px; border-bottom-right-radius: 20px; margin-bottom: 0px; background-color: #bd9431;"><i class="fa fa-search"></i> Search</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- end topbar -->
<!-- end navigation --> 
</header>
<!-- end header -->
