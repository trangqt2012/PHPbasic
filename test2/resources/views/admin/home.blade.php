
<!-- column -->
@extends('admin')
@section('content')
    <div class="row page-titles">
        <div class="col-md-5 align-self-center">
            <h3 class="text-themecolor">Quản lí Người dùng</h3>
        </div>
        <div class="col-md-7 align-self-center">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Trang chủ</a></li>
                <li class="breadcrumb-item active">Tài Khoản</li>
            </ol>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Danh sách Người dùng</h4>
                        <a href="{{URL::to('/admin/user')}}" class="btn btn-success">User</a>
                        <a href="{{URL::to('/admin/admin')}}" class="btn btn-success">Admin</a>
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                <tr>
                                    <th>STT</th>
                                    <th>Tên đăng nhập</th>
                                    <th>Email</th>
                                    <th class="text-center">Phân quyền</th>
                                    <th class="text-nowrap">Tùy chọn</th>
                                </tr>
                                </thead>
                                @foreach ($user as $item)
                                    <tbody>
                                    <tr style="max-height: 200px; padding-bottom:20px;">
                                        <td>{{$item->id}}</td>
                                        <td>{{$item->name}}</td>
                                        <td>{{$item->email}}</td>
                                        @php
                                            switch ($item->permission)
                                                {
                                                case '1':
                                                $permission = 'Biên tập viên';
                                                $label = 'label-danger';
                                                break;
                                                case '2':
                                                $permission = 'Quản trị viên';
                                                $label = 'label-info';
                                                break;
                                                case '0':
                                                $permission = 'Người dùng';
                                                $label = 'label-warning';
                                                break;
                                                }
                                        @endphp
                                        <td class="text-center"><span class="label {{$label}}">{{$permission}}</span></td>
                                        <td class="text-nowrap">
                                            <a href="{{URL::to('/admin/profile/'.$item->id)}}" data-toggle="tooltip" data-original-title="Edit"> <i class="fa fa-pencil text-inverse m-r-10"></i> </a>
                                            <a href="{{URL::to('/admin/profile/delete/'.$item->id)}}" data-toggle="tooltip" data-original-title="Delete"> <i class="fa fa-close text-danger"></i> </a>
                                        </td>
                                    </tr>
                                    </tbody>
                                @endforeach
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
