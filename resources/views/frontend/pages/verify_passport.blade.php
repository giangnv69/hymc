@extends('frontend.master')
@section('main')

    <?php if(!empty($brand)){
        $brand = json_decode($brand->content);
    } ?>

    <?php if(!empty($data)){
        $content = json_decode($data->content);
    } ?>
    <link rel="stylesheet" type="text/css" title="" href="{{ __BASE_URL__ }}/css/tool.min.css">
    <section id="top" style="overflow: inherit; padding: 100px 0 100px 0">
        <div class="container">
            <div class="content">
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-right text-center max-upload">
                            <form action="" class="verify">
                                <div class="title-form text-center" style="justify-content: center;">Passport</div>
                                <div class="info-verifile">
                                    <div class="item">
                                        <div class="upload-file" style="display: block;">
                                            <div class="content-upload">
                                                <div class="title-upload text-center">Passport</div>
                                                <div class="uploadOuter">
												<span class="dragBox" >
													<div class="avar-upload text-center"><img src="{{ __BASE_URL__ }}/images/upload.png" class="img-fluid" alt=""></div>
													<input type="file" onChange="dragNdrop(event)" name="img_passport" ondragover="drag()" ondrop="drop()" id="uploadFile"  />
												</span>
                                                    <p class="text-center">Drag file here <br> or</p>
                                                    <label for="uploadFile" class="text-center">Browse File</label>
                                                </div>
                                                <div id="preview"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="btn-fonfirm text-center">
                                    <input type="button" value="Confirm" class="btn_submit_form_verify">
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
    <script>
        function checkImg(data) {
            var fileType = data.type;
            var match = ['image/jpeg', 'image/png', 'image/jpg'];
            if(!((fileType == match[0]) || (fileType == match[1]) || (fileType == match[2]))){
                alert('Sorry, only JPG, JPEG, & PNG files are allowed to upload.');
                return false;
            }
            return true;
        }

        $(".btn_submit_form_verify").on("click", function(e) {

            var data = {};
            data._token = '{{csrf_token()}}';
            data.img_passport = $('.verify input[ name = img_passport ]')[0].files[0];

            var formData = new FormData();

            formData.append('_token', data._token);
            if ( data.img_passport != undefined) {
                formData.append('img_passport', data.img_passport);
            }

            $.ajax({
                type: "POST",
                url: "{{ route('home.my-profile.upload-img-verify') }}",
                data: formData,
                cache: false,
                contentType: false, // NEEDED, DON'T OMIT THIS (requires jQuery 1.6+)
                processData: false, // NEEDED, DON'T OMIT THIS
                success: function(res){
                    if(res.status) {
                        alert('Update image success.');
                        window.location.href = '{{ route('home.verify') }}';
                    }
                    else {
                        alert(res.message);
                        window.location.href = '{{ route('home.verify') }}';
                    }
                }
            });
        });
    </script>
@endsection