 <header>
    <div class="header-top">
        <div class="container">
            <div class="content">
                <div class="row">
                    <div class="col-md-6 col-sm-6 col-5">
                        <div class="logo">
                            <a href="{{ url('/') }}" title="{{ $site_info->site_title }}">
                                <img src="{{ url('uploads/config/logo/'.$site_info->site_logo) }}" 
                                class="img-fluid" alt="{{ $site_info->site_title }}">
                            </a>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-7">
                        <div class="right-head">
                            <div class="translate text-right">
                                <dl class="dropdown">
                                    <dt>
                                        @if (app()->getLocale() == 'en')
                                            <a>
                                                <span class="selected">
                                                    <img src="{{ __BASE_URL__ }}/images/tran1.png" class="img-fluid" alt="">ENG
                                                </span>
                                                <i class="fa fa-caret-down"></i>
                                            </a>
                                        @else
                                            <a>
                                                <span class="selected">
                                                    <img src="{{ __BASE_URL__ }}/images/tran2.png" class="img-fluid" alt="">VIE
                                                </span>
                                                <i class="fa fa-caret-down"></i>
                                            </a>

                                        @endif
                                    </dt>
                                    <dd>
                                        <ul style="display: none;">
                                            <li><a href="{{ route('home.swich.lang', 'en') }}">
                                                <img src="{{ __BASE_URL__ }}/images/tran1.png" class="img-fluid" alt="">ENG</a>
                                            </li>  
                                            <li>
                                                <a href="{{ route('home.swich.lang', 'vi') }}">
                                                    <img src="{{ __BASE_URL__ }}/images/tran2.png" class="img-fluid" alt="">VIE
                                                </a>
                                            </li>
                                        </ul>
                                    </dd>
                                </dl>
                            </div>
                            <div class="header d-none">
                                <a title="" href="#menu"><i class="fa fa-bars"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="header-menu">
        <div class="container">
            <div class="content">
                <div class="row">
                    <div class="col-md-7">
                        <div class="left">
                            <ul>
                                @if (!empty($menu_header))
                                    @foreach ($menu_header as $item)
                                        <li>
                                            <a href="{{ $item->url }}" class="{{ $item->url == url()->current() ? 'active' : null }}">{{ $item->{ 'title_'.app()->getLocale() } }}</a>
                                        </li>
                                    @endforeach
                                @endif
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="right btn-acc">
                            <ul class="list-inline text-right">
                                @if (!Auth::guard('member')->check())
                                    <li class="list-inline-item"><a href="{{ route('home.sign-up') }}" class="account">{{ trans('trans.open_ccount') }}</a></li> 
                                    <li class="list-inline-item"><a href="{{ route('home.log-in') }}" class="login">{{ trans('trans.login') }}</a></li>
                                @else
                                    <li class="list-inline-item">
                                        <a href="#" class="account">{{ Auth::guard('member')->user()->email }}</a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="{{ route('home.log-out') }}" class="login">{{ trans('trans.login-out') }}</a>
                                    </li>
                                @endif
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{--  <nav id="menu">
        <ul>
            @if (!empty($menu_header))
                @foreach ($menu_header as $item)
                    <li>
                        <a href="{{ $item->url }}" class="{{ $loop->index == 0 ? 'active' : null }}">{{ $item->{ 'title_'.app()->getLocale() } }}</a>
                    </li>
                @endforeach
            @endif
            <li><a href="#" class="account">{{ trans('trans.open_ccount') }}</a></li>
            <li><a href="#" class="login">{{ trans('trans.login') }}</a></li>
        </ul>
    </nav> --}}
</header>