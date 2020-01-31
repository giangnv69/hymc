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
                    <form action="{{ route('home.saveDeclaration') }}" method="POST">
                        {{ csrf_field() }}
                        <div class="title-form text-center">Declaration</div>
                        <div class="list-item-form">
                            <div class="row">
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
                                    <div class="item btn-confirm">
                                        <input type="submit" value="Submit" class="btn-submit">
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