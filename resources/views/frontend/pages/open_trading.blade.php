@extends('frontend.master')
@section('main')

    <?php if(!empty($brand)){
        $brand = json_decode($brand->content);
    } ?>

    <?php if(!empty($data)){
        $content = json_decode($data->content);
    } ?>
    <link rel="stylesheet" type="text/css" title="" href="{{ __BASE_URL__ }}/css/tool.min.css">

    <section id="top" style="overflow: inherit;">
        <div class="bn-top-1">
            <div class="aft"><img src="{{ __BASE_URL__ }}/images/bg3.png" class="img-fluid" width="100%" alt=""></div>
            <div class="bef"><img src="{{ __BASE_URL__ }}/images/bg4.png" class="img-fluid" width="100%" alt=""></div>
        </div>
        <div class="img-abs abs-top">
            <img src="{{ __BASE_URL__ }}/images/rout1.png" class="img-fluid abs-rout lg-2 wow fadeInRight wHighlight active" data-wow-delay=".2s">
            <img src="{{ __BASE_URL__ }}/images/rout2.png" class="img-fluid abs-rout lg-4 wow fadeInRight wHighlight" data-wow-delay=".5s" alt="">
        </div>
        <div class="container">
            <div class="content">
                <div class="form-step">
                    <form action="{{ route('home.openTradingAccount') }}" method="POST">
                        {{ csrf_field() }}
                        <div class="title-form text-center">Open a Trading Account</div>
                        <div class="list-item-form">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="item">
                                        <label for="">First Name</label>
                                        <input type="text" value="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="item">
                                        <label for="">Last name</label>
                                        <input type="text" value="">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="item">
                                        <label for="">Email</label>
                                        <input type="text" value="">
                                    </div>
                                </div>
                                <div class="col-md-3" style="padding-right: 0">
                                    <div class="item item-nation">
                                        <dl class="dropdown">
                                            <dt><a><span class="selected"><img src="images/tran1.png" class="img-fluid" alt="">+84</span><i class="fa fa-angle-down"></i></a></dt>
                                            <dd>
                                                <ul style="display: none;">
                                                    <li><a><img src="{{ __BASE_URL__ }}/images/tran1.png" class="img-fluid" alt="">+84</a></li>
                                                    <li><a><img src="{{ __BASE_URL__ }}/images/tran2.png" class="img-fluid" alt="">+07</a></li>
                                                    <li><a><img src="{{ __BASE_URL__ }}/images/tran1.png" class="img-fluid" alt="">+84</a></li>
                                                    <li><a><img src="{{ __BASE_URL__ }}/images/tran2.png" class="img-fluid" alt="">+07</a></li>
                                                    <li><a><img src="{{ __BASE_URL__ }}/images/tran1.png" class="img-fluid" alt="">+84</a></li>
                                                    <li><a><img src="{{ __BASE_URL__ }}/images/tran2.png" class="img-fluid" alt="">+07</a></li>
                                                    <li><a><img src="{{ __BASE_URL__ }}/images/tran1.png" class="img-fluid" alt="">+84</a></li>
                                                    <li><a><img src="{{ __BASE_URL__ }}/images/tran2.png" class="img-fluid" alt="">+07</a></li>
                                                </ul>
                                            </dd>
                                        </dl>
                                    </div>
                                </div>
                                <div class="col-md-9" style="padding-left: 0;">
                                    <div class="item item-phone">
                                        <label for="">Phone</label>
                                        <input type="text" value="">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="item btn-confirm">
                                        <input type="submit" value="Continue" class="btn-submit">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

@stop

@section('script')
    <script src="{{ __BASE_URL__ }}/js/tool.min.js"></script>
@endsection