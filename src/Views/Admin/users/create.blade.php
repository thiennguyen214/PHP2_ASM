@extends('layout.master')
@extends('layout.partials.topbar')
@extends('layout.partials.sidebar')

@section('title')
    Thêm mới người dùng
@endsection
@section('active')
    active
@endsection
@section('content')
    <div class="app-title">
        <ul class="app-breadcrumb breadcrumb">
            <li class="breadcrumb-item"><a href="{{url('admin/users')}}">Danh sách khách hàng</a></li>
            <li class="breadcrumb-item"><a href="#">Thêm mới</a></li>
        </ul>
        <div id="clock"></div>
    </div>
    <div class="row">
        <div class="col-md-12">

            <div class="tile">
                <h3 class="tile-title">
                  @yield('title')
                </h3>
                <div class="tile-body">
                    <!-- <div class="row element-button">
                        <div class="col-sm-2">
                            <a class="btn btn-add btn-sm" data-toggle="modal" data-target="#exampleModalCenter"><b><i
                                        class="fas fa-folder-plus"></i> Tạo chức vụ mới</b></a>
                        </div>

                    </div> -->
                    @if (isset($_SESSION['errors']))
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($_SESSION['errors'] as $error)
                                    <li>
                                         {{$error}}
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                        @php
                        unset($_SESSION['errors'])
                        @endphp
                    @endif
                    <form class="row" action="{{ url('admin/users/store') }}" method="post" enctype="multipart/form-data">
                        <!-- <div class="form-group col-md-4">
                            <label class="control-label">ID khách hàng</label>
                            <input class="form-control" type="text" name="id" disabled>
                        </div> -->
                        <div class="form-group col-md-4">
                            <label class="control-label">Họ và tên</label>
                            <input class="form-control" type="text" name="name">
                        </div>
                        <div class="form-group col-md-4">
                            <label class="control-label">Địa chỉ email</label>
                            <input class="form-control" type="email" name="email">
                        </div>
                        <div class="form-group col-md-4">
                            <label class="control-label">Password</label>
                            <input class="form-control" type="text" name="pass">
                        </div>
                        <div class="form-group  col-md-4">
                            <label class="control-label">Số điện thoại</label>
                            <input class="form-control" type="tel" name="tell">
                        </div>
                        <div class="form-group col-md-4">
                            <label class="control-label">Địa chỉ</label>
                            <input class="form-control" type="text" name="address">
                        </div>
                        <div class="form-group col-md-3">
                            <label class="control-label">Loại User</label>
                            <select name="role" class="form-control" id="exampleSelect2" required>
                                <option value="1">Admin</option>
                                <option value="0" selected>Member</option>
                            </select>
                        </div>
                        <div class="form-group col-md-12">
                            <label for="img" class="form-label">Avatar:</label>
                            <input type="file" class="form-control" id="img" placeholder="Enter avatar" name="img">
                        </div>
                        <button class="btn btn-save" type="submit">Thêm mới</button>
                        <a class="btn btn-cancel" href="{{url('admin/users')}}">Hủy bỏ</a>
                    </form>
                </div>

            </div>

@endsection