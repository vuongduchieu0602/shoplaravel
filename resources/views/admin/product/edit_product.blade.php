@extends('admin.admin_dashboard')
@section('admin_content')
<div class="row">
    <div class="col-lg-12">
        <section class="panel">
            <header class="panel-heading">
                Sửa sản phẩm
            </header>
            <div class="panel-body">
                <div class="position-center">
                    @if (count($errors) > 0)
                        <div class="alert alert-danger">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span
                        aria-hidden="true">&times;</span></button>
                    @foreach ($errors->all() as $err)
                    {{ $err }}<br>
                    @endforeach
                    </div>
                    @endif

                    @if (session('thongbao'))
                    <div class="alert alert-success">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span
                    aria-hidden="true">&times;</span></button>
                    {{ session('thongbao') }}
                    </div>
                    @endif

                    @if(isset($product))
                    <form role="form" action="{{ route('post_edit_product',['id'=>$product->id]) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="exampleInputEmail1">Tên sản phẩm</label>
                            <input type="text" class="form-control" placeholder="Tên sản phẩm" name="name" value="{{ $product->name }}">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Mô tả sản phẩm</label>
                            <textarea name="desc" id="" cols="30" rows="10" style="resize:none" class="form-control" placeholder="Mô tả sản phẩm">{{ $product->desc }}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Giá sản phẩm</label>
                            <input type="text" class="form-control" placeholder="Gía sản phẩm" name="price" value="{{ $product->price }}">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Hình ảnh sản phẩm</label>
                            <input type="file" class="form-control" placeholder="Tên sản phẩm" name="image" value="{{ asset('public/uploads/product/.$product->image') }}">
                            <label for="exampleInputEmail1">Hình ảnh sản phẩm hiện tại</label>
                            <img src="{{ asset('storage/images/products/'.$product->image) }}" width="150px" height="150px" alt="">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Danh mục sản phẩm</label>
                            <select name="product_category" class="form-control" id="">
                                <option value="" disabled>-- Chọn danh mục --</option>
                                @if (isset($category))
                                        @foreach ($category as $item)
                                        <option value="{{ $item->id}}"
                                            @if($item->id == $product->category_id)
                                                selected
                                            @endif
                                            >{{ $item->name }}</option>
                                    @endforeach
                                @endif
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Thương hiệu sản phẩm</label>
                            <select name="product_brand" class="form-control" id="">
                                <option value="" disabled>-- Chọn thương hiệu --</option>
                                @if (isset($brand))
                                        @foreach ($brand as $item)
                                        <option value="{{ $item->id }}"
                                            @if($item->id == $product->brand_id)
                                                selected
                                            @endif
                                            >{{ $item->name }}
                                        </option>
                                        @endforeach
                                @endif
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Trạng thái</label>
                            <select name="status" class="form-control" id="">
                                <option value="" selected disabled>-- Chọn trạng thái --</option>
                                <option value="1">Hiển thị</option>
                                <option value="0">Ẩn</option>

                            </select>
                        </div>
                        <br>
                        <button type="submit" class="btn btn-warning">Thêm sản phẩm</button>
                    </form>
                    @endif
                </div>
            </div>
        </section>
    </div>
</div>
@endsection
