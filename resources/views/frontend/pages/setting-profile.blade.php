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
        <section id="top" style="overflow: inherit; padding: 100px 0 150px 0">
            <div class="container">
                <div class="content">
                    <div class="row">
                        <div class="col-md-7">
                            <div class="form-left">
                                <div class="title-form"><img src="{{ __BASE_URL__ }}/images/user.png" class="img-fluid" alt="">Profile Infomation</div>
                                <div class="list-step-form">
                                    <div class="item-step">
                                        <div class="title-step"><a href="javascript:0" class="">Basic Info <i class="fa fa-angle-down"></i></a></div>
                                        <div class="form-step">
                                            <div class="list-item-form">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="item">
                                                            <label for="">First Name</label>
                                                            <input type="text" value="Mai">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="item">
                                                            <label for="">Last name</label>
                                                            <input type="text" value="Van Anh">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="item">
                                                            <label for="">Email</label>
                                                            <input type="text" value="example@email.com">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3" style="padding-right: 0">
                                                        <div class="item item-nation">
                                                            <dl class="dropdown">
                                                                <dt><a><span class="selected"><img src="{{ __BASE_URL__ }}/images/tran1.png" class="img-fluid" alt="">+84</span><i class="fa fa-angle-down"></i></a></dt>
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
                                                            <input type="text" value="0123 466 789">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item-step">
                                        <div class="title-step"><a href="javascript:0">Privacy Info <i class="fa fa-angle-down"></i></a></div>
                                        <div class="form-step">
                                            <div class="list-item-form">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="item">
                                                            <label for="">Country of residence</label>
                                                            <dl class="dropdown">
                                                                <dt><a><span class="selected"><img src="{{ __BASE_URL__ }}/images/tran2.png" class="img-fluid" alt="">Vietnam</span><i class="fa fa-angle-down"></i></a></dt>
                                                                <dd>
                                                                    <ul style="display: none;">
                                                                        <li><a><img src="{{ __BASE_URL__ }}/images/tran2.png" class="img-fluid" alt="">Vietnam</a></li>
                                                                        <li><a><img src="{{ __BASE_URL__ }}/images/tran1.png" class="img-fluid" alt="">England</a></li>
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
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-step">
                                            <div class="list-item-form">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="item-list">
                                                            <span>Are You a US Reportable Person?*</span>
                                                            <div class="row">
                                                                <div class="col-md-4">
                                                                    <div class="itme-choose text-center">
                                                                        <div class="choose">
                                                                            <input type="radio" id="Reportable-1" name="radio-group" checked><label for="Reportable-1">Yes</label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <div class="itme-choose text-center">
                                                                        <div class="choose">
                                                                            <input type="radio" id="Reportable-2" name="radio-group" ><label for="Reportable-2">No</label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="item-list">
                                                            <span>Are You a Politically Exposed Person (PEP)?**</span>
                                                            <div class="row">
                                                                <div class="col-md-4">
                                                                    <div class="itme-choose text-center">
                                                                        <div class="choose">
                                                                            <input type="radio" id="Reportable-3" name="radio-group1" checked><label for="Reportable-3">Yes</label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <div class="itme-choose text-center">
                                                                        <div class="choose">
                                                                            <input type="radio" id="Reportable-4" name="radio-group1" ><label for="Reportable-4">No</label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-12">
                                                                    <div class="remember">
                                                                        <p><label>*a US Citizen including dual citizenship. Or a US resident alien for tax purposes</label></p>
                                                                        <p><label>*Politically Exposed Person (PEP) means a natural person who is or has been entrusted with prominent pubtlic funcitons during the last twelve (12) months, as well as immediate family members and close associates of such a person.</label></p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item-step">
                                        <div class="title-step"><a href="javascript:0">Password and Declaration <i class="fa fa-angle-down"></i></a></div>
                                        <div class="form-step">
                                            <div class="list-item-form">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="item-list">
                                                            <span>Password</span>
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <div class="itme-choose text-center">
                                                                        <input type="password" class="pass-val" value="123456789">
                                                                        <span class="icon-pass"><img src="{{ __BASE_URL__ }}/images/pass.png" class="img-fluid" alt=""></span>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="itme-choose text-center">
                                                                        <input type="password" class="pass-val" value="123456789">
                                                                        <span class="icon-pass"><img src="{{ __BASE_URL__ }}/images/pass.png" class="img-fluid" alt=""></span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="item-list">
                                                            <div class="item-check itme-choose">
                                                                <input type="checkbox" id="fruit1" name="fruit-1" value="">
                                                                <label for="fruit1">I, Mai Van Anh, declare that I have carefully read and understood HYCM’s <a href="">Customer Agreement, Terms of Business, Privacy Policy</a> and all other policies as found here which I fully accept and agree with. I accept I am electronically signing these documents, and that this is a legally binding contractual agreement.</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="item-list">
                                                            <div class="item-check itme-choose">
                                                                <input type="checkbox" id="fruit2" name="fruit-2" value="">
                                                                <label for="fruit2">I agree to receve your newsletters, special offers and also agree tobe contacted by HYCM representatives via phone or e-mail. Iunderstand I can opt out From receiving these offers/new sletters any time I wish to.</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="item btn-confirm bnt-edit-member text-right">
                                                            <input type="submit" value="Update" class="btn-submit">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-5">
                            <div class="form-right">
                                <div class="title-form"><img src="{{ __BASE_URL__ }}/images/verifile.png" class="img-fluid" alt="">Identity Verification</div>
                                <div class="info-verifile">
                                    <div class="item">
                                        <p><span>Driver's License</span> <label>Verifiled <img src="{{ __BASE_URL__ }}/images/succ.png" class="img-fluid" alt=""></label></p>
                                    </div>
                                    <div class="item">
                                        <p><span>Identity Card (ID Card)</span> <label>Verifiled <img src="{{ __BASE_URL__ }}/images/succ.png" class="img-fluid" alt=""></label></p>
                                    </div>
                                    <div class="item">
                                        <p class="none-file"><span>Passport</span> <label class="no-file">Not Verifiled <i class="fa fa-angle-down"></i></label></p>
                                        <div class="upload-file">
                                            <div class="content-upload">
                                                <div class="title-upload text-center">Passport</div>
                                                <div class="uploadOuter">
                                            <span class="dragBox" >
                                                <div class="avar-upload text-center"><img src="{{ __BASE_URL__ }}/images/upload.png" class="img-fluid" alt=""></div>
                                                <input type="file" onChange="dragNdrop(event)"  ondragover="drag()" ondrop="drop()" id="uploadFile"  />
                                            </span>
                                                    <p class="text-center">Drag file here <br> or</p>
                                                    <label for="uploadFile" class="text-center">Browse File</label>
                                                </div>
                                                <div id="preview"></div>
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
                        url: "{{ __BASE_URL__ }}/trading/open-trading-account",
                        data: data,
                        cache: false,
                        success: function(data1){
                            console.log(data1);
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