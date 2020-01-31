@extends('frontend.master')
@section('main')
	
	<?php if(!empty($brand)){
		$brand = json_decode($brand->content);
	} ?>

	<?php if(!empty($data)){
		$content = json_decode($data->content);
	} ?>
<link rel="stylesheet" type="text/css" title="" href="{{ __BASE_URL__ }}/css/tool.min.css">
	<section class="section-banner banner-page">
        <div class="bs-container">
            <div class="bs-row">
                <div class="bs-col">
                    <div class="module module-banner">
                        <div class="module-header">
                            <h2 class="title" data-aos="fade-up" 
                            data-aos-delay="100" data-aos-duration="500">{{ @$content->sec_first->title }}</h2>
                            <p class="desc" data-aos="fade-up" data-aos-delay="300" data-aos-duration="500">
                            	{!! @$content->sec_first->content !!}
                        	</p>
                        </div>
                        <div class="module-content">
                            <div class="banner-button">
                                <a href="{{ @$content->sec_first->links }}" class="banner__link">Start Now</a>
                            </div>
                        </div>
                        <div class="module-img trade-img">
                            <img src="{{ @$content->sec_first->image }}" alt="" class="banner__img" data-aos="fade-down" data-aos-delay="100" />
                        </div>
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
                            <div class="style3 style">
                                <div class="rotate" data-aos="fade-right" data-aos-delay="900">
                                    <span class="style__main"></span>
                                </div>
                            </div>
                            <div class="style4 style">
                                <div class="rotate" data-aos="fade-right" data-aos-delay="1200">
                                    <span class="style__main"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- <div class="contact">
            <div class="contact-item phone-item">
                <div class="item-content">
                    <img src="{{ __BASE_URL__ }}/images/icon_phone.gif" alt="" />
                    <p class="desc">Hotline:</p>
                    <p class="phone__number">{{ @$site_info->site_phone }}</p>
                </div>
            </div>
            <div class="contact-item chat-item">
                <div class="item-content chat-show">
                    <img src="{{ __BASE_URL__ }}/images/icon_chat.gif" alt="" />
                    <p class="desc">Livechat</p>
                </div>
            </div>
        </div> -->
    </section>

     <section class="section-table">
        <div class="bs-container">
            <div class="module module-table">
                <div class="bs-row row-lg-15">
                    <div class="bs-col lg-100-15">
                        <div class="bs-tab">
                            <div class="tab-container">
                                <div class="tab-control">
                                    <span class="control__show">Account Types</span>
                                    <ul class="control-list">
                                        <li class="control-list__item active" tab-show="#tab1">
                                            Account Types
                                        </li>
                                        <li class="control-list__item" tab-show="#tab2">
                                            MetaTrader 5
                                        </li>
                                        <li class="control-list__item" tab-show="#tab3">
                                            Range of Markets
                                        </li>
                                    </ul>
                                </div>
                                <div class="tab-content">
                                    <div class="tab-item trading-item active" id="tab1">
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
                                        <div class="content">
                                            <div class="contentBanner">
                                                <h2 class="title bold">{{ @$content->sec_tab_1->title }}</h2>
                                                <p class="text-p text-p2">{{ @$content->sec_tab_1->sort_desc }}</p>
                                            </div>
                                            @if (!empty($content->sec_tab_1->content))
                                            	@foreach ($content->sec_tab_1->content as $key => $value)
                                            		 <div class="account">
		                                                <div class="bs-row row-lg-15 row-md-10 row-sm-5 row-xs-5">
		                                                    <div class="bs-col lg-30-15 md-30-10 sm-30-5 xs-100-5">
		                                                        <div class="item">
		                                                            <p class="text-p">
		                                                                <span class="span-name">
		                                                                    {!! @$value->title !!}
		                                                                </span>
		                                                                
		                                                            </p>
		                                                        </div>
		                                                    </div>
		                                                    <div class="bs-col lg-40-15 md-40-10 sm-40-5 xs-100-5">
		                                                        <div class="itemCheck">
		                                                            {!! @$value->content !!}
		                                                        </div>
		                                                    </div>
		                                                    <div class="bs-col lg-30-15 md-30-10 sm-30-5 xs-100-5">
		                                                        <div class="itemOpen">
		                                                            <a href="{{ @$value->links }}">{{ @$value->title_links }}</a>
		                                                        </div>
		                                                    </div>
		                                                </div>
		                                            </div>
                                            	@endforeach
                                            @endif
                                        </div>
                                    </div>
                                    <div class="tab-item trading-item" id="tab2">
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
                                        <div class="content">
                                            <div class="contentBanner">
                                                <h2 class="title bold">{{ @$content->sec_tab_2->title }}</h2>
                                                <div class="right">
                                                    <a href="{{ @$content->sec_tab_2->links_1 }}" class="download">
                                                    	{{ @$content->sec_tab_2->title_links_1 }}
                                                    </a>
                                                    <a href="{{ @$content->sec_tab_2->links_2 }}" class="use">
                                                       {{ @$content->sec_tab_2->title_links_2 }}
                                                    </a>
                                                </div>
                                                <div class="clearfix"></div>
                                                
                                                {!! @$content->sec_tab_2->content !!}
                                               
                                                
                                            </div>
                                            <div class="contentBody contentMeta">
                                                <div class="bs-row row-lg-10 row-md-10 row-sm-10 row-xs-5">
                                                	@if (!empty(@$content->sec_tab_2->list_commit))
                                                		@foreach ($content->sec_tab_2->list_commit as $key=> $value )
                                                			<div class="bs-col lg-20-10 md-20-10 sm-20-10 xs-50-5">
		                                                        <div class="item">
		                                                            <div class="icon">
		                                                                <img src="{{ @$value->image }}" alt="" />
		                                                            </div>
		                                                            <div class="content2">
		                                                                {!! @$value->content !!}
		                                                            </div>
		                                                        </div>
		                                                    </div>
                                                		@endforeach
                                                	@endif
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-item trading-item" id="tab3">
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
                                        <div class="content">
                                            <div class="contentBanner">
                                                <h2 class="title bold">{{ @$content->sec_tab_3->title }}</h2>
                                                <p class="p-text">
                                                   {{ @$content->sec_tab_3->sort_desc }}
                                                </p>
                                            </div>
                                            <div class="BodyTable">
                                                <div class="bs-tab">
                                                    <div class="tab-container">
                                                        <div class="clearfix">
                                                            <ul class="control-list">
                                                            	@if (!empty(@$content->sec_tab_3->list_content))
                                                            		@foreach ($content->sec_tab_3->list_content as $key => $value)
                                                            			@if ($loop->index < 4)
	                                                            			<li class="control-list__item control_li" tab-show="#tab{{ $loop->index + 1 }}_1">
			                                                                    <div class="control-list__content">
			                                                                        <div class="img">
			                                                                            <img src="{{ @$value->image }}" alt="" />
			                                                                        </div>
			                                                                        <p class="text">{{ @$value->title }}</p>
			                                                                    </div>

			                                                                </li>
		                                                                @endif
                                                            		@endforeach
                                                            	@endif
                                                            </ul>
                                                        </div>
                                                        <div class="tab-content active">
                                                        	@if (!empty(@$content->sec_tab_3->list_content))
                                                        		@foreach ($content->sec_tab_3->list_content as $key => $value)
		                                                            <div class="tab-item" id="tab{{ $loop->index + 1 }}_1">
		                                                                 <div class="item">
		                                                                    <h3 class="title">{{ @$value->title }}</h3>
		                                                                    {!! @$value->content !!}
		                                                                </div>
		                                                            </div>
                                                        		@endforeach
                                                        	@endif
                                                        </div>
                                                        <div class="clearfix">
                                                            <ul class="control-list">
                                                                @if (!empty(@$content->sec_tab_3->list_content))
                                                            		@foreach ($content->sec_tab_3->list_content as $key => $value)
                                                            			@if ($loop->index >= 4)
	                                                            			<li class="control-list__item control_li" tab-show="#tab{{ $loop->index + 1 }}_1">
			                                                                    <div class="control-list__content">
			                                                                        <div class="img">
			                                                                            <img src="{{ @$value->image }}" alt="" />
			                                                                        </div>
			                                                                        <p class="text">{{ @$value->title }}</p>
			                                                                    </div>

			                                                                </li>
		                                                                @endif
                                                            		@endforeach
                                                            	@endif
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

	
	<section class="section-hmc">
        <div class="bs-container">
            <div class="module module-hmc">
                <div class="bs-row row-lg-15 row-md-10 row-sm-5">
                    <div class="bs-col lg-50-15 md-50-10 sm-60-5">
                        <div class="module-header">
                            <h2 class="title">
                                Trading with HYMC
                            </h2>
                        </div>
                        <div class="module-content">
                            <p class="p-text">
                                Start trading today on the world’s financial markets with
                                confidence.
                            </p>
                            @if (!Auth::guard('member')->check())
								<a href="{{ route('home.sign-up') }}" class="open">Open Account</a>
                            	<a href="{{ route('home.log-in') }}" class="login">Log in</a>
                            @endif
                        </div>
                    </div>
                    <div class="bs-col lg-50-15 md-50-10 sm-40-5">
                        <div class="img">
                            <img src="{{ __BASE_URL__ }}/images/pc.gif" alt="" />
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="section-brand">
        <div class="bs-container">
            <div class="bs-row">
                <div class="bs-col">
                    <div class="module module-brand">
                        <div class="module-content">
                            <div class="brand-slide">
                            	@if (!empty($brand->sec_sixth->gallery))
		                            @foreach ($brand->sec_sixth->gallery as $item)
										<div class="slide-item">
		                                    <div class="brand-item">
		                                        <a href="#" class="link">
		                                        	<img src="{{ @$item }}" alt="" />
		                                        </a>
		                                    </div>
		                                </div>
									@endforeach
								@endif
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
	    $(".info-slide").slick({
	        slidesToShow: 6,
	        slidesToScroll: 1,
	        arrows: false,
	        centerMode: false,
	        centerPadding: "0",
	        dots: false,
	        fade: false,
	        autoplay: true,
	        infinite: true,
	        draggable: true,
	        swipeToSlide: true,
	        touchMove: true,
	        swipe: true,
	        responsive: [{
	                breakpoint: 992,
	                settings: {
	                    slidesToShow: 5,
	                    slidesToScroll: 1
	                }
	            },

	            {
	                breakpoint: 550,
	                settings: {
	                    slidesToShow: 4,
	                    slidesToScroll: 1
	                }
	            },

	            {
	                breakpoint: 479,
	                settings: {
	                    slidesToShow: 2,
	                    slidesToScroll: 1
	                }
	            }
	        ]
	    });
	    $(".brand-slide").slick({
	        slidesToShow: 7,
	        slidesToScroll: 1,
	        arrows: false,
	        centerMode: false,
	        centerPadding: "0",
	        dots: true,
	        fade: false,
	        autoplay: true,
	        infinite: true,
	        draggable: true,
	        swipeToSlide: true,
	        touchMove: true,
	        swipe: true,

	        responsive: [{
	                breakpoint: 992,
	                settings: {
	                    slidesToShow: 5,
	                    slidesToScroll: 1
	                }
	            },

	            {
	                breakpoint: 550,
	                settings: {
	                    slidesToShow: 4,
	                    slidesToScroll: 1
	                }
	            },

	            {
	                breakpoint: 479,
	                settings: {
	                    slidesToShow: 2,
	                    slidesToScroll: 1
	                }
	            }
	        ]
	    });
	</script>
@endsection