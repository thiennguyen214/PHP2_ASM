@extends('layout.master')
@extends('layout.partials.topbar')
@extends('layout.partials.sidebar')

@section('title')
Sửa Loại Hàng
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
        <li class="breadcrumb-item "><a href="{{url('admin/type_pros')}}">
                <b>Danh sách loại hàng</b></a>
        </li>
        <li class="breadcrumb-item"><a href="#">Sửa loại hàng</a></li>
    </ul>
</div>
<div class="row">
    <div class="col-md-12">

        <div class="tile">

            <h3 class="tile-title">Sửa loại hàng</h3>
            <div class="tile-body">
            </div>
            <?php if (isset($_SESSION['errors'])): ?>
                <div class="alert alert-danger">
                    <ul>
                        <?php foreach ($_SESSION['errors'] as $error): ?>
                            <li>
                                <?= $error ?>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
                <?php unset($_SESSION['errors']); ?>
            <?php endif; ?>
            <form class="row" action="{{url('admin/type_pros/'.$type['id'].'/update')}}" method="post" >
                <!-- <div class="form-group col-md-4">
                            <label hidden class="control-label">ID loại hàng</label>
                            <input hidden class="form-control" type="text">
                        </div> -->
                <div class="form-group col-md-4">
                    <label class="control-label">Tên loại hàng</label>
                    <input name="name" class="form-control" type="text" value="<?= $type['name'] ?>"
                        required placeholder="Nhập tên loại nước hoa">
                </div>
                <div class="form-group col-md-12"></div>
                <button class="btn btn-save" type="submit">Lưu lại</button>
                <a class="btn btn-cancel" href="{{url('admin/type_pros')}}">Hủy bỏ</a>
            </form>
        </div>

    </div>
    @endsection