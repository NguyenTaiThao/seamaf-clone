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
        <div class="col-lg-12 bg-white edit-product">
            <div class="panel panel-default m-md-5 m-2">
                <div class="panel-body">
                    <form role="form" method="post" enctype="multipart/form-data">
                        @csrf
                        @if($errors->any())
                        <div class="row">
                            <div class="col-md-12">
                                <div class="alert alert-danger text-center">
                                    {{$errors->all()[0]}}
                                </div>
                            </div>
                        </div>
                        @endif
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Tên sản phẩm</label>
                                    <input required name="name" class="form-control" placeholder="" value="{{$data->name}}">
                                </div>

                                <div class="form-group mt-2">
                                    <label>Giá sản phẩm</label>
                                    <input required name="price" type="number" min="0" class="form-control" value="{{$data->price}}">
                                </div>
                                <div class="form-group mt-2">
                                    <label>Danh mục</label>
                                    <select name="category_id" class="form-control">
                                        <option value=-1 <?php if ($data->category_id == null) echo 'selected'; ?>>-- CHỌN DANH MỤC --</option>
                                        @foreach($categories as $category)
                                        <option value="{{$category->id}}" <?php if ($data->category_id == $category->id) echo 'selected'; ?>>{{$category->name}}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="form-group mt-2">
                                    <label>Trạng thái</label>
                                    <select name="on_sale" class="form-control">
                                        <option value=1 <?php if ($data->on_sale == 1) echo 'selected'; ?>>Không sale</option>
                                        <option value=0 <?php if (!$data->on_sale == 0) echo 'selected'; ?>>Đang sale</option>
                                    </select>
                                </div>

                                <div class="form-group mt-2">
                                    <label>Sản phẩm nổi bật</label>
                                    <div class="checkbox">
                                        <label>
                                            <input name="is_top" type="checkbox" value=1 <?php if ($data->is_top == 1) echo 'checked'; ?>>Nổi bật
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group mt-2">
                                    <label>Mô tả sản phẩm</label>
                                    <textarea required name="discription" class="form-control" rows="3">{{$data->discription}}</textarea>
                                </div>

                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Ảnh sản phẩm</label>
                                    <label>
                                        <input required name='image' id="product-image-input" type="file" onchange="">
                                        <br>
                                        <div class="image-box">
                                            <img id="product-image" src="{{asset('storage/'.$data->image->path)}}" class="w-75">
                                        </div>
                                    </label>
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


<!-- script section  -->
@section('script')
<script>
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function(e) {
                $('#product-image').attr('src', e.target.result);
            }

            reader.readAsDataURL(input.files[0]);
        }
    }

    $("#product-image-input").change(function() {
        readURL(this);
    });
</script>
@endsection