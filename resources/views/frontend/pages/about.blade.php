@extends('frontend.master')
@section('main')
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
                            <h2 class="title" data-aos="fade-up" data-aos-delay="100" data-aos-duration="500">
                                {{ @$content->sec_first->title }}
                            </h2>
                            <p class="desc" data-aos="fade-up" data-aos-delay="300" data-aos-duration="500">
                                {{ @$content->sec_first->content }}
                            </p> 
                        </div>
                        <div class="module-content">
                            <div class="banner-button">
                                <a href="{{  @$content->sec_first->links }}" class="banner__link">Join Now</a>
                            </div>
                        </div>
                        <div class="module-img">
                            <img src="{{  @$content->sec_first->image }}" alt="" class="banner__img" data-aos="fade-down"
                             data-aos-delay="100" />
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
                                    <span class="control__show">About Us</span>
                                    <ul class="control-list">
                                        <li class="control-list__item " tab-show="#tab1">
                                            About Us
                                        </li>
                                        <li class="control-list__item active" tab-show="#tab2">
                                            Why Choose Us?
                                        </li>
                                        <li class="control-list__item" tab-show="#tab3">
                                            Regulations and Licences
                                        </li>
                                        <li class="control-list__item" tab-show="#tab4">
                                            Deposit and Withdrawals
                                        </li>
                                        <li class="control-list__item" tab-show="#tab5">
                                            Contact Us
                                        </li>
                                    </ul>
                                </div>
                                <div class="tab-content">
                                    <div class="tab-item" id="tab1">
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
                                                <h2 class="title bold">
                                                    {{ @$content->sec_tab_1->title }}
                                                </h2>
                                            </div>
                                            <div class="contentBody contetBody5">
                                                {!! @$content->sec_tab_1->content !!}
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-item active" id="tab2">
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
                                                <h2 class="title bold">
                                                    {{ @$content->sec_tab_2->title }}
                                                </h2>
                                                <p class="text-p">
                                                   {!! @$content->sec_tab_2->sort_desc !!}
                                                </p>
                                            </div>

                                            @if (!empty(@$content->sec_tab_2->list_commit))
                                                @foreach ($content->sec_tab_2->list_commit as $key => $value)
                                                    <div class="contentBody">
                                                        <div class="bs-row row-lg-15 row-md-10 row-sm-10 row-xs-5">
                                                            <div class="bs-col lg-20-15 md-20-10 sm-25-10 xs-25-5">
                                                                <div class="itemImg">
                                                                    <img src="{{ @$value->image }}" alt="" />
                                                                </div>
                                                            </div>
                                                            <div class="bs-col lg-80-15 md-80-10 sm-75-10 xs-75-5">
                                                                <div class="itemContent">
                                                                    <h3 class="title bold">
                                                                        {{ @$value->title }}
                                                                    </h3>
                                                                    <p class="item-p">
                                                                        {{ @$value->content }}
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endforeach
                                            @endif

                                        </div>
                                    </div>

                                    <div class="tab-item" id="tab3">
                                        <div class="hexagon-style">
                                            <div class="style1 style">
                                                <div class="rotate" data-aos="fade-right" data-aos-delay="300">
                                                    <span class="style__main"></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="content">
                                            <div class="contentBanner">
                                                <h2 class="title bold">{{ @$content->sec_tab_3->title }}</h2>
                                                {!! @$content->sec_tab_3->content !!}
                                            </div>
                                        </div>
                                    </div>

                                    <div class="tab-item" id="tab4">
                                        <div class="hexagon-style">
                                            <div class="style1 style">
                                                <div class="rotate" data-aos="fade-right" data-aos-delay="300">
                                                    <span class="style__main"></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="content">
                                            <div class="contentBanner contentDepostios">
                                                <h2 class="title bold">
                                                    {{ @$content->sec_tab_4->title }}
                                                </h2>
                                                <p class="text-p big">
                                                    {{ @$content->sec_tab_4->content }}
                                                </p>
                                            </div>
                                            <div class="contentBody contentBody2">
                                                <div class="bs-row row-lg-15 row-md-10 row-sm-5 row-xs-5">
                                                    <div class="bs-col lg-20-15 md-20-10 sm-20-5 xs-50-5">
                                                        <div class="itemImg">
                                                            <img src="{{ @$content->sec_tab_4->icon_1->image }}" alt="" />
                                                        </div>
                                                    </div>
                                                    <div class="bs-col lg-30-15 md-30-10 sm-30-5 xs-50-5">
                                                        <div class="itemContent itemContentDep">
                                                            <h3 class="title bold">
                                                                {{ @$content->sec_tab_4->icon_1->title }}
                                                            </h3>
                                                            <p class="item-p">
                                                                {!! @$content->sec_tab_4->icon_1->content !!}
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <div class="bs-col lg-20-15 md-20-10 sm-20-5 xs-50-5">
                                                        <div class="itemImg">
                                                            <img src="{{ @$content->sec_tab_4->icon_2->image }}" alt="" />
                                                        </div>
                                                    </div>
                                                    <div class="bs-col lg-30-15 md-30-10 sm-30-5 xs-50-5">
                                                        <div class="itemContent itemContentDep">
                                                            <h3 class="title bold">
                                                                {{ @$content->sec_tab_4->icon_2->title }}
                                                            </h3>
                                                            <p class="item-p">
                                                                {!! @$content->sec_tab_4->icon_2->content !!}
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="deposit">
                                                <p class="text-deposti">
                                                    Deposit and withdraw funds with the most popular
                                                    payment gateways
                                                </p>
                                                <div class="bs-row">
                                                    @if (!empty(@$content->sec_tab_4->gallery))
                                                        @foreach ($content->sec_tab_4->gallery as $key => $value)
                                                                <div class="bs-col lg-25 md-25 sm-25 xs-50">
                                                                    <div class="item">
                                                                        <a class="item-list__link">
                                                                            <img src="{{ @$value }}" alt="" />
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                        @endforeach
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="tab-item" id="tab5">
                                        <div class="hexagon-style">
                                            <div class="style1 style">
                                                <div class="rotate" data-aos="fade-right" data-aos-delay="300">
                                                    <span class="style__main"></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="content">
                                            <div class="contentBanner contentDepostios">
                                                <h2 class="title bold">
                                                    Contact us
                                                </h2>
                                            </div>
                                            <div class="contentBody contetBody5">
                                                <div class="bs-row row-lg-15 row-md-10 row-sm-5 row-xs-5">
                                                    <div class="bs-col lg-33-15 md-33-10 sm-33-5 xs-50-5">
                                                        <div class="itemBody">
                                                            <div class="itemLogo">
                                                                <img src="{{ @$content->sec_tab_5->logo }}" alt="" />
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="bs-col lg-40-15 md-33-10 sm-33-5 xs-50-5">
                                                        <div class="itemBody">
                                                            <div class="itemText">
                                                                <p class="text-p">
                                                                    <i class="fas fa-at"></i>
                                                                    <span class="text-span">
                                                                        {{ @$content->sec_tab_5->email }}
                                                                    </span>
                                                                </p>
                                                                <p class="text-p">
                                                                    <i class="fas fa-phone"></i>
                                                                    <span class="text-span">
                                                                        {{ @$content->sec_tab_5->phone_1 }}
                                                                    </span>
                                                                </p>
                                                                <p class="text-p">
                                                                    <i class="fas fa-tty"></i>
                                                                    <span class="text-span">
                                                                        {{ @$content->sec_tab_5->phone_2 }}
                                                                    </span>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="bs-col lg-25-15 md-33-10 sm-33-5">
                                                        <div class="itemBody">
                                                            <div class="itemChat">
                                                                <i class="far fa-comment-dots"></i>
                                                                <p class="text-p">
                                                                    Livechat
                                                                </p>
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
                <!-- ///////////////////////////////// -->
            </div>
        </div>
    </section>
    <section class="section-hmc">
        <div class="bs-container">
            <div class="module module-hmc">
                <div class="bs-row row-lg-15 row-md-10 row-sm-5">
                    <div class="bs-col lg-45-15 md-50-10 sm-60-5">
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
                    <div class="bs-col lg-55-15 md-50-10 sm-40-5">
                        <div class="img">
                            <img src="{{ __BASE_URL__ }}/images/pc.gif" alt="" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
   <section id="partner">
        <div class="container">
            <div class="content">
                <div class="list-part">
                    <ul>
                        <?php if(!empty($brand)){
                            $content_brand = json_decode($brand->content);
                        } ?>
                        @if (!empty($content_brand->sec_sixth->gallery))
                            @foreach ($content_brand->sec_sixth->gallery as $item)
                                <li>
                                    <a href="javascript:;">
                                        <img src="{{ @$item }}" class="img-fluid" alt="">
                                    </a>
                                </li>
                            @endforeach
                        @endif
                    </ul>
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