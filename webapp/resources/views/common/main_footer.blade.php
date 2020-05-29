<!-- start footer --> 
<!-- <script> 
    var x = document.getElementById("demo"); 
    function getLocation() {
        if (navigator.geolocation) {
            navigator.geolocation.getCurrentPosition(
                // Success function
                showPosition, 
                // Error function
                null, 
                // Options. See MDN for details.
                {
                   enableHighAccuracy: true,
                   timeout: 5000,
                   maximumAge: 0
                });
        } else { 
            x.innerHTML = "Geolocation is not supported by this browser.";
        }
    }

    function showPosition(position) {
        x.innerHTML="Latitude: " + position.coords.latitude + 
        "<br>Longitude: " + position.coords.longitude;  
    }
   getLocation();
</script> -->
<footer class="footer-standard-dark bg-black" style="position: relative;  z-index: 10000;"> 
    <div class="footer-widget-area padding-five-tb sm-padding-30px-tb">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 widget border-right border-color-medium-dark-gray md-no-border-right md-margin-30px-bottom sm-text-center">
                    <!-- start logo -->
                    <a href="{{ url('/') }}" class="margin-20px-bottom d-inline-block"><img src="images/logo.png" data-rjs="images/logo.png" alt="" style="width: 50%"></a>
                    <!-- end logo --> 
                    @foreach($footer as $r) 
                    <p class="text-small text-white width-95 sm-width-100" style="text-align:justify;">{{ $r->content }}</p> 
                    @endforeach 
                    @foreach($social as $r)
                    <div class="social-icon-style-8 d-inline-block vertical-align-middle">
                        <ul class="small-icon no-margin-bottom">
                            <li><a class="facebook text-white-2" href="{{ $r->facebook }}" target="_blank"><i class="fab fa-facebook-f" aria-hidden="true"></i></a></li>
                            <li><a class="twitter text-white-2" href="{{ $r->twitter }}" target="_blank"><i class="fab fa-twitter"></i></a></li>
                            <li><a class="instagram text-white-2" href="{{ $r->instagram }}" target="_blank"><i class="fab fa-instagram no-margin-right" aria-hidden="true"></i></a></li>
                        </ul>
                    </div>
                    
                    @endforeach 
                    
                    <!-- end social media -->
                </div>
                <!-- start additional links -->
                <div class="col-lg-3 col-md-6 widget border-right border-color-medium-dark-gray padding-45px-left md-padding-15px-left md-no-border-right md-margin-30px-bottom text-center text-md-left">
                    <div class="widget-title alt-font text-white text-uppercase margin-10px-bottom font-weight-600" style="font-size: 18px;">Useful Links</div>
                     <p id="citydemo" style="color:white;"></p>

                    <ul class="list-unstyled">
                        <!-- <li><a class="text-small text-white" href="{{ url('association') }}">Association</a></li>
                        <li><a class="text-small text-white" href="{{ url('news') }}">News</a></li>
                        <li><a class="text-small text-white" href="{{ url('blogs') }}">Blog</a></li>
                        <li><a class="text-small text-white" href="{{ url('catalogue') }}">Catalogue</a></li>
                        <li><a class="text-small text-white" href="{{ url('blacklist') }}">Blacklist</a></li>
                        <li><a class="text-small text-white" href="{{ url('directory') }}">Directory</a></li>
                        <li><a class="text-small text-white" href="{{ url('jobs') }}">Jobs</a></li>
                        <li><a class="text-small text-white" href="{{ url('shop') }}">Shop</a></li> -->
                        <li><a class="text-small text-white" href="{{ url('/') }}">Home</a></li>
                        @if(Auth::user() && Auth::user()->is_approved == 1)
                            <li><a class="text-small text-white" href="{{ url('association') }}">Association</a></li>
                        @endif
                        @if(Auth::user() && Auth::user()->is_admin == 1)
                            <li><a class="text-small text-white" href="{{ url('association') }}">Association</a></li>
                        @endif
                        <li><a class="text-small text-white" href="{{ url('news') }}">News</a></li>
                        <li><a class="text-small text-white" href="{{ url('blogs') }}">Blog</a></li>
                        <li><a class="text-small text-white" href="{{ url('catalogue') }}">Catalogue</a></li>
                        @if(Auth::user() && Auth::user()->is_approved == 1)
                            <li><a class="text-small text-white" href="{{ url('blacklist') }}">Credit Score</a></li>
                        @endif
                        @if(Auth::user() && Auth::user()->is_admin == 1)
                            <li><a class="text-small text-white" href="{{ url('blacklist') }}">Credit Score</a></li>
                        @endif
                        <li><a class="text-small text-white" href="{{ url('directory') }}">Directory</a></li>
                        <li><a class="text-small text-white" href="{{ url('jobs') }}">Jobs</a></li>
                        <li><a class="text-small text-white" href="{{ url('shop') }}">Shop</a></li>
                    </ul>
                </div>
                <!-- end additional links -->
                <!-- start contact information -->
                <div class="col-lg-3 col-md-6 widget border-right border-color-medium-dark-gray padding-45px-left md-padding-15px-left md-clear-both md-no-border-right sm-margin-30px-bottom text-center text-md-left">
                    <div class="widget-title alt-font text-white text-uppercase margin-10px-bottom font-weight-600" style="font-size: 18px;">Contact Info</div>
                    <p class="text-small d-block margin-15px-bottom width-80 sm-width-100 text-white"><i class="fas fa-map-marker-alt padding-5px-right"></i> ADDRESS<br> Greater Noida, Uttar Pradesh, India - 210308.</p>
                    <div class="text-small text-white margin-15px-bottom"><i class="fas fa-envelope padding-5px-right"></i>Email<br><a href="mailto:sales@domain.com" class=" text-white">info@sonamandi.com</a></div>
                    <div class="text-small text-white margin-15px-bottom"><i class="fas fa-phone padding-5px-right"></i>Phone<br>+91 987 654 3210</div>
                </div>
                <!-- end contact information -->
                <!-- start instagram -->
                <div class="col-lg-3 col-md-6 widget padding-45px-left md-padding-15px-left text-center text-md-left">
                    <div class="widget-title alt-font text-white text-uppercase margin-20px-bottom font-weight-600" style="font-size: 20px;">Connect on Facebook</div>
                    <div class="">
                        <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2FSonamandi-2204211909696625%2F&tabs=timeline&width=340&height=300&small_header=true&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" height="300" style="border:none;overflow:hidden; width: 100%;" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>
                    </div>
                </div>
                <!-- end instagram -->
            </div>
        </div>
    </div>
    <div class="bg-dark-footer padding-10px-tb text-center sm-padding-10px-tb" style="background-color: #000033;">
        <div class="container">
            <div class="row">
                <!-- start copyright -->
                <div class="col-md-6 text-md-left text-small text-center text-white">&copy; @php date('Y') @endphp Sonamandi is Proudly Powered by <a href="http://www.expertwebtech.com" target="_blank" class="text-white">Xpert Webtech</a></div>
                <!-- <div class="col-md-6 text-md-right text-small text-center">
                    <a href="javascript:void(0);" class="text-dark-gray">Term and Condition</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="javascript:void(0);" class="text-dark-gray">Privacy Policy</a>
                </div> -->
                <!-- end copyright -->
            </div>
        </div>
    </div>
</footer>

<!-- end footer -->