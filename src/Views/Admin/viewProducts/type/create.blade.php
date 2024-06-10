@extends('layout.master')
@extends('layout.partials.topbar')
@extends('layout.partials.sidebar')

@section('title')
Thêm mới Loại Hàng
@endsection
@section('active2')
active
@endsection
@section('content')
<div class="app-title">
    <ul class="app-breadcrumb breadcrumb">
        <li class="breadcrumb-item active"><a href="{{url('admin/products')}}">
                <b>Danh sách sản phẩm</b></a>
        </li>
        <li class="breadcrumb-item"><a href="{{url('admin/type_pros')}}">
                <b>Danh sách loại hàng</b></a>
        </li>
        <li class="breadcrumb-item"><a href="#">Thêm loại hàng</a></li>
    </ul>
    <div id="clock"></div>
</div>
<div class="row">
    <div class="col-md-12">

        <div class="tile">

            <h3 class="tile-title">Tạo mới loại hàng</h3>
            <div class="tile-body">
            </div>
            <form class="row" method="post" action="{{ url('admin/type_pros/store') }}">
                <div class="form-group col-md-4">
                    <label class="control-label">Tên loại hàng</label>
                    <input name="name" class="form-control" type="text" required>
                </div>
                <div class="form-group col-md-12"></div>
                <button class="btn btn-save" type="submit">Lưu lại</button>
                <a class="btn btn-cancel" href="{{url('admin/type_pros')}}">Hủy bỏ</a>
            </form>
        </div>

    </div>
</div>

    @endsection