@extends('layout.master')
@extends('layout.partials.topbar')
@extends('layout.partials.sidebar')

@section('title')
    Sửa thông tin users
@endsection
@section('active')
    active
@endsection
@section('content')
    <div class="app-title">
        <ul class="app-breadcrumb breadcrumb">
            <li class="breadcrumb-item"><a href="{{url('admin/users')}}">Danh sách khách hàng</a></li>
            <li class="breadcrumb-item"><a href="#">Chỉnh sửa</a></li>
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
                    <form class="row" action="{{ url("admin/users/{$user['id']}/update") }}" method="post" enctype="multipart/form-data">
                        <!-- <div class="form-group col-md-4">
                            <label class="control-label">ID khách hàng</label>
                            <input class="form-control" type="text" name="id" disabled>
                        </div> -->
                        <div class="form-group col-md-4">
                            <label class="control-label">Họ và tên</label>
                            <input class="form-control" type="text" name="name" value="{{ $user['name'] }}">
                        </div>
                        <div class="form-group col-md-4">
                            <label class="control-label">Địa chỉ email</label>
                            <input class="form-control" type="email" name="email" value="{{ $user['email'] }}">
                        </div>
                        <div class="form-group col-md-4">
                            <label class="control-label">Password</label>
                            <input class="form-control" type="text" name="pass" value="{{ $user['pass'] }}">
                        </div>
                        <div class="form-group  col-md-4">
                            <label class="control-label">Số điện thoại</label>
                            <input class="form-control" type="tel" name="tell" value="{{ $user['tell'] }}">
                        </div>
                        <div class="form-group col-md-4">
                            <label class="control-label">Địa chỉ</label>
                            <input class="form-control" type="text" name="address" value="{{ $user['address'] }}">
                        </div>
                        <div class="form-group col-md-3">
                            <label class="control-label">Loại User</label>
                            <select name="role" class="form-control" id="exampleSelect2" required>
                                <option value="1" {{ $user['role'] == 1 ? 'selected' : '' }}>Admin</option>
                                <option value="0" {{ $user['role'] == 0 ? 'selected' : '' }}>Member</option>
                            </select>
                        </div>
                        <div class="form-group col-md-12">
                            <label for="img" class="form-label">Avatar:</label>
                            <input type="file" class="form-control" id="img" placeholder="Enter avatar" name="img">
                            <img src="{{ asset($user['img']) }}" alt="" width="100px">
                        </div>
                        <button class="btn btn-save" type="submit">Chỉnh sửa</button>
                        <a class="btn btn-cancel" href="{{url('admin/users')}}">Hủy bỏ</a>
                    </form>
                </div>

            </div>

@endsection