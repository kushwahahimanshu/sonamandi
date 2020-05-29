<style>
    .w3-button{border:none;display:inline-block;padding:8px 16px;vertical-align:middle;overflow:hidden;text-decoration:none;color:inherit;background-color:inherit;text-align:center;cursor:pointer;white-space:nowrap}
    .w3-display-left{position:absolute;top:50%;left:0%;transform:translate(0%,-50%);-ms-transform:translate(-0%,-50%)}
    .w3-display-container { position: relative;}
    .w3-display-right{position:absolute;top:50%;right:0%;transform:translate(0%,-50%);-ms-transform:translate(0%,-50%)}
    .w3-display-container:hover .w3-display-hover{display:block}.w3-display-container:hover span.w3-display-hover{display:inline-block}.w3-display-hover{display:none}
    .w3-black, .w3-hover-black:hover {color: #fff!important; background-color: #000!important; }
    .w3-content { max-width: 980px; margin-left: auto;  margin-right: auto 
</style>
<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="{{ asset('https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v4.0') }}"></script>   

<div class="row justify-content-center bg-white padding-15px-all margin-10px-bottom">
    <div class="col-12 col-lg-8 last-paragraph-no-margin">
        <h5 class="alt-font text-center text-extra-dark-gray font-weight-600 no-margin-bottom">Jewellery Catalogue</h5>
    </div>
</div> 
<div class="row bg-white padding-15px-all"> 
    <div class="col-12 p-0"> 
        <!-- start post item --> 
        <div class="row">
            <div class="col-12 col-lg-8"> 
                @foreach($products as $r) 
                    <div class="w3-content w3-display-container"> 
                        <div class="w3-display-container mySlides">
                          <a href="{{ url($r->image) }}">
                           <img class="width-100" src="{{ asset($r->image) }}" alt="">
                          </a>  
                        </div>  
                        @if($flag==3) 
                        <a href="{{ url('previousPost/'. $r->id) }}"><button class="w3-button w3-display-left w3-black" onclick="plusDivs(-1)" id="example1_previous"class='enableOnInput'>&#10094;</button></a>
                        <a href="{{ url('nextPost/'. $r->id) }}"><button class="w3-button w3-display-right w3-black" onclick="plusDivs(1)" class='enableOnInput'>&#10095;</button> </a>
                        @endif   
                    </div> 
                @endforeach 
            </div>
             
            @foreach($products as $r)
                <div class="col-12 col-lg-4"> 
                     
                    <form action="{{ url('downloadbutton') }}" method="post">
                        @csrf  
                        <input type="hidden" name="id" value="{{$r->id}}">  
                        <a  href="{{url($r-> image)}}" download="images/{{$r->image}}">
                        <button  class="btn btn-black center-col width-100 margin-10px-bottom" name="total_download" value="1">Download</button></a> 
                    </form>
                    <b style="color:black;">Total Download: {{ $r->total_download }}</b>&nbsp;&nbsp;&nbsp;
                    <b  style="color:black;">Total Views : {{$r->total_view}}</b> 
                    <b style="color:black;">Uploaded By:</b>
                    <div> 
                        <?php
                            $user_data = DB::table('users')->where('id', $r->user_id)->first();
                        ?>
                        <img  style="width:50px; height:50px; border-radius:20px; float:left;" src="{{ asset($user_data->image) }}" alt="image"><p style="padding-left:80px; padding-top:10px;">{{ $user_data->name }}</p>
                    </div>   
                    <!-- start pop-up with form section --> 
                    <center>
                        <a href="#contact-form" class="btn btn-medium btn-rounded btn-transparent-dark-gray wow fadeInDown popup-with-form">Get Quotation</a>
                        <!-- start form -->
                        <form id="contact-form" action="{{url('quotation')}}" method="post" class="white-popup-block mfp-hide col-lg-3 p-0 mx-auto">
                            {{ csrf_field() }}
                            <div class="padding-fifteen-all bg-white border-radius-6 lg-padding-seven-all">
                                <div class="text-extra-dark-gray alt-font text-large font-weight-600 margin-30px-bottom">Quotation's Form</div> 
                                <div> 
                                    <input type="text" name="name" id="name" placeholder="Name*" class="input-bg" required>
                                    <input type="text" name="phone_no" id="phone_no" placeholder="phone_no*" class="input-bg" required>
                                    <input type="hidden" name="cat_id" id="cat_id" value="{{ $r->id }}"  class="input-bg">

                                    <button   type="submit" class="btn btn-small border-radius-4 btn-black">send quotation</button>
                                </div>
                            </div>
                        </form><br>
                        <!-- end form --> 
                    </center><br>
                    <!-- end pop-up with form section --> 
                    
                    <div class="fb-like" data-href="http://www.sonamandi.com/catalogueimage/{{ $r->id }}" data-width="" data-layout="button_count" data-action="like" data-size="large" data-show-faces="true" data-share="true"></div>  
                    <a href="https://wa.me/?text=http://www.sonamandi.com" target="_blank" style="width: 27%;  border-radius: 4px;  font-size: 13px; background-color: #25D366; height: 28px; display: inline-block; zoom: 1; color: white; padding-top: 3px !important; text-align: center; /* line-height: 23;">Whatsapp</a> 
                    <h1 style="font-size: 22px; line-height: 30px; margin: 14px 0;">{{ $r->title }}</h1>
                    <div>
                        <label class="d-block no-margin-bottom">Categories List:</label> 
                    </div> 
                    <span style="font-size:13px;">
                       <a href="{{ url('catalogue?filter%5B%5D=Male')}}" style="color:#6f6f6f;">Male</a>&nbsp;,&nbsp;&nbsp;<a href="{{ url('catalogue?filter%5B%5D=Female')}}" style="color:#6f6f6f;">Female</a>&nbsp;,&nbsp;<a href="{{ url('catalogue?filter%5B%5D=Gold')}}" style="color:#6f6f6f;">Gold</a>&nbsp;,&nbsp;&nbsp;<a href="{{ url('catalogue?filter%5B%5D=Platinum')}}" style="color:#6f6f6f;">Platinum</a> 
                   </span><br>
                    <div>
                        <label class="d-block no-margin-bottom">Description:</label>
                        {!! $r->description !!}
                    </div> 
                </div>
                <div class="col-12">
                    <div class="fb-comments" data-href="http://www.sonamandi.com/directory-details/{{ $r->id }}" data-width="100%" data-numposts="10"></div>
                </div>
            @endforeach
        </div>
        <!-- end post item -->  
    </div>
</div>
 
<!-- <script>
var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
  showDivs(slideIndex += n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("mySlides");
  if (n > x.length) {slideIndex = 1}
  if (n < 1) {slideIndex = x.length}
  for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";  
  }
  x[slideIndex-1].style.display = "block";  
}
</script> -->
<!-- <script type='text/javascript'>
   var button = document.getElementById("clickme"),
  count = 0;
button.onclick = function() {
  count += 1;
button.innerHTML = "Click me: " + count;
};

</script> -->
<script>
    $(document).ready(function(){
   $(document).on("click",".login-button",function(){
     var form = $(this).closest("form");
     //console.log(form);
     form.submit();
   });
});
</script>