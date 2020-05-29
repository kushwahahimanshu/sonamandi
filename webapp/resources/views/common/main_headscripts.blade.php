<!-- animation -->
<link rel="stylesheet" href="{{ asset('main/css/animate.css') }}" />
<!-- bootstrap -->
<link rel="stylesheet" href="{{ asset('main/css/bootstrap.min.css') }}" />
<!-- et line icon --> 
<link rel="stylesheet" href="{{ asset('main/css/et-line-icons.css') }}" />
<!-- font-awesome icon -->
<link rel="stylesheet" href="{{ asset('main/css/font-awesome.min.css') }}" />
<!-- themify icon -->
<link rel="stylesheet" href="{{ asset('main/css/themify-icons.css') }}">
<!-- swiper carousel -->
<link rel="stylesheet" href="{{ asset('main/css/swiper.min.css') }}">
<!-- justified gallery  -->
<link rel="stylesheet" href="{{ asset('main/css/justified-gallery.min.css') }}">
<!-- magnific popup -->
<link rel="stylesheet" href="{{ asset('main/css/magnific-popup.css') }}" />
<!-- revolution slider -->
<link rel="stylesheet" type="text/css" href="{{ asset('main/revolution/css/settings.css') }}" media="screen" />
<link rel="stylesheet" type="text/css" href="{{ asset('main/revolution/css/layers.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('main/revolution/css/navigation.css') }}">
<!-- bootsnav -->
<link rel="stylesheet" href="{{ asset('main/css/bootsnav.css') }}">
<!-- style -->
<link rel="stylesheet" href="{{ asset('main/css/style.css') }}" />
<!-- responsive css -->
<link rel="stylesheet" href="{{ asset('main/css/responsive.css') }}" />
<!--[if IE]>
    <script src="{{ asset('js/html5shiv.js') }}"></script>
<![endif]-->
<style type="text/css">
	.text-blue {
		color: #000033;
	}
	.bg-blue {
		background-color: #000033;
	}
	.logo-div {
		position: absolute; 
		top: -30px; 
		left: 10px; 
		max-width: 150px;
	}
	.body-section {
		margin-top: 40px;
	}
	@media screen and (max-width: 480px) {
		.logo-div {
			max-width: 80px;
			top: 5px;
			left: 10px
		}
		.body-section {
			margin-top: 120px;
		}
	}
</style>
<style>
	.overlay{
		background-color: #06354e;
		display: flex;
		position: fixed;
		width: 100%;
		height: 100vh;
		justify-content: center;
		align-items: center;
		top: 0;
		left: 0;
		z-index: 999999999999;
	} 
</style>

<style> 
   @import url(//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css);
   /****** Style Star Rating Widget *****/ 
    .rating { 
      border: none;
      float: left;
    } 
    .rating > input { display: none; } 
    .rating > label:before { 
      margin: 5px;
      font-size: 1.25em;
      font-family: FontAwesome;
      display: inline-block;
      content: "\f005";
    } 
    .rating > .half:before { 
      content: "\f089";
      position: absolute;
    } 
    .rating > label { 
      color: #ddd; 
     float: right; 
    } 
    /***** CSS Magic to Highlight Stars on Hover *****/

    .rating > input:checked ~ label, /* show gold star when clicked */
    .rating:not(:checked) > label:hover, /* hover current star */
    .rating:not(:checked) > label:hover ~ label { color: #FFD700;  } /* hover previous stars in list */

    .rating > input:checked + label:hover, /* hover current star when changing rating */
    .rating > input:checked ~ label:hover,
    .rating > label:hover ~ input:checked ~ label, /* lighten current selection */
    .rating > input:checked ~ label:hover ~ label { color: #FFED85;  }  
</style>