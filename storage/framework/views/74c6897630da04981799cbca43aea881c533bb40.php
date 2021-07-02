<?php $__env->startSection('admin_content'); ?>
<div class="row">
    <div class="col-lg-12">
        <section class="panel">
            <header class="panel-heading">
                Sửa sản phẩm
            </header>
            <div class="panel-body">
                <div class="position-center">
                    <?php if(count($errors) > 0): ?>
                        <div class="alert alert-danger">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span
                        aria-hidden="true">&times;</span></button>
                    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $err): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php echo e($err); ?><br>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                    <?php endif; ?>

                    <?php if(session('thongbao')): ?>
                    <div class="alert alert-success">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span
                    aria-hidden="true">&times;</span></button>
                    <?php echo e(session('thongbao')); ?>

                    </div>
                    <?php endif; ?>

                    <?php if(isset($product)): ?>
                    <form role="form" action="<?php echo e(route('post_edit_product',['id'=>$product->id])); ?>" method="POST" enctype="multipart/form-data">
                        <?php echo csrf_field(); ?>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Tên sản phẩm</label>
                            <input type="text" class="form-control" placeholder="Tên sản phẩm" name="name" value="<?php echo e($product->name); ?>">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Mô tả sản phẩm</label>
                            <textarea name="desc" id="" cols="30" rows="10" style="resize:none" class="form-control" placeholder="Mô tả sản phẩm"><?php echo e($product->desc); ?></textarea>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Giá sản phẩm</label>
                            <input type="text" class="form-control" placeholder="Gía sản phẩm" name="price" value="<?php echo e($product->price); ?>">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Hình ảnh sản phẩm</label>
                            <input type="file" class="form-control" placeholder="Tên sản phẩm" name="image" value="<?php echo e(asset('public/uploads/product/.$product->image')); ?>">
                            <label for="exampleInputEmail1">Hình ảnh sản phẩm hiện tại</label>
                            <img src="<?php echo e(asset('storage/images/products/'.$product->image)); ?>" width="150px" height="150px" alt="">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Danh mục sản phẩm</label>
                            <select name="product_category" class="form-control" id="">
                                <option value="" disabled>-- Chọn danh mục --</option>
                                <?php if(isset($category)): ?>
                                        <?php $__currentLoopData = $category; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($item->id); ?>"
                                            <?php if($item->id == $product->category_id): ?>
                                                selected
                                            <?php endif; ?>
                                            ><?php echo e($item->name); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                <?php endif; ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Thương hiệu sản phẩm</label>
                            <select name="product_brand" class="form-control" id="">
                                <option value="" disabled>-- Chọn thương hiệu --</option>
                                <?php if(isset($brand)): ?>
                                        <?php $__currentLoopData = $brand; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($item->id); ?>"
                                            <?php if($item->id == $product->brand_id): ?>
                                                selected
                                            <?php endif; ?>
                                            ><?php echo e($item->name); ?>

                                        </option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                <?php endif; ?>
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
                    <?php endif; ?>
                </div>
            </div>
        </section>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.admin_dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\shoplaravel\resources\views/admin/product/edit_product.blade.php ENDPATH**/ ?>