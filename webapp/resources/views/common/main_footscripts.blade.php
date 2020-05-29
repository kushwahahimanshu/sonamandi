<!-- javascript libraries -->
<script type="text/javascript" src="{{ asset('main/js/jquery.js') }}"></script>
<script type="text/javascript" src="{{ asset('main/js/modernizr.js') }}"></script>
<script type="text/javascript" src="{{ asset('main/js/bootstrap.bundle.js') }}"></script>
<script type="text/javascript" src="{{ asset('main/js/jquery.easing.1.3.js') }}"></script>
<script type="text/javascript" src="{{ asset('main/js/skrollr.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('main/js/smooth-scroll.js') }}"></script>
<script type="text/javascript" src="{{ asset('main/js/jquery.appear.js') }}"></script>
<!-- menu navigation -->
<script type="text/javascript" src="{{ asset('main/js/bootsnav.js') }}"></script>
<script type="text/javascript" src="{{ asset('main/js/jquery.nav.js') }}"></script>
<!-- animation -->
<script type="text/javascript" src="{{ asset('main/js/wow.min.js') }}"></script>
<!-- page scroll -->
<script type="text/javascript" src="{{ asset('main/js/page-scroll.js') }}"></script>
<!-- swiper carousel -->
<script type="text/javascript" src="{{ asset('main/js/swiper.min.js') }}"></script>
<!-- counter -->
<script type="text/javascript" src="{{ asset('main/js/jquery.count-to.js') }}"></script>
<!-- parallax -->
<script type="text/javascript" src="{{ asset('main/js/jquery.stellar.js') }}"></script>
<!-- magnific popup -->
<script type="text/javascript" src="{{ asset('main/js/jquery.magnific-popup.min.js') }}"></script>
<!-- portfolio with shorting tab -->
<script type="text/javascript" src="{{ asset('main/js/isotope.pkgd.min.js') }}"></script>
<!-- images loaded -->
<script type="text/javascript" src="{{ asset('main/js/imagesloaded.pkgd.min.js') }}"></script>
<!-- pull menu -->
<script type="text/javascript" src="{{ asset('main/js/classie.js') }}"></script>
<script type="text/javascript" src="{{ asset('main/js/hamburger-menu.js') }}"></script>
<!-- counter  -->
<script type="text/javascript" src="{{ asset('main/js/counter.js') }}"></script>
<!-- fit video  -->
<script type="text/javascript" src="{{ asset('main/js/jquery.fitvids.js') }}"></script>
<!-- skill bars  -->
<script type="text/javascript" src="{{ asset('main/js/skill.bars.jquery.js') }}"></script> 
<!-- justified gallery  -->
<script type="text/javascript" src="{{ asset('main/js/justified-gallery.min.js') }}"></script>
<!--pie chart-->
<script type="text/javascript" src="{{ asset('main/js/jquery.easypiechart.min.js') }}"></script>
<!-- instagram -->
<script type="text/javascript" src="{{ asset('main/js/instafeed.min.js') }}"></script>
<!-- retina -->
<script type="text/javascript" src="{{ asset('main/js/retina.min.js') }}"></script>
<!-- revolution -->
<script type="text/javascript" src="revolution/js/jquery.themepunch.tools.min.js') }}"></script>
<script type="text/javascript" src="revolution/js/jquery.themepunch.revolution.min.js') }}"></script>
<!-- revolution slider extensions (load below extensions JS files only on local file systems to make the slider work! The following part can be removed on server for on demand loading) -->
<!--<script type="text/javascript" src="revolution/js/extensions/revolution.extension.actions.min.js') }}"></script>
<script type="text/javascript" src="revolution/js/extensions/revolution.extension.carousel.min.js') }}"></script>
<script type="text/javascript" src="revolution/js/extensions/revolution.extension.kenburn.min.js') }}"></script>
<script type="text/javascript" src="revolution/js/extensions/revolution.extension.layeranimation.min.js') }}"></script>
<script type="text/javascript" src="revolution/js/extensions/revolution.extension.migration.min.js') }}"></script>
<script type="text/javascript" src="revolution/js/extensions/revolution.extension.navigation.min.js') }}"></script>
<script type="text/javascript" src="revolution/js/extensions/revolution.extension.parallax.min.js') }}"></script>
<script type="text/javascript" src="revolution/js/extensions/revolution.extension.slideanims.min.js') }}"></script>
<script type="text/javascript" src="revolution/js/extensions/revolution.extension.video.min.js') }}"></script>-->
<!-- setting -->
<script type="text/javascript" src="{{ asset('main/js/main.js') }}"></script>
<script type="text/javascript" src="{{ asset('main/js/scrollForever.js') }}"></script>
<!-- Axios -->
<script src="{{ asset('https://unpkg.com/axios/dist/axios.min.js') }}"></script>
 

<!-- <script type="text/javascript">
  var city = New Delhi;
   getGeoLocation();
   
  function getGeoLocation() {
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(showPosition);
      } else {
        console.log("Geolocation is not supported by this browser.");
      }
  }
  function showPosition(position) {
    console.log("Latitude: " + position.coords.latitude + " Longitude: " + position.coords.longitude);
    axios.get('https://maps.googleapis.com/maps/api/geocode/json', {
      params: {
        latlng: position.coords.latitude+','+position.coords.longitude,
        key: 'AIzaSyDCcZx8CKvG5Blrrlxqp_hZeeUFA0Mbktc'
      }
    })
    .then(function(response) {
      console.log(response);
    })
    .catch(function(error) {
      console.log(error);
    });
  }
</script> -->

<script>
  $("#demo1").scrollForever();
</script>

<script>
  
  window.addEventListener("load",function(){
  var ol=document.getElementById('overlay');
  ol.style.display="none";
  });
</script>
 
<!-- geoplugin link---->
<script language="JavaScript" src="http://www.geoplugin.net/javascript.gp" type="text/javascript"></script>

<!-- access location popup----> 
<script> 
  var x = document.getElementById("citydemo"); 
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
    x.innerHTML="city: "+geoplugin_city()+"<br>country: "+geoplugin_countryName(); 

    document.getElementById("citydemo").value = geoplugin_city();
  }  
  getLocation();  
</script>  

<script type="text/javascript">
      function createCookie(cookieName,cookieValue,daysToExpire)
     {
       var date = new Date();
       date.setTime(date.getTime()+(daysToExpire*24*60*60*1000));
       document.cookie = city + "=" + cookieValue + "; expires=" + date.toGMTString();
     }
      function accessCookie(cookieName)
     {
       var name = cookieName + "=";
       var allCookieArray = document.cookie.split(';');
       for(var i=0; i<allCookieArray.length; i++)
       {
         var temp = allCookieArray[i].trim();
         if (temp.indexOf(name)==0)
         return temp.substring(name.length,temp.length);
        }
        return "";
     }
      /*function checkCookie()
      {
         var user = accessCookie("testCookie");
         if (user!="")
            alert("Welcome Back " + user + "!!!");
         else
         {
            user = prompt("Please enter your name");
            num = prompt("How many days you want to store your name on your computer?");
            if (user!="" && user!=null)
            {
            createCookie("testCookie", user, num);
            }
         }
      }*/
</script>