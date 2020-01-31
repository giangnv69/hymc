@extends('frontend.master')
@section('main')
<link rel="stylesheet" type="text/css" title="" href="{{ __BASE_URL__ }}/css/tool.min.css">
	<section class="section-login">
	    <div class="bs-container">
	        <div class="bs-row">
	            <div class="bs-col">
	            	<form action="{{ route('home.sign-in.post') }}" method="POST">
	            		{{ csrf_field() }}
		                <div class="module module-login" data-aos="fade-up" data-aos-delay="200">
		                    <div class="module-content">
		                        <div class="login-form">
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
		                                <input type="email" class="login__input" placeholder="Your Email" name="email" required=""
		                                value="{{ old('email') }}" />
		                            </div>
		                            <div class="item">
		                                <input type="password" class="login__input" placeholder="Password" name="password" required="" />
		                                <span class="show__text">
		                                	<i class="far fa-eye show_password"></i>
		                                	<i class="far fa-eye-slash hidden__password"></i>
		                                </span>
		                            </div>
		                            <div class="item">
		                                <button class="login__btn" type="submit">Continue</button>
		                                <a href="#" class="link">Forgot password?</a>
		                            </div>
		                        </div>
		                        <p class="desc" data-aos="fade-up" data-aos-delay="500">
		                            New to HYMC? <a href="{{ route('home.sign-up') }}" class="link blue">Create an account</a>
		                        </p>
		                    </div>
		                </div>
	                </form>
	                <div class="hexagon-style">
	                    <div class="style1 style">
	                        <div class="rotate" data-aos="fade-right" data-aos-delay="300">
	                            <span class="style__main"></span>
	                        </div>
	                    </div>
	                    <div class="style2 style">
	                        <div class="rotate" data-aos="fade-right" data-aos-delay="600">
	                            <span class="style__main"></span>
	                        </div>
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
