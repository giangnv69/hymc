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
                    <form action="{{ route('home.saveAdditionalInformation') }}" method="POST">
                        {{ csrf_field() }}
                        <div class="title-form text-center">Additional Infomation</div>
                        <div class="list-item-form">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="item">
                                        <label for="">Country of residence</label>
                                        <dl class="dropdown">
                                            <dt><a><span class="selected"><img src="images/tran2.png" class="img-fluid" alt="">Vietnam</span><i class="fa fa-angle-down"></i></a></dt>
                                            <dd>
                                                <ul style="display: none;">
                                                    <li><a><img src="images/tran2.png" class="img-fluid" alt="">Vietnam</a></li>
                                                    <li><a><img src="images/tran1.png" class="img-fluid" alt="">England</a></li>
                                                </ul>
                                            </dd>
                                        </dl>
                                    </div>
                                    <div class="remember">
                                        <input type="checkbox" id="remember-01"><label for="remember-01">My country of residence and country where Ipay taxes are the same as the below country</label>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="item-list">
                                        <span>Date of Birth</span>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="item">
                                                    <label for="">Date</label>
                                                    <input type="number" value="27">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="item">
                                                    <label for="">Month</label>
                                                    <input type="number" value="12">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="item">
                                                    <label for="">Year</label>
                                                    <input type="number" value="1989">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="item-list">
                                        <span>Address</span>
                                        <div class="item">
                                            <label for="">Street name and number</label>
                                            <input type="text" value="G3 Vinhome GreenBay Me Tri Nam Tu Liem">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="item">
                                        <label for="">City</label>
                                        <input type="text" value="Ha Noi">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="item">
                                        <label for="">Postcode</label>
                                        <input type="text" value="100000">
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