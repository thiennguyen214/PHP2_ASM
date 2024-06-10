@extends('layout.master')
@extends('layout.partials.topbar')
@extends('layout.partials.sidebar')

@section('title')
    Quản lý Sản Phẩm
@endsection
@section('active2')
    active
@endsection
@section('content')
<div class="app-title">
    <ul class="app-breadcrumb breadcrumb side">
        <li class="breadcrumb-item active"><a href="#"><b>Danh sách sản phẩm</b></a></li>
    </ul>
    <div id="clock"></div>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="tile">
            <div class="tile-body">
                <div class="row element-button">

                    <div class="col-sm-2">
                        <a class="btn btn-add btn-sm" href="{{url('admin/products/create')}}" title="Thêm"><i
                                class="fas fa-plus"></i>
                            Tạo mới sản phẩm</a>
                    </div>

                    <div class="col-sm-2">
                        <a class="btn btn-add btn-sm" href="{{url('admin/type_pros')}}" title="Thêm"><i
                                class="fas fa-plus"></i>
                            Danh mục loại SP</a>
                    </div>

                    <div class="col-sm-2">
                        <a class="btn btn-add btn-sm" href="{{url('admin/origins')}}" title="Thêm"><i
                                class="fas fa-plus"></i>
                            Xuất xứ</a>
                    </div>

                    <div class="col-sm-2">
                        <a class="btn btn-add btn-sm" href="{{url('admin/brands')}}" title="Thêm"><i
                                class="fas fa-plus"></i>
                            Thương hiệu</a>
                    </div>

                    <div class="col-sm-2">
                        <a class="btn btn-add btn-sm" href="{{url('admin/florals')}}" title="Thêm"><i
                                class="fas fa-plus"></i>
                            Loại hương (mùi hương)</a>
                    </div>

                    {{-- <div class="col-sm-2">
                        <a class="btn btn-add btn-sm" href="" title="Thêm"><i
                                class="fas fa-plus"></i>
                            Quản lý ảnh SP</a>
                    </div> --}}
                    <div class="col-sm-2">
                        <a class="btn btn-delete btn-sm" type="button" title="Xóa" onclick="myFunction(this)"><i
                                class="fas fa-trash-alt"></i> Xóa tất cả </a>
                    </div>
                </div>
                <table class="table table-hover table-bordered" id="sampleTable">
                    <table class="table table-hover table-bordered" id="sampleTable">
                        <thead>
                            <tr>
                                <th width="10"><input type="checkbox" id="all"></th>
                                <th>ID</th>
                                <th>Tên sản phẩm</th>
                                <th>Ảnh</th>
                                <th>Số lượng đã bán</th>
                                <th>Số lượng kho</th>
                                <th>Giá tiền</th>
                                <th>Giá Sale</th>
                                <th width="135">Chức năng</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>

                                @foreach ($products as $product)

                                    <td width="10"><input type="checkbox" name="check {{ $product['id'] }}"
                                            value=" {{ $product['id'] }}"></td>
                                    <td>
                                         {{ $product['id'] }}
                                    </td>
                                    <td>
                                         {{ $product['name'] }}
                                    </td>
                                    <td>
                                        <img class="img-card-person" src="{{asset('assets/'. $product['img'])}}" alt="">
                                    </td>
                                    <td>
                                         {{ $product['so_luong_ban'] }}
                                    </td>
                                    <td>
                                         {{ $product['so_luong_kho'] }}
                                    </td>
                                    <td>
                                         {{ $product['price'] }}
                                    </td>
                                    <td>
                                         {{ $product['price_sale'] }}
                                    </td>
                                    <td>
                                        <a href=" {{url('admin/products/' . $product['id'] . '/delete')}}"
                                            class="btn btn-primary btn-sm trash" type="button" title="Xóa"
                                            onclick="confirmDelete(event, this)"><i class="fas fa-trash-alt"></i>
                                        </a>

                                        <a href=" {{url('admin/products/'.$product['id'].'/show')}}"
                                            class="btn btn-primary btn-sm circle" type="button" title="Show">

                                            <i class="fas fa-circle"></i>
                                        </a>

                                        <a href="{{url('admin/products/' . $product['id'] . '/edit')}}"
                                            class="btn btn-primary btn-sm edit" type="button" title="Sửa"><i
                                                class="fas fa-edit"></i> </a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
            </div>
        </div>
    </div>
</div>
@endsection

<!--
  MODAL
-->