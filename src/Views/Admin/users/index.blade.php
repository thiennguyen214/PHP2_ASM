@extends('layout.master')
@extends('layout.partials.topbar')
@extends('layout.partials.sidebar')

@section('title')
    Quản lý Người dùng
@endsection
@section('active')
    active
@endsection
@section('content')

    <div class="app-title">
        <ul class="app-breadcrumb breadcrumb side">
            <li class="breadcrumb-item active"><a href="#"><b>
                        @yield('title')
                    </b></a></li>
        </ul>
        <div id="clock"></div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="tile">
                <div class="tile-body">

                    <div class="row element-button">
                        <div class="col-sm-2">

                            <a class="btn btn-add btn-sm" href="{{url('admin/users/create')}}" title="Thêm"><i
                                    class="fas fa-plus"></i>
                                Tạo mới khách hàng</a>
                        </div>
                        <div class="col-sm-2">
                            <a class="btn btn-delete btn-sm" type="button" title="Xóa" onclick="myFunction(this)"><i
                                    class="fas fa-trash-alt"></i> Xóa tất cả </a>
                        </div>
                    </div>
                    <table class="table table-hover table-bordered js-copytextarea" cellpadding="0" cellspacing="0"
                        border="0" id="sampleTable">
                        <thead>
                            <tr>
                                <th width="10"><input type="checkbox" id="all"></th>
                                <th>ID khách hàng</th>
                                <th width="150">Họ và tên</th>
                                <th width="20">Ảnh thẻ</th>
                                <th width="300">Địa chỉ</th>
                                <!-- <th>Ngày sinh</th> -->
                                <th>SĐT</th>
                                <th>Ngày tạo</th>
                                <th>Quyền</th>
                                <th width="100">Tính năng</th>
                            </tr>
                        </thead>
                        <tbody>
                            
                            @foreach ($users as $user)
                                <tr>
                                    <td width="10"><input type="checkbox" name="check {{ $user['id'] }}"
                                            value=" {{ $user['id'] }}"></td>
                                    <td>
                                         {{ $user['id'] }}
                                    </td>
                                    <td>
                                         {{ $user['name'] }}
                                    </td>
                                    <td><img class="img-card-person" src="{{ asset($user['img']) }}" alt=""></td>
                                    <td>
                                         {{ $user['address'] }}
                                    </td>
                                    <!-- <td>12/02/1999</td> -->
                                    <!-- <td>Nữ</td> -->
                                    <td>
                                         {{ $user['tell'] }}
                                    </td>
                                    <td>
                                        {{ $user['crea'] }}
                                    </td>
                                    <td>
                                        {{ $user['role'] == 1 ? 'Admin' : 'Khách hàng'}}
                                    </td>
                                    <td class="table-td-center">
                                        <a href="  {{url('admin/users/' . $user['id'] . '/delete')}}"
                                            class="btn btn-primary btn-sm trash" title="Xóa"
                                            onclick="confirmDelete(event, this)">
                                            <i class="fas fa-trash-alt"></i>
                                        </a>
                                        <a href="{{url('admin/users/' . $user['id'] . '/edit')}}"
                                            class="btn btn-primary btn-sm edit" title="Sửa" id="show-emp">
                                            <i class="fas fa-edit"></i>
                                        </a>
                                    </td>
                                </tr>
                                @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection
