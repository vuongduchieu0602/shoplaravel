<?php $__env->startSection('admin_content'); ?>
<div class="row">
    <div class="col-lg-12">
        <section class="panel">
            <header class="panel-heading">
                Sửa danh mục sản phẩm
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

                    <?php if(isset($category)): ?>
                    <form role="form" action="<?php echo e(route('post_edit_category',['id'=>$category->id])); ?>" method="POST">
                        <?php echo csrf_field(); ?>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Tên danh mục</label>
                            <input type="text" class="form-control" placeholder="Tên danh mục" name="name" value="<?php echo e($category->name); ?>">
                        </div>
                        <select class="form-control" id="status" name="status">
                            <option value="" disabled>-- Chọn trạng thái --</option>
                            <option value="1" <?php if($category->status==1): ?> selected
                            <?php endif; ?>>Hiển thị</option>
                            <option value="0" <?php if($category->status==0): ?> selected
                                <?php endif; ?>>Ẩn</option>
                        </select>
                        <br>
                        <button type="submit" class="btn btn-warning">Hoàn thành</button>
                    </form>
                    <?php endif; ?>
                </div>
            </div>
        </section>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.admin_dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\shoplaravel\resources\views/admin/category/edit_category.blade.php ENDPATH**/ ?>