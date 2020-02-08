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

    <section id="top" style="overflow: inherit; padding: 100px 0 100px 0">
        <div class="container">
            <div class="content">
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-right text-center">
                            <form action="">
                                <div class="title-form text-center" style="justify-content: center;">Identity Verification</div>
                                <div class="info-title">
                                    <p>Choose Your Document from the List:</p>
                                </div>
                                <div class="list-veryfile">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <a href="{{ route('home.verify.driver-license') }}">
                                                <div class="item text-center">
                                                    <div class="icon"><img src="{{ __BASE_URL__ }}/images/pt1.png" class="img-fluid" alt=""></div>
                                                    <div class="info">
                                                        <h2>Driver's License</h2>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-md-4">
                                            <a href="{{ route('home.verify.id-card') }}">
                                                <div class="item text-center">
                                                    <div class="icon"><img src="{{ __BASE_URL__ }}/images/pt2.png" class="img-fluid" alt=""></div>
                                                    <div class="info">
                                                        <h2>ID Card</h2>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-md-4">
                                            <a href="{{ route('home.verify.passport') }}">
                                                <div class="item text-center">
                                                    <div class="icon"><img src="{{ __BASE_URL__ }}/images/pt3.png" class="img-fluid" alt=""></div>
                                                    <div class="info">
                                                        <h2>Passport</h2>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="content-identity">
                            <div class="how-verify max-info">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="left text-right">
                                            <div class="avarta"><img src="{{ __BASE_URL__ }}/images/ident.png" class="img-fluid" alt=""></div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="right">
                                            <div class="info">
                                                <h3>How to Verify Your Identity?</h3>
                                                <p>The documents should clearly show:</p>
                                                <ul>
                                                    <li>Your Full Name</li>
                                                    <li>Your Photo</li>
                                                    <li>Date of Birth</li>
                                                    <li>Expiry Date</li>
                                                    <li>Document Number</li>
                                                    <li>Your Signature</li>
                                                </ul>
                                            </div>
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

@stop

@section('script')
    <script src="{{ __BASE_URL__ }}/js/tool.min.js"></script>
@endsection