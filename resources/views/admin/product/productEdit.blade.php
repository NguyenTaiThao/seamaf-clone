@extends('layouts.admin.layout')

@section('content')
<nav aria-label="breadcrumb" class="">
    <div class="container-fluid breadcrumb-box">
        <ol class="breadcrumb mb-0">
            <li class="breadcrumb-item">
                <a href="#">
                    <i class="fal fa-home-alt home-icon"></i>
                </a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">Quản lý sản phẩm</li>
        </ol>
    </div>
</nav>

<div class="container-fluid">
    <div class="row">
        <h1 class="page-title">Quản lý sản phẩm</h1>
    </div>

    <div class="row">
        <div class="col-lg-12 bg-white">
            <div class="panel panel-default m-md-5 m-2">
                <div class="panel-body">
                    <form role="form" method="post" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Tên sản phẩm</label>
                                    <input required name="prd_name" class="form-control" placeholder="" value="{{$data->name}}">
                                </div>

                                <div class="form-group mt-2">
                                    <label>Giá sản phẩm</label>
                                    <input required name="prd_price" type="number" min="0" class="form-control" value="{{$data->price}}">
                                </div>
                                <div class="form-group mt-2">
                                    <label>Bảo hành</label>
                                    <input required name="prd_warranty" type="text" class="form-control">
                                </div>
                                <div class="form-group mt-2">
                                    <label>Phụ kiện</label>
                                    <input required name="prd_accessories" type="text" class="form-control">
                                </div>
                                <div class="form-group mt-2">
                                    <label>Khuyến mãi</label>
                                    <input required name="prd_promotion" type="text" class="form-control">
                                </div>
                                <div class="form-group mt-2">
                                    <label>Tình trạng</label>
                                    <input required name="prd_new" type="text" class="form-control">
                                </div>

                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Ảnh sản phẩm</label>

                                    <input required name="prd_image" type="file" onchange="">
                                    <br>
                                    <div>
                                        <img id="output_img" src="img/download.jpeg">
                                    </div>
                                </div>
                                <div class="form-group mt-2">
                                    <label>Danh mục</label>
                                    <select name="cat_id" class="form-control">
                                        <option value=1 selected>Còn hàng</option>
                                        <option value=0>Hết hàng</option>
                                    </select>
                                </div>

                                <div class="form-group mt-2">
                                    <label>Trạng thái</label>
                                    <select name="prd_status" class="form-control">
                                        <option value=1 selected>Còn hàng</option>
                                        <option value=0>Hết hàng</option>
                                    </select>
                                </div>

                                <div class="form-group mt-2">
                                    <label>Sản phẩm nổi bật</label>
                                    <div class="checkbox">
                                        <label>
                                            <input name="prd_featured" type="checkbox" value=1>Nổi bật
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group mt-2">
                                    <label>Mô tả sản phẩm</label>
                                    <textarea required name="prd_details" class="form-control" rows="3"></textarea>
                                </div>

                            </div>
                            <div class="col-md-12 mt-4 text-right">
                                <button name="sbm" type="submit" class="btn btn-success">Thêm mới</button>
                                <button type="reset" class="btn btn-warning">Làm mới</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div><!-- /.col-->
    </div><!-- /.row -->
</div>
@endsection