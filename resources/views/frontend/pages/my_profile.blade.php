@extends('frontend.master')
@section('main')

    <?php if(!empty($brand)){
        $brand = json_decode($brand->content);
    } ?>

    <?php if(!empty($data)){
        $content = json_decode($data->content);
    } ?>
    <link rel="stylesheet" type="text/css" title="" href="{{ __BASE_URL__ }}/css/tool.min.css">
    <style>
        .step{
            display: none;
        }
        .step.step_start{
            display: block;
        }
    </style>

    <section id="account" style="overflow: inherit; padding: 100px 0 150px 0">
        <div class="container">
            <div class="content">
                <div class="title-form"><img src="{{ __BASE_URL__ }}/images/user.png" class="img-fluid" alt="">My Profile</div>
                <div class="account-top">
                    <div class="row">
                        <div class="col-md-7">
                            <div class="left">
                                <div class="info-account">
                                    <div class="thumbs"><img src="{{ __BASE_URL__ }}/images/acc.png" class="img-fluid" alt=""></div>
                                    <div class="info-thumbs">
                                        <div class="name">{{$get_info->f_name.' '.$get_info->l_name}}</div>
                                        <p>{{$get_info->email}}</p>
                                        <div class="notice">
                                            <a href="{{ route('home.verify') }}">
                                                <img src="{{ __BASE_URL__ }}/images/notice.png" class="img-fluid" alt="">
                                                <span>Verify your profile</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="settings">
                                    <ul class="list-inline">
                                        <li class="list-inline-item"><a href="" class="make-clc"><img src="{{ __BASE_URL__ }}/images/a-1.png" class="img-fluid" alt="">MAKE A DEPOSIT</a></li>
                                        <li class="list-inline-item"><a href="javascript:0" class="sett-btn"><img src="{{ __BASE_URL__ }}/images/setting.png" class="img-fluid" alt=""></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-5">
                            <div class="right">
                                <div class="share-link">
                                    <div class="item-link text-center">
                                        <h3>invite friends for a bonus</h3>
                                        <div class="info">
                                            <p>Invite a friend and get up to <br><span>$100 CASH BONUS</span></p>
                                            <a href="javascript:0" data-toggle="modal" data-target="#myModal-link">Get your friends link</a>
                                        </div>
                                    </div>
                                    <div class="item-link text-center">
                                        <h3>invite friends for a bonus</h3>
                                        <div class="info">
                                            <p>Invite a friend and get up to <br><span>$100 CASH BONUS</span></p>
                                            <a href="javascript:0" data-toggle="modal" data-target="#myModal-link">Get your friends link</a>
                                        </div>
                                    </div>
                                    <div class="item-link text-center">
                                        <h3>invite friends for a bonus</h3>
                                        <div class="info">
                                            <p>Invite a friend and get up to <br><span>$100 CASH BONUS</span></p>
                                            <a href="javascript:0" data-toggle="modal" data-target="#myModal-link">Get your friends link</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="list-make">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="item">
                                <div class="title-make"><img src="{{ __BASE_URL__ }}/images/a-3.png" class="img-fluid" alt="">MAKE A DEPOSIT</div>
                                <p>Total <strong>$100.00</strong></p>
                                <div class="list-method text-center">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="method"><a href="javascript:0"><img src="{{ __BASE_URL__ }}/images/part1.png" class="img-fluid" alt=""></a></div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="method"><a href="javascript:0"><img src="{{ __BASE_URL__ }}/images/part2.png" class="img-fluid" alt=""></a></div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="method"><a href="javascript:0" class="active"><img src="{{ __BASE_URL__ }}/images/part4.png" class="img-fluid" alt=""></a></div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="method"><a href="javascript:0"><img src="{{ __BASE_URL__ }}/images/part3.png" class="img-fluid" alt=""></a></div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="method"><a href="javascript:0"><img src="{{ __BASE_URL__ }}/images/part7.png" class="img-fluid" alt=""></a></div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="method"><a href="javascript:0"><img src="{{ __BASE_URL__ }}/images/part6.png" class="img-fluid" alt=""></a></div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="method"><a href="javascript:0"><img src="{{ __BASE_URL__ }}/images/posit3.png" class="img-fluid" alt=""></a></div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="method"><a href="javascript:0"><img src="{{ __BASE_URL__ }}/images/part5.png" class="img-fluid" alt=""></a></div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="method"><a href="javascript:0"><img src="{{ __BASE_URL__ }}/images/a-2.png" class="img-fluid" alt=""></a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="item">
                                <div class="title-make"><img src="{{ __BASE_URL__ }}/images/a-4.png" class="img-fluid" alt="">MY TRADING ACCOUNTS</div>
                                <div class="list-info">
                                    <ul class="list-inline">
                                        <li class="list-inline-item">
                                            <div class="icon"><img src="{{ __BASE_URL__ }}/images/mt5.png" alt=""><span>Classic</span></div>
                                        </li>
                                        <li class="list-inline-item">
                                            <div class="curency"><span>$</span>USD</div>
                                        </li>
                                    </ul>
                                    <div class="item-info">
                                        <label for="">Balance</label>
                                        <input type="text" value="$ 100.00">
                                    </div>
                                    <div class="item-info">
                                        <label for="">Leveroge</label>
                                        <input type="text" value="1:200">
                                    </div>
                                    <div class="item-info">
                                        <div class="btn-item">
                                            <div class="btn-fund"><a href="">FUND</a></div>
                                            <div class="btn-sett"><a href="javascript:0"><img src="{{ __BASE_URL__ }}/images/set2.png" class="img-fluid" alt=""></a></div>
                                        </div>
                                        <div class="sub-setting">
                                            <ul>
                                                <li><a href="{{ route('home.my-profile.settings') }}"><img src="{{ __BASE_URL__ }}/images/sub-1.png" class="img-fluid" alt="">Account settings</a></li>
                                                <li><a href=""><img src="{{ __BASE_URL__ }}/images/sub-2.png" class="img-fluid" alt="">Launch MT5 Web</a></li>
                                                <li><a href=""><img src="{{ __BASE_URL__ }}/images/sub-3.png" class="img-fluid" alt="">Download MT5 Platform</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="item text-center">
                                <a href="" class="creat"></a>
                                <div class="creat-account">
                                    <div class="info-create">
                                        <div class="icon"><img src="{{ __BASE_URL__ }}/images/plus.png" class="img-fluid" alt=""></div>
                                        <p>CREATE LIVE ACCOUNT</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="popup">
        <div class="modal fade modal-link" id="myModal-link">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-body">
                        <button type="button" class="close d-none" data-dismiss="modal">&times;</button>
                        <div class="popup-link">
                            <p class="text-center">Your friends link:</p>
                            <div class="box-link">
                                <a href="javascript:0" id="link-copy"></a>
                            </div>
                            <div class="btn-box-link">
                                <ul class="list-inline text-center">
                                    <li class="list-inline-items">
                                        <input type="text" value="https://fuvavi.com/tong-hop-hieu-ung-css-hover-vao-hinh-anh.html">
                                        <a href="javascript:0" class="copy" id="clc-copy"><img src="{{ __BASE_URL__ }}/images/copy.png" class="img-fluid" alt="">Copy</a>
                                    </li>
                                    <li class="list-inline-items"><a href="" class="share"><img src="{{ __BASE_URL__ }}/images/share.png" class="img-fluid" alt="">Share</a></li>
                                </ul>
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
@endsection