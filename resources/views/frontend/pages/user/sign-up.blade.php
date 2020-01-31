@extends('frontend.master')
@section('main')
<link rel="stylesheet" type="text/css" title="" href="{{ __BASE_URL__ }}/css/tool.min.css">
    <section class="section-login">
        <div class="bs-container">
            <div class="bs-row">
                <div class="bs-col">
                    <div class="module module-login">
                       	<form action="{{ route('home.sign-up.post') }}" method="POST">
                       		{{ csrf_field() }}
	                        <div class="module-content">
	                            <div class="login-form blue-form" data-aos="fade-right" data-aos-delay="300">
	                            	@if(count($errors) > 0)
	                            	<div class="item">
	                            		<div class="alert alert-danger alert-dismissible fade show" role="alert">
										  <ul>
										  	@foreach($errors->all() as $error)
										        <li>{!! $error !!}</li>
										     @endforeach
										  </ul>
										</div>
	                            	</div>
	                            	@endif
	                              	<div class="item">
	                                    <input type="text" class="login__input" placeholder="Country / Region of resident" name="country" required value="{{ old('country') }}">
	                                </div>
	                                <div class="item">
	                                    <input type="email" class="login__input" placeholder="Your email address" required="" name="email" value="{{ old('email') }}">
	                                </div>
	                                <div class="item">
	                                    <input type="password" class="login__input" placeholder="Choose a password" name="password" required>
	                                    <span class="show__text"><i class="far fa-eye show_password"></i><i class="far fa-eye-slash hidden__password"></i></span>
	                                    
	                                </div>
	                                <div class="item item-checkbox">
	                                   <label for="checkbox_input" class="checkbox-label" > <span class="check-show"><i class="fas fa-check"></i></span>I agree to receive news &amp; analytics</label>
	                                   <input type="checkbox" id="checkbox_input" required="">
	                                </div>
	                                <div class="item">
	                                    <button class="login__btn" type="submit">Continue</button>
	                                    <p class="note">By clicking Continue you confirm that you have read, understood, and agree with all the information in the <span class="blue">Client Agreement</span> and the service terms and conditions listned in the follewing documents: <span class="blue">General Business Term</span> and <span class="blue">Partnership Agreement.</span></p>
	                                </div>
	                            </div>
	                            <p class="desc signup__desc" data-aos="fade-up" data-aos-delay="500">
	                                Already have an account? <a href="#" class="link red">Sign In Now</a>
	                             </p>
	                        </div>
                        </form>
                    </div>
                    <div class="hexagon-style">
                        <div class="style1 style">
                            <div class="rotate" data-aos="fade-right" data-aos-delay="300"><span class="style__main"></span></div>
                        </div>
                        <div class="style2 style">
                            <div class="rotate" data-aos="fade-right" data-aos-delay="600"><span class="style__main"></span></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@stop
@section('script')
<script src="{{ __BASE_URL__ }}/js/tool.min.js"></script> 
	<script>
	  $(".login__input").focusin(function(){
	        $(this).parent(".item").addClass("focus");
	    });
	     $(".login__input").focusout(function(){
	        $(this).parent(".item").removeClass("focus");
	    });
	    $(".item-checkbox").find(".checkbox-label").click(function(){
	      if(!$(this).parent(".item").find("#checkbox_input").is(':checked')){
	          $(this).find(".check-show").addClass("active");
	      }else{
	         $(this).find(".check-show").removeClass("active"); 
	      }
	    });
	    $(".show__text").click(function(){
	        $(this).toggleClass("show");
	        if($(this).parent(".item").find(".login__input").attr("type") === "password"){
	            $(this).parent(".item").find(".login__input").attr("type", "text");
	        }else{
	            $(this).parent(".item").find(".login__input").attr("type", "password");
	        }
	    })
	</script>
@endsection