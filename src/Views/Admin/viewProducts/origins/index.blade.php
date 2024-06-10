@extends('layout.master')
@extends('layout.partials.topbar')
@extends('layout.partials.sidebar')

@section('title')
Danh Sách Xuất Sứ
@endsection
@section('active2')
active
@endsection
@section('content')
<div class="app-title">
    <ul class="app-breadcrumb breadcrumb side">
        <li class="breadcrumb-item active"><a href="{{url('admin/products')}}">
                <b>Danh sách sản phẩm</b></a>
        </li>
        <li class="breadcrumb-item "><a href="#">
                Danh sách xuất xứ</a>
        </li>
    </ul>
    <div id="clock"></div>
</div>

<div class="row">
    <div class="col-md-12">
        <div class="tile">
            <div class="tile-body">

                <div class="row element-button">
                    <div class="col-sm-2">

                        <a class="btn btn-add btn-sm" href="{{url('admin/origins/create')}}" title="Thêm"><i
                                class="fas fa-plus"></i>
                            Tạo mới xuất xứ</a>
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
                            <th width="200">ID xuất xứ</th>
                            <th width="350">Tên xuất xứ</th>
                            <th width="100">Tính năng</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($origins as $origin) {
                            ?>
                            <tr>
                                <td width="10"><input type="checkbox" name="check<?= $origin['id'] ?>"
                                        value="<?= $origin['id'] ?>"></td>
                                <td>
                                    <?= $origin['id'] ?>
                                </td>
                                <td>
                                    <?= $origin['name'] ?>
                                </td>

                                <td class="table-td-center">
                                    <a href="{{url('admin/origins/'. $origin['id'].'/delete')}}"
                                        class="btn btn-primary btn-sm trash" title="Xóa"
                                        onclick="confirmDelete(event, this)">
                                        <i class="fas fa-trash-alt"></i>
                                    </a>
                                    <a href="{{url('admin/origins/'. $origin['id'].'/edit')}}"
                                        class="btn btn-primary btn-sm edit" title="Sửa" id="show-emp">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                </td>
                            </tr>
                            <?php
                        } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection


