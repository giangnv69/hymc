<footer>
	<?php if(!empty($footerContent->content)){
		$contentFooterAll = json_decode( $footerContent->content);
		@$contentFooter = $contentFooterAll->{ app()->getLocale() };
	} ?>
	<div class="img-abs abs-ft">
		<img src="{{ __BASE_URL__ }}/images/rout1.png" class="img-fluid abs-rout lg-7 wow fadeInRight wHighlight" data-wow-delay=".2s" alt="">
		<img src="{{ __BASE_URL__ }}/images/rout2.png" class="img-fluid abs-rout lg-8 wow fadeInRight wHighlight" data-wow-delay=".2s" alt="">
	</div>
	<div class="container">
		<div class="content">
			<div class="box-footer">
				<div class="footer-top">
					<div class="row">
						<div class="col-md-8">
							<div class="left">
								<ul class="list-inline">
									<li class="list-inline-item">
										<div class="logo">
											<a href="{{ url('/') }}">
												<img src="{{ asset('/uploads/config/logo/' . $site_info->site_logo_footer) }}" class="img-fluid" alt="">
											</a>
										</div>
									</li>
									@if (!empty($menu_footer))
										@foreach ($menu_footer as $item)
											<li class="list-inline-item">
												<a href="{{ $item->url }}" class="{{ $loop->index == 0 ? 'active' : null }}">{{ $item->{ 'title_'.app()->getLocale() } }}</a>
											</li>
										@endforeach
									@endif
								</ul>
							</div>
						</div>
						<div class="col-md-4">
							<div class="social">
								<ul class="list-inline text-right">
									@if (!empty($social->content->social))
										@foreach ($social->content->social as $key => $value)
											<li class="list-inline-item">
												<a href="{{ @$value->link }}">
													<i class="{{ @$value->icon }}"></i>
												</a>
											</li>
										@endforeach
									@endif
									
									
								</ul>
							</div>
						</div>
					</div>
				</div>
				<div class="info-box">
					<div class="row">
						<div class="col-md-4">
							<div class="item">
								<div class="title-ft">{{ @$contentFooter->sec_frist->col_first->title }}</div>
								<div class="desc">
									{!! @$contentFooter->sec_frist->col_first->content !!}
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="item">
								<div class="title-ft">{{ @$contentFooter->sec_frist->col_second->title }}</div>
								<div class="desc">
									{!! @$contentFooter->sec_frist->col_second->content !!}
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="item">
								<div class="title-ft">{{ @$contentFooter->sec_frist->col_third->title }}</div>
								<div class="desc">
									{!! @$contentFooter->sec_frist->col_third->content !!}
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="box-footer">
				<div class="list-logo">
					<div class="title-ft">{{ @$contentFooter->sec_second->title }}</div>
					<div class="row">
						@if (!empty($contentFooter->sec_second->value))
							@foreach ($contentFooter->sec_second->value as $key => $value)
								<div class="col-md-4">
									<div class="item">
										<div class="logo">
											<a href="javascript:;">
												<img src="{{ @$value->logo }}" class="img-fluid" alt="{{ @$value->name }}">
											</a>
										</div>
										<div class="info">
											<h4>{{ @$value->name }}</h4>
											<p>{{ @$value->content }}</p>
										</div>
									</div>
								</div>
							@endforeach
						@endif
					</div>
				</div>
			</div>
			<div class="box-footer">
				<div class="footer-bott">
					<div class="row">
						<div class="col-md-8">
							<div class="left">
								<div class="item">
									<div class="title-ft">{{ @$contentFooter->sec_fourth->content_1->title }}</div>
									<div class="desc">
										{!! @$contentFooter->sec_fourth->content_1->content !!}
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-2">
							<div class="item">
								<div class="title-ft">{{ @$contentFooter->sec_fourth->content_2->title }}</div>
								{!! @$contentFooter->sec_fourth->content_2->content !!}
							</div>
						</div>
						<div class="col-md-2">
							<div class="item">
								<div class="title-ft">{{ @$contentFooter->sec_fourth->content_3->title }}</div>
								{!! @$contentFooter->sec_fourth->content_3->content !!}
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="api">
		<div class="container">
			<div class="content">
				<div class="row">
					<div class="col-md-9">
						<div class="srcoll-mb">
							<ul class="list-inline list-item-api">
								<li class="list-inline-item" id="item1">
									<span>LOADING...</span>
									<p>LOADING...</p>
								</li>
								<li class="list-inline-item" id="item2">
									<span>LOADING...</span>
									<p>LOADING...</p>
								</li>
								<li class="list-inline-item" id="item3">
									<span>USOIL</span>
									<p>LOADING...</p>
								</li>
								<li class="list-inline-item" id="item4">
									<span>LOADING...</span>
									<p>LOADING...</p>
								</li>
								<li class="list-inline-item" id="item5">
									<span>LOADING...</span>
									<p>LOADING...</p>
								</li>
								<li class="list-inline-item" id="item6">
									<span>LOADING...</span>
									<p>LOADING...</p>
								</li>
								<li class="list-inline-item" id="item7">
									<span>LOADING...</span>
									<p>LOADING...</p>
								</li>
								<li class="list-inline-item">
									<div class="warring">
										<p>{{ trans('trans.warning') }}:</p>
										<span>{{ trans('trans.note_footer') }}</span>
									</div>
								</li>
							</ul>
						</div>
					</div>
					<div class="col-md-3">
						<div class="star-trading"><a href="{{ @$contentFooterAll->orther->link }}">{{ trans('trans.start_trading') }}</a></div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<section id="phone-mess">
		<div class="clc-fix d-none"><a href="javascript:0"><i class="fa fa-angle-double-left"></i></a></div>
		<div class="content-fx">
			<div class="fx-right">
				<div class="phone text-center">
					<a href="tel: {{ @$site_info->site_phone }}">
						<div class="icon"><img src="{{ __BASE_URL__ }}/images/phone.png" class="img-fluid" alt=""></div>
						<div class="info">
							<span>Hotline: <a href="tel: {{ @$site_info->site_phone }}">{{ @$site_info->site_phone }}</a></span>
						</div>
					</a>
				</div>
				<div class="mess text-center">
					<a href="{{ @$site_info->site_company }}">
						<div class="icon">
							<img src="{{ __BASE_URL__ }}/images/mess.png" class="img-fluid" alt="">
						</div>
						<div class="info">
							<span>Live chat</span>
						</div>
					</a>
				</div>
			</div>
		</div>
	</section>
</footer>