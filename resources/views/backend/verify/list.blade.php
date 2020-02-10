@extends('backend.index')
@section('controller','Trang')
@section('controller_route',route('pages.list'))
@section('action','Danh sách')
@section('content')
    @include('backend.block.error')
    <div class="nav-tabs-custom">
        <ul class="nav nav-tabs">
            <li class="active"><a href="#activity" data-toggle="tab" aria-expanded="true">Danh sách</a></li>
        </ul>
    </div>

    <div class="table-translate">
        <table class="table table-hover">
            <thead>
            <tr>
                <th width="30px">STT</th>
                <th width="">Email</th>
                <th width="">Driver License</th>
                <th width="">ID card</th>
                <th width="">Passport</th>
                <th width="">Action</th>
            </tr>
            </thead>
            <tbody class="table-body-pro">
            @foreach ($data as $item)
                <tr>
                    <td>{{ $loop->index + 1 }}</td>
                    <td>{{ $item->email }}</td>
                    <td style="color: {{$item->verify_driver_license ? 'green' : 'red'}}">Verify</td>
                    <td style="color: {{$item->verify_id_card ? 'green' : 'red'}}">Verify</td>
                    <td style="color: {{$item->verify_passport ? 'green' : 'red'}}">Verify</td>
                    <td>
                        <a href="{{ route('verify.verified', ['id' => $item->id ]) }}"
                           class="btn btn-success btn-sm">
                            <i class="fa fa-pencil fa-fw" aria-hidden="true"></i> Xác minh</a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection