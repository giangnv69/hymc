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
    <div class="step_create_account_tradding">
        {{--   open trading account --}}
        <section id="top" style="overflow: inherit;" class="step step_start tab_1">
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
                        <div class="title-form text-center">Open a Trading Account</div>
                        <div class="list-item-form">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="item">
                                        <label for="">First Name</label>
                                        <input type="text" value="" name="f_name">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="item">
                                        <label for="">Last name</label>
                                        <input type="text" value="" name="l_name">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="item">
                                        <label for="">Email</label>
                                        <input type="text" value="" name="email">
                                    </div>
                                </div>
                                <div class="col-md-3" style="padding-right: 0">
                                    <div class="item item-nation">
                                        <dl class="dropdown first_number">
                                            <dt><a><span class="selected"><img src="images/tran1.png" class="img-fluid" alt="">+84</span><i class="fa fa-angle-down"></i></a></dt>
                                            <dd>
                                                <ul style="display: none;">
                                                    <li class="number_first"><a><img src="{{ __BASE_URL__ }}/images/tran1.png" class="img-fluid" alt="">+84</a></li>
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
                                <input type="hidden" name="first_number">
                                <div class="col-md-9" style="padding-left: 0;">
                                    <div class="item item-phone">
                                        <label for="">Phone</label>
                                        <input type="text" value="" name="phone_number">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="item btn-confirm">
                                        <input type="submit" value="Continue" class="btn-submit tab-2" step_next="tab_2">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        {{-- addition information--}}

        <section id="top" style="overflow: inherit;" class="step tab_2">
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
                        <div class="title-form text-center">Additional Infomation</div>
                        <div class="list-item-form">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="item">
                                        <label for="">Country of residence</label>
                                        <dl class="dropdown country">
                                            <dt><a><span class="selected"><img src="images/tran2.png" class="img-fluid" alt="">Vietnam</span><i class="fa fa-angle-down"></i></a></dt>
                                            <dd>
                                                <ul style="display: none;">
                                                    <li class="first_country"><a><img src="images/tran2.png" class="img-fluid" alt="">Vietnam</a></li>
                                                    <li><a><img src="images/tran1.png" class="img-fluid" alt="">England</a></li>
                                                </ul>
                                            </dd>
                                        </dl>
                                    </div>
                                    <div class="remember">
                                        <input type="checkbox" name="check_ipay" value="true" id="remember-01"><label for="remember-01">My country of residence and country where Ipay taxes are the same as the below country</label>
                                    </div>
                                </div>
                                <input type="hidden" name="country">
                                <div class="col-md-12">
                                    <div class="item-list">
                                        <span>Date of Birth</span>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="item">
                                                    <label for="">Date</label>
                                                    <input type="number" name="date_birth" value="27">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="item">
                                                    <label for="">Month</label>
                                                    <input type="number" name="month_birth" value="12">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="item">
                                                    <label for="">Year</label>
                                                    <input type="number" name="year_birth" value="1989">
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
                                            <input type="text" name="address" value="G3 Vinhome GreenBay Me Tri Nam Tu Liem">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="item">
                                        <label for="">City</label>
                                        <input type="text" name="city" value="Ha Noi">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="item">
                                        <label for="">Postcode</label>
                                        <input type="text" name="post_code" value="100000">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="item btn-confirm">
                                        <input type="submit" value="Continue" class="btn-submit tab-3" step_next="tab_3">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        {{-- account type--}}
        <section id="top" style="overflow: inherit;" class="step tab_3">
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
                                                        <input type="radio" id="choose-1" name="account_type" checked="checked" value="fixed"><label for="choose-1"></label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="itme-choose text-center">
                                                    <h4>Classic</h4>
                                                    <div class="desc">Spread from 1.2</div>
                                                    <div class="round"><a href="javascript:0">No commission</a></div>
                                                    <div class="choose">
                                                        <input type="radio" id="choose-2" name="account_type" value="classic"><label for="choose-2"></label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="itme-choose text-center">
                                                    <h4>Row</h4>
                                                    <div class="desc">Spread from 10.2</div>
                                                    <div class="round"><a href="javascript:0">+$4 per round</a></div>
                                                    <div class="choose">
                                                        <input type="radio" id="choose-3" name="account_type" value="row" ><label for="choose-3"></label>
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
                                            <dl class="dropdown account_currency">
                                                <dt><a><label class="dolar">$</label><span class="selected">USD</span><i class="fa fa-angle-down"></i></a></dt>
                                                <dd>
                                                    <ul style="display: none;">
                                                        <li class="first_account_currency"><a>USD</a></li>
                                                        <li><a>VND</a></li>
                                                        <li><a>EUR</a></li>
                                                    </ul>
                                                </dd>
                                            </dl>
                                        </div>
                                    </div>
                                </div>
                                <input type="hidden" name="account_currency">
                                <div class="col-md-12">
                                    <div class="item btn-confirm">
                                        <input type="submit" value="Continue" class="btn-submit tab-4" step_next="tab_4">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        {{-- persional information--}}
        <section id="top" style="overflow: inherit;" class="step tab_4">
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
                        <div class="title-form text-center">Personal Information</div>
                        <div class="list-item-form">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="item-list">
                                        <span>Are You a US Reportable Person?*</span>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="itme-choose text-center">
                                                    <div class="choose">
                                                        <input type="radio" id="Reportable-1" name="is_us" value="true" checked><label for="Reportable-1">Yes</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="itme-choose text-center">
                                                    <div class="choose">
                                                        <input type="radio" id="Reportable-2" name="is_us" value="false" ><label for="Reportable-2">No</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="remember">
                                                    <label>*a US Citizen including dual citizenship. Or a US resident alien for tax purposes</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="item-list">
                                        <span>Are You a Politically Exposed Person (PEP)?*</span>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="itme-choose text-center">
                                                    <div class="choose">
                                                        <input type="radio" id="Reportable-3" name="is_pep" value="true" checked><label for="Reportable-3">Yes</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="itme-choose text-center">
                                                    <div class="choose">
                                                        <input type="radio" id="Reportable-4" name="is_pep" value="false" ><label for="Reportable-4">No</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="remember">
                                                    <label>*Politically Exposed Person (PEP) means a natural person who is or has been entrusted with prominent pubtlic funcitons during the last twelve (12) months, as well as immediate family members and close associates of such a person.</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="item-list">
                                        <span>Choose a password</span>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="itme-choose text-center">
                                                    <input type="password" class="pass-val" name="password" value="">
                                                    <span class="icon-pass"><img src="images/pass.png" class="img-fluid" alt=""></span>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="itme-choose text-center">
                                                    <input type="password" class="pass-val" name="re_password" value="">
                                                    <span class="icon-pass"><img src="images/pass.png" class="img-fluid" alt=""></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="item btn-confirm">
                                        <input type="submit" value="Continue" class="btn-submit tab-5" step_next="tab_5">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        {{-- declaration information--}}

        <section id="top" style="overflow: inherit;" class="step tab_5">
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
                        <div class="title-form text-center">Declaration</div>
                        <div class="list-item-form">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="item-list">
                                        <div class="item-check itme-choose">
                                            <input type="checkbox" id="fruit1" name="agree_1" value="true">
                                            <label for="fruit1">I, <span class="name_user"></span>, declare that I have carefully read and understood HYCM’s <a href="">Customer Agreement, Terms of Business, Privacy Policy</a> and all other policies as found here which I fully accept and agree with. I accept I am electronically signing these documents, and that this is a legally binding contractual agreement.</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="item-list">
                                        <div class="item-check itme-choose">
                                            <input type="checkbox" id="fruit2" name="agree_2" value="true">
                                            <label for="fruit2">I agree to receve your newsletters, special offers and also agree tobe contacted by HYCM representatives via phone or e-mail. Iunderstand I can opt out From receiving these offers/new sletters any time I wish to.</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="item btn-confirm">
                                        <input type="submit" value="Submit" class="btn-submit tab-final" step_next="tab_final">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </div>
