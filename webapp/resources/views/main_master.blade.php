<!doctype html>
<html class="no-js" lang="en">
    <head> 
    	@include('common/main_metatags')
    	@include('common/main_headscripts')
    	@yield('styles') 
    </head>
    <body class="bg-extra-light-gray"> 
    	@include('common/main_header')
        @include('common/main_ad_columns')
            <section class="body-section no-padding-bottom">
                <div class="container-fluid">
                    <div class="row justify-content-center">
                        @yield('main_content')
                    </div>
                </div>
            </section>
        @include('common/main_footer') 
    	@include('common/main_footscripts')
    	@yield('scripts')
    </body>
</html>