@extends('backend.index')
@section('controller','Cấu hình chung')
@section('action','Cập nhật')
@section('content')
    @include('backend.block.error')

    <div class="container">
        <div class="row">
            @if(!$data->verify_driver_license)
                <div class="col-md-12">
                    <p>Driver License</p>
                    <div class="col-md-6">
                        <div class="img_verify" style="height: 300px;background: url('{{ asset('uploads/verify') }}/{{$data->img_driver_license}}')">

                        </div>
                    </div>
                    <div class="col-md-12">
                        <a href="{{route('verify.verifiedimg', ['id' => $data->id, 'type' => 'verify_driver_license'])}}">
                            <div class="btn btn-success">
                                Xác minh
                            </div>
                        </a>
                    </div>
                </div>
            @endif
            @if(!$data->verify_id_card)
                <div class="col-md-12">
                    <p>ID card</p>
                    <div class="col-md-6">
                        <p>Before</p>
                        <div class="img_verify" style="height: 300px;background: url('{{ asset('uploads/verify') }}/{{$data->img_id_card_before}}')">

                        </div>
                    </div>
                    <div class="col-md-6">
                        <p>After</p>
                        <div class="img_verify" style="height: 300px;background: url('{{ asset('uploads/verify') }}/{{$data->img_id_card_after}}')">

                        </div>
                    </div>
                    <div class="col-md-12">
                        <a href="{{route('verify.verifiedimg', ['id' => $data->id, 'type' => 'verify_id_card'])}}">
                            <div class="btn btn-success">
                                Xác minh
                            </div>
                        </a>
                    </div>
                </div>
            @endif
            @if(!$data->verify_passport)
                <div class="col-md-12">
                    <p>Passport</p>
                    <div class="col-md-6">
                        <div class="img_verify" style="height: 300px;background: url('{{ asset('uploads/verify') }}/{{$data->img_passport}}')">

                        </div>
                    </div>
                    <div class="col-md-12">
                        <a href="{{route('verify.verifiedimg', ['id' => $data->id, 'type' => 'verify_passport'])}}">
                            <div class="btn btn-success">
                                Xác minh
                            </div>
                        </a>
                    </div>
                </div>
            @endif
        </div>
    </div>
@endsection