@stop

@section('script')
    <script src="{{ __BASE_URL__ }}/js/tool.min.js"></script>
    <script>
        $('.step_create_account_tradding .btn-submit').click(function () {
            var step_next = $(this).attr('step_next');
            var data = {};
            data._token = '{{csrf_token()}}';
            data.f_name = $('.step_create_account_tradding input[ name = f_name ]').val();
            data.l_name = $('.step_create_account_tradding input[ name = l_name ]').val();
            data.email = $('.step_create_account_tradding input[ name = email ]').val();
            data.first_number = $('.step_create_account_tradding input[ name = first_number ]').val();
            data.phone_number = $('.step_create_account_tradding input[ name = phone_number ]').val();
            data.country = $('.step_create_account_tradding input[ name = country ]').val();
            data.check_ipay = $('.step_create_account_tradding input[ name = check_ipay ]:checked').val();
            data.date_birth = $('.step_create_account_tradding input[ name = date_birth ]').val();
            data.month_birth = $('.step_create_account_tradding input[ name = month_birth ]').val();
            data.year_birth = $('.step_create_account_tradding input[ name = year_birth ]').val();
            data.address = $('.step_create_account_tradding input[ name = address ]').val();
            data.city = $('.step_create_account_tradding input[ name = city ]').val();
            data.post_code = $('.step_create_account_tradding input[ name = post_code ]').val();
            data.account_type = $('.step_create_account_tradding input[ name = account_type ]:checked').val();
            data.account_currency = $('.step_create_account_tradding input[ name = account_currency ]').val();
            data.is_us = $('.step_create_account_tradding input[ name = is_us ]:checked').val();
            data.is_pep = $('.step_create_account_tradding input[ name = is_pep ]:checked').val();
            data.password = $('.step_create_account_tradding input[ name = password ]').val();
            data.re_password = $('.step_create_account_tradding input[ name = re_password ]').val();
            data.agree_1 = $('.step_create_account_tradding input[ name = agree_1 ]:checked').val();
            data.agree_2 = $('.step_create_account_tradding input[ name = agree_2 ]:checked').val();
console.log(data);
            if (step_next == 'tab_2') {
                if(data.f_name != '' && data.l_name != '' && data.email != '' && data.first_number != '' && data.phone_number != '' ) {
                    $('.step_create_account_tradding .step').hide();
                    $('.step_create_account_tradding .step.' + step_next).show();
                }
                else {
                    alert('Input not empty');
                }
            }
            if (step_next == 'tab_3') {
                if(data.country != '' && data.date_birth != '' && data.month_birth != '' && data.year_birth != '' && data.address != '' && data.post_code != '' ) {
                    $('.step_create_account_tradding .step').hide();
                    $('.step_create_account_tradding .step.' + step_next).show();
                }
                else {
                    alert('Input not empty');
                }
            }
            if (step_next == 'tab_4') {
                if(data.account_type != '' && data.account_currency != '' ) {
                    $('.step_create_account_tradding .step').hide();
                    $('.step_create_account_tradding .step.' + step_next).show();
                }
                else {
                    alert('Input not empty');
                }
            }
            if (step_next == 'tab_5') {
                if(data.is_us != '' && data.is_pep != '' && data.email != '' && data.password != '' && data.re_password != '') {
                    if (data.password != data.re_password) {
                        alert('Password is invalid');
                        return;
                    }
                    $('.step_create_account_tradding .step .name_user').html(data.f_name + ' ' + data.l_name);
                    $('.step_create_account_tradding .step').hide();
                    $('.step_create_account_tradding .step.' + step_next).show();
                }
                else {
                    alert('Input not empty');
                }
            }
            if(step_next == 'tab_final') {
                if(data.agree_1 != undefined && data.agree_2 != undefined) {
                    $.ajax({
                        type: "POST",
                        url: "{{ route('home.openTradingAccount') }}",
                        data: data,
                        cache: false,
                        success: function(res){
                            if(res.status) {
                                alert('Create trading account success.');
                                window.location.href = '{{ route('home.index') }}';
                            }
                            else {
                                alert(res.message);
                            }
                        }
                    });
                }
                else {
                    alert('Access declare');
                }

            }
        });
        function setFirstNumber() {
            $('.step_create_account_tradding input[ name = first_number ]').val($('.first_number li.number_first').text());
        };
        setFirstNumber();
        $('.first_number li').on('click', function(){
            $('.step_create_account_tradding input[ name = first_number ]').val($(this).text());
        });

        function setFirstCountry() {
            $('.step_create_account_tradding input[ name = country ]').val($('.country li.first_country').text());
        };
        setFirstCountry();
        $('.country li').on('click', function(){
            $('.step_create_account_tradding input[ name = country ]').val($(this).text());
        });

        function setfirst_account_currency() {
            $('.step_create_account_tradding input[ name = account_currency ]').val($('.account_currency li.first_account_currency').text());
        };
        setfirst_account_currency();
        $('.account_currency li').on('click', function(){
            $('.step_create_account_tradding input[ name = account_currency ]').val($(this).text());
        });

    </script>
@endsection