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
                    <form action="{{ route('home.saveAccountType') }}" method="POST">
                        {{ csrf_field() }}
                        <div class="title-form text-center">Account Type</div>
                        <div class="title-accoint text-center"><span>MetaTrader 5</span></div>
                        <div class="list-item-form">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="item-list">
                                        <span>Choose Account Type</span>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="itme-choose text-center">
                                                    <h4>Fixed</h4>
                                                    <div class="desc">Spread from 1.8</div>
                                                    <div class="round"><a href="javascript:0">No commission</a></div>
                                                    <div class="choose">
                                                        <input type="radio" id="choose-1" name="radio-group" checked><label for="choose-1"></label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="itme-choose text-center">
                                                    <h4>Classic</h4>
                                                    <div class="desc">Spread from 1.2</div>
                                                    <div class="round"><a href="javascript:0">No commission</a></div>
                                                    <div class="choose">
                                                        <input type="radio" id="choose-2" name="radio-group" ><label for="choose-2"></label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="itme-choose text-center">
                                                    <h4>Row</h4>
                                                    <div class="desc">Spread from 10.2</div>
                                                    <div class="round"><a href="javascript:0">+$4 per round</a></div>
                                                    <div class="choose">
                                                        <input type="radio" id="choose-3" name="radio-group" ><label for="choose-3"></label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="item-list">
                                        <span>Account Currency</span>
                                        <div class="itme-choose item-currency">
                                            <dl class="dropdown">
                                                <dt><a><label class="dolar">$</label><span class="selected">USD</span><i class="fa fa-angle-down"></i></a></dt>
                                                <dd>
                                                    <ul style="display: none;">
                                                        <li><a>USD</a></li>
                                                        <li><a>VND</a></li>
                                                        <li><a>EUR</a></li>
                                                    </ul>
                                                </dd>
                                            </dl>
                                        </div>
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