<div class="row justify-content-center bg-white padding-15px-all margin-10px-bottom">
    <div class="col-12 col-lg-8 last-paragraph-no-margin">
        <h5 class="alt-font text-center text-extra-dark-gray font-weight-600 no-margin-bottom">Search Rate</h5>
    </div>
</div>
            @include('common.admin_message_box')

<div class="top-header-area bg-blue padding-10px-tb" style="top: 202px;">
        <div class="container">
            <div class="">
                <form action="{{url('current-rate')}}" method="post" enctype="multipart/form-data">
                  @csrf
                    <div class="row d-flex justify-content-center">
                        <div class="col-md-8 col-sm-8 col-xs-12 center-col text-uppercase alt-font xs-no-padding-lr xs-text-center" style="padding-top:2px;">
                            <div class="center-col"> 
                                <select  name="year" placeholder="What are you looking for?" style="font-size: 11px; line-height: 16px; border: none; max-width: 32%; margin-bottom: 0px;">
                                  @foreach($r as $r1)
                                   <option>{{$r1}}</option>
                                  @endforeach 
                                </select> 
                                <select  name="month" placeholder="What are you looking for?" style="font-size: 11px; line-height: 16px; border: none; max-width: 32%; margin-bottom: 0px;">
                                  <option value="01">January</option>
                                  <option value="02">Fabruary</option>
                                  <option value="03">March</option>
                                  <option value="04">April</option>
                                  <option value="05">May</option> 
                                  <option value="06">June</option>
                                  <option value="07">July</option>  
                                  <option value="08">August</option>  
                                  <option value="09">September</option>  
                                  <option value="10">October</option>  
                                  <option value="11">November</option>  
                                  <option value="12">December</option>  
                                </select> 
                                <button type="submit" class="text-white" style="font-size: 11px; line-height: 32px; border: none; width: 32%; border-top-right-radius: 20px; border-bottom-right-radius: 20px; margin-bottom: 0px; background-color: #bd9431;"><i class="fa fa-search"></i> Go</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">Sr.No.</th>
      <th scope="col">14 kt Gold</th>
      <th scope="col">18 kt Gold</th>
      <th scope="col">22 kt Gold</th>
      <th scope="col">24 kt Gold</th>
      <th scope="col">1 gm Silver</th>
      <th scope="col">Rate Date</th>
    </tr>
  </thead>
  <tbody>
    <?php $count=1; ?>
    @if($flag==1)
    @foreach($rate as $r)
    <tr>
      <th scope="row">{{$count}}</th>
      <td>{{$r->kt_fourteen}}</td>
      <td>{{$r->kt_eighteen}}</td>
      <td>{{$r->kt_twentytwo}}</td>
      <td>{{$r->kt_twentyfour}}</td>
      <td>{{$r->gm_one}}</td>
      <td>{{$r->rate_date}}</td>
    </tr>
    <?php $count++ ?>
    @endforeach
    @endif
  </tbody>
  <tbody>
    <?php $count=1; ?>
    @if($flag==2)
    @foreach($hk as $r)
    <tr>
      <th scope="row">{{$count}}</th>
      <td>{{$r->kt_fourteen}}</td>
      <td>{{$r->kt_eighteen}}</td>
      <td>{{$r->kt_twentytwo}}</td>
      <td>{{$r->kt_twentyfour}}</td>
      <td>{{$r->gm_one}}</td>
      <td>{{$r->rate_date}}</td>
    </tr>
    <?php $count++ ?>
    @endforeach
    @endif
  </tbody>
</table>
<!-- start get qutation -->  
            <div id="about" class="col-12 col-lg-12 blog-text p-0">
                <div class="content margin-20px-bottom md-no-padding-left ">
                      <h5 class="text-center text-extra-dark-gray">Subscribe to get alert</h5>
                    <div class="m-0 width-100 d-flex justify-content-center"> 
                        <a href="#contact-form" class="btn btn-medium  btn-deep-pink popup-with-form">Get Rate Notification</a>
                        <!-- start form -->
                        <form id="contact-form" action="{{url('rate-notification')}}" method="post" class="white-popup-block mfp-hide col-lg-3 p-0 mx-auto">
                            {{ csrf_field() }}
                            <div class="padding-fifteen-all bg-white border-radius-6 lg-padding-seven-all">
                               <div class="text-extra-dark-gray alt-font text-large font-weight-600 margin-30px-bottom">Want to get gold price notification just subscribe</div> 
                                <div> 
                                    <input type="text" name="name" id="name" placeholder="Name*" class="input-bg" required>
                                    <input type="email" name="email" id="email" placeholder="Email*" class="input-bg" required>
                                    <input type="text" name="phone" id="phone_no" placeholder="phone_no*" class="input-bg" required>
                                    <select name="type">
                                      <option value="kt_fourteen" selected>14 kt Gold</option>
                                      <option value="kt_eighteen">18 kt Gold</option>
                                      <option value="kt_twentytwo">22 kt Gold</option>
                                      <option value="kt_twentyfour">24 kt Gold</option>
                                      <option value="gm_one">1 gm Silver</option>
                                    </select>
                                    <input type="text" name="price" id="rate"  class="input-bg*" placeholder="Wishing price*" required>
                                    <button   type="submit" class="btn btn-small border-radius-4 btn-black">send Notification</button>
                                </div>
                            </div>
                        </form><br>
                        <!-- end form --> 
                    </div>
                </div>
            </div> 
            <!-- end get qutation --> 
    