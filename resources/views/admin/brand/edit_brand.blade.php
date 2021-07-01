@extends('admin.admin_dashboard')
@section('admin_content')
<div class="row">
    <div class="col-lg-12">
        <section class="panel">
            <header class="panel-heading">
                Sửa thương hiệu sản phẩm
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

                    @if(isset($brand))
                    <form role="form" action="{{ route('post_edit_brand',['id'=>$brand->id]) }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="exampleInputEmail1">Tên thương hiệu</label>
                            <input type="text" class="form-control" placeholder="Tên danh mục" name="name" value="{{ $brand->name }}">
                        </div>
                        <select class="form-control" id="status" name="status">
                            <option value="" disabled>-- Chọn trạng thái --</option>
                            <option value="1" @if($brand->status==1) selected
                            @endif>Hiển thị</option>
                            <option value="0" @if($brand->status==0) selected
                                @endif>Ẩn</option>
                        </select>
                        <br>
                        <button type="submit" class="btn btn-warning">Hoàn thành</button>
                    </form>
                    @endif
                </div>
            </div>
        </section>
    </div>
</div>
@endsection
