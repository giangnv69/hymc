@extends('frontend.master')
@section('main')
	<?php if(!empty($data)){
		$content = json_decode($data->content);
	} ?>
	<script>
		var object = {
			sec_1 : {{ !empty(@$content->sec_second->sec0->number) ? @$content->sec_second->sec0->number : 0 }},
			sec_2 : {{ !empty(@$content->sec_second->sec1->number) ? @$content->sec_second->sec1->number : 0 }},
			sec_3 : {{ !empty(@$content->sec_second->sec2->number) ? @$content->sec_second->sec2->number : 0}},
			sec_4 : {{ !empty(@$content->sec_second->sec3->number) ? @$content->sec_second->sec3->number : 0 }},
			sec_5 : {{ !empty(@$content->sec_second->sec4->number) ? @$content->sec_second->sec4->number : 0 }},
		}
	</script>	
	
	<section id="top">
		<div class="bn-top">
			<div class="aft"><img src="{{ __BASE_URL__ }}/images/bg1.png" class="img-fluid" width="100%" alt=""></div>
			<div class="bef"><img src="{{ __BASE_URL__ }}/images/bg2.png" class="img-fluid" width="100%" alt=""></div>
		</div>
		<div class="img-abs abs-top">
			<img src="{{ __BASE_URL__ }}/images/rout1.png" class="img-fluid abs-rout lg-1 wow fadeInRight wHighlight" data-wow-delay=".2s" alt="">
			<img src="{{ __BASE_URL__ }}/images/rout2.png" class="img-fluid abs-rout lg-2 wow fadeInRight wHighlight" data-wow-delay=".3s" alt="">
			<img src="{{ __BASE_URL__ }}/images/rout3.png" class="img-fluid abs-rout lg-3 wow fadeInRight wHighlight" data-wow-delay=".4s" alt="">
			<img src="{{ __BASE_URL__ }}/images/rout4.png" class="img-fluid abs-rout lg-4 wow fadeInRight wHighlight" data-wow-delay=".5s" alt="">
		</div>
		<div class="container">
			<div class="content">
				<div class="content-box">
					<div class="title wow fadeInUp wHighlight" data-wow-delay=".1s"><h2>{{ @$content->sec_first->title }}</h2></div>
					<div class="row">
						<div class="col-md-5 col-sm-6">
							<div class="left wow fadeInUp wHighlight" data-wow-delay=".1s">
								{!! @$content->sec_first->content !!}
								<div class="btn-acc"> 
									<ul class="list-inline">
										<li class="list-inline-item">
											<a href="{{ @$content->sec_first->open_cccount }}" class="account">{{ trans('trans.open_ccount') }}</a>
										</li> 
			                            <li class="list-inline-item">
			                            	<a href="{{ @$content->sec_first->learn_more }}" class="login">{{ trans('trans.learn_more') }}</a>
			                            </li> 
									</ul>
								</div>
							</div>
						</div>
						<div class="col-md-7 col-sm-6">
							<div class="right wow fadeInDown wHighlight" data-wow-delay=".1s">
								<div class="box-img">
									<img src="{{ @$content->sec_first->image }}" class="img-fluid" alt="">
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="list-number">
					{{-- <ul>
						@if (!empty($content->sec_second))
							@foreach ($content->sec_second as $key => $value)
								<li>
									<div class="item">
										<div class="number text-center"><span class="counter">{{ @$value->number }}</span><span>{{ @$value->symbol }}</span></div>
										<p data-wow-delay=".2s" class="wow fadeInUp wHighlight">{{ @$value->desc }}</p>
									</div>
								</li>
							@endforeach
						@endif
					</ul> --}}
				</div>

				
				<div class="list-number">
					<ul>
						<li>
							<div class="item information-item">
								<div class="number text-center"><span class="counter trading"></span></div>
								<p data-wow-delay=".2s" class="desc wow fadeInUp wHighlight">Trading accounts opened</p>
							</div>
						</li>
						<li>
							<div class="item information-item">
								<div class="number text-center"><span class="counter transaction"></span></div>
								<p data-wow-delay=".2s" class="desc wow fadeInUp wHighlight">Transactions in last 24 hours</p>
							</div>
						</li>
						<li>
							<div class="item information-item">
								<div class="number text-center"><span class="counter spread"></span></div>
								<p data-wow-delay=".2s" class="desc wow fadeInUp wHighlight">Spread as low as 0.1 pips</p>
							</div>
						</li>
						<li>
							<div class="item information-item">
								<div class="number text-center"><span class="counter coverage"></span></div>
								<p data-wow-delay=".2s" class="desc wow fadeInUp wHighlight">€2.5 Million coverage</p>
							</div>
						</li>
						<li>
							<div class="item information-item">
								<div class="number text-center"><span class="counter fee"></span></div>
								<p data-wow-delay=".2s" class="desc wow fadeInUp wHighlight">0% fees on deposits &amp; withdrawals</p>
							</div>
						</li>
					</ul>
				</div>
				<!-- <section class="section-information">
			        <div class="bs-container">
			            <div class="bs-row row-sm-15 row-tn-5">
			                <div class="bs-col md-20-15 sm-20-10 xs-20-5 tn-50-5">
			                    <div class="information-item">
			                        <p class="title"><span class="trading"></span></p>
			                        <p class="desc">Trading accounts opened</p>
			                    </div>
			                </div>
			                <div class="bs-col md-20-15 sm-20-10 xs-20-5 tn-50-5">
			                    <div class="information-item">
			                        <p class="title"><span class="transaction"></span></p>
			                        <p class="desc">Transactions in last 24 hours</p>
			                    </div>
			                </div>
			                <div class="bs-col md-20-15 sm-20-10 xs-20-5 tn-50-5">
			                    <div class="information-item">
			                        <p class="title"><span class="spread"></span></p>
			                        <p class="desc">Spread as low as 0.1 pips</p>
			                    </div>
			                </div>
			                <div class="bs-col md-20-15 sm-20-10 xs-20-5 tn-50-5">
			                    <div class="information-item">
			                        <p class="title"><span class="coverage"></span></p>
			                        <p class="desc">€2.5 Million coverage</p>
			                    </div>
			                </div>
			                <div class="bs-col md-20-15 sm-20-10 xs-20-5 tn-50-5">
			                    <div class="information-item">
			                        <p class="title"><span class="fee"></span></p>
			                        <p class="desc">0% fees on deposits &amp; withdrawals</p>
			                    </div>
			                </div>
			            </div>
			        </div>
			    </section> -->
				   
				<div class="list-account">
					<div class="row">
						<div class="col-md-4 col-sm-4">
							<div class="item">
								<div class="title-acc title-acc-1">
									<div class="avarta">
										<img src="{{ __BASE_URL__ }}/images/box1.png" class="img-fluid" width="100%" alt="">
									</div>
									<h3><span>{{ @$content->sec_third->col_first->title }}</span></h3>
								</div>
								<div class="info-acc info-acc-1">
									{!! @$content->sec_third->col_first->content !!}
								</div>
								<div class="btn-acc">
									<a href="{{ @$content->sec_third->col_first->link }}" 
										class="btn-acc-1">{{ trans('trans.open_now') }}</a>
								</div>
							</div>
						</div>
						<div class="col-md-4 col-sm-4">
							<div class="item">
								<div class="title-acc title-acc-2">
									<div class="avarta">
										<img src="{{ __BASE_URL__ }}/images/box2.png" class="img-fluid" width="100%" alt="">
									</div>
									<h3><span>{{ @$content->sec_third->col_second->title }}</span></h3>
								</div>
								<div class="info-acc info-acc-2">
									<ul>
										{!! @$content->sec_third->col_second->content !!}
									</ul>
								</div>
								<div class="btn-acc">
									<a href="{{ @$content->sec_third->col_second->link }}" 
										class="btn-acc-2">{{ trans('trans.open_now') }}</a>
								</div>
							</div>
						</div>
						<div class="col-md-4 col-sm-4">
							<div class="item">
								<div class="title-acc title-acc-3">
									<div class="avarta">
										<img src="{{ __BASE_URL__ }}/images/box3.png" 
										class="img-fluid" width="100%" alt="">
									</div>
									<h3><span>{{ @$content->sec_third->col_third->title }}</span></h3>
								</div>
								<div class="info-acc info-acc-3">
									{!! @$content->sec_third->col_third->content !!}
								</div>
								<div class="btn-acc">
									<a href="{{ @$content->sec_third->col_third->link }}" 
										class="btn-acc-3">{{ trans('trans.start_following') }}</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section id="platfrom">
		<div class="img-abs">
			<img src="{{ __BASE_URL__ }}/images/rout1.png" class="img-fluid abs-rout lg-5 wow fadeInRight wHighlight" data-wow-delay=".2s" alt="">
			<img src="{{ __BASE_URL__ }}/images/rout2.png" class="img-fluid abs-rout lg-6 wow fadeInRight wHighlight" data-wow-delay=".2s" alt="">
		</div>
		<div class="container">
			<div class="content">
				<div class="title text-center">
					<h2>{!! @$content->sec_fourth->title_sec !!}</h2>
					<p>{!! @$content->sec_fourth->sort_desc !!}</p>
				</div>
				<div class="info-plat">
					<div class="title-plat wow fadeInUp wHighlight" data-wow-delay=".2s">{!! @$content->sec_fourth->title_line_2 !!} <img src="{{ __BASE_URL__ }}/images/icon1.png" class="img-fluid" alt="">
					</div>
					<div class="row">
						<div class="col-md-6 col-sm-6">
							<div class="box-text wow fadeInLeft wHighlight" data-wow-delay=".2s">
								{!! @$content->sec_fourth->content !!}
								<div class="btn-acc"><a href="{{ @$content->sec_fourth->link }}">{{ trans('trans.learn_more') }}</a></div>
							</div>
						</div>
						<div class="col-md-6 col-sm-6">
							<div class="box-img wow fadeInRight wHighlight" data-wow-delay=".2s">
								<img src="{{ @$content->sec_fourth->image }}" class="img-fluid" alt="">
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	
	<section id="box-service">
		<div class="container">
			<div class="content">
				<div class="title text-center"><h2>{{ @$content->sec_fifth->title }}</h2></div>
				<div class="list-service">
					<div class="row">
						@if (!empty($content->sec_fifth->value))
							@foreach ($content->sec_fifth->value as $key => $value)
								<div class="col-md-3 col-sm-6">
									<div class="item text-center wow fadeInUp wHighlight" data-wow-delay=".{{ $loop->index + 2 }}s">
										<div class="icon">
											<img src="{{ @$value->icon }}" class="img-fluid" alt="">
										</div>
										<div class="info">
											<div class="desc">{{ @$value->title }}</div>
										</div>
									</div>
								</div>
							@endforeach
						@endif
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
						@if (!empty($content->sec_sixth->gallery))
                            @foreach ($content->sec_sixth->gallery as $item)
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
@endsection
@section('script')
	<script>
		jQuery(document).ready(function($) {
			$('.trading').animationCounter({
			    start: 0,
			    end: object.sec_1,
			    delay: 100,
			    step: 1000,
			    txt: '',
			    type: "increase",
			    fix: false
			});
			$('.transaction').animationCounter({
			    start: 0,
			    end: object.sec_2,
			    step: 100,
			    delay: 100,
			    txt: '',
			    type: "increase",
			    fix: true
			});
			$('.spread').animationCounter({
			    start: object.sec_3,
			    end: 0.2,
			    step: 0.1,
			    delay: 300,
			    type: "decrease",
			    fix: true
			});
			$('.coverage').animationCounter({
			    start: 0,
			    end: object.sec_4,
			    step: 100000,
			    delay: 150,
			    type: "increase",
			    fix: false
			});
			$('.fee').animationCounter({
			    start: object.sec_5,
			    end: 0.5,
			    step: 0.5,
			    delay: 200,
			    txt: '%',
			    type: "decrease",
			    fix: true
			});

		});
		</script>
@endsection