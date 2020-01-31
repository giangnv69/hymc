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
                    <form action="{{ route('home.savePersonalInformation') }}" method="POST">
                        {{ csrf_field() }}
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
                                                    <input type="password" class="pass-val" value="123456789">
                                                    <span class="icon-pass"><img src="images/pass.png" class="img-fluid" alt=""></span>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="itme-choose text-center">
                                                    <input type="password" class="pass-val" value="123456789">
                                                    <span class="icon-pass"><img src="images/pass.png" class="img-fluid" alt=""></span>
                                                </div>
                                            </div>
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