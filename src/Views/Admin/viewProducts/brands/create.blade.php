@extends('layout.master')
@extends('layout.partials.topbar')
@extends('layout.partials.sidebar')

@section('title')
Thêm mới Thương Hiệu
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
        <li class="breadcrumb-item "><a href="{{url('admin/brands')}}">
                <b>Danh sách thương hiệu</b></a>
        </li>
        <li class="breadcrumb-item"><a href="#">Thêm thương hiệu</a></li>
    </ul>
    <div id="clock"></div>
</div>
<div class="row">
    <div class="col-md-12">

        <div class="tile">

            <h3 class="tile-title">Tạo mới thương hiệu</h3>
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
            <form action="{{url('admin/brands/store')}}" class="row" method="POST" enctype="multipart/form-data">
                <div class="form-group col-md-4">
                    <label class="control-label">Tên thương hiệu</label>
                    <input name="name" class="form-control" type="text">
                </div>
                <div class="form-group col-md-12" st>
                    <label class="control-label">Ảnh Logo</label>
                    <div id="myfileuploadLogo">
                        <input type="file" id="uploadfileLogo" name="ImageUploadLogo" style="display: none;"
                            onchange="previewImage(this);" />
                    </div>
                    <div id="thumbboxLogo">
                        <img height="300" width="300" alt="Thumb image" id="thumbimageLogo" style="display: none" />
                        <a class="removeimg" href="javascript:"></a>
                    </div>
                    <div id="boxchoice">
                        <label for="uploadfileLogo" class="Choicefile"><i class='bx bx-upload'></i> Chọn ảnh</label>
                        <p style="clear:both"></p>
                    </div>
                </div>
                <div class="form-group col-md-12">
                    <label class="control-label">Hình ảnh</label>
                    <div id="myfileupload">
                        <input type="file" id="uploadfile" name="ImageUpload" style="display: none;"
                            onchange="previewImage(this);" />
                    </div>
                    <div id="thumbbox">
                        <img height="300" width="300" alt="Thumb image" id="thumbimage" style="display: none" />
                        <a class="removeimg" href="javascript:"></a>
                    </div>
                    <div id="boxchoice">
                        <label for="uploadfile" class="Choicefile"><i class='bx bx-upload'></i> Chọn ảnh</label>
                        <p style="clear:both"></p>
                    </div>
                </div>
                <!-- <div class="form-group col-md-12"></div> -->
                <button class="btn btn-save" type="submit">Lưu lại</button>
                <a class="btn btn-cancel" href="{{url('admin/brands')}}">Hủy bỏ</a>
            </form>
        </div>
    </div>
</div>
@endsection