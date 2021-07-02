<?php $__env->startSection('admin_content'); ?>
<div class="table-agile-info">
    <div class="panel panel-default">
      <div class="panel-heading">
        Danh sách sản phẩm
      </div>
      <div class="row w3-res-tb">
        <div class="col-sm-5 m-b-xs">
        </div>
        <div class="col-sm-4">
        </div>
        <div class="col-sm-3">
          <div class="input-group">
            <input type="text" class="input-sm form-control" placeholder="Search">
            <span class="input-group-btn">
              <button class="btn btn-sm btn-default" type="button">Search</button>
            </span>
          </div>
        </div>
      </div>
      <div class="table-responsive">

        <?php if(session('thongbao')): ?>
        <div class="alert alert-success">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span
        aria-hidden="true">&times;</span></button>
        <?php echo e(session('thongbao')); ?>

        </div>
        <?php endif; ?>

        <table class="table table-striped b-t b-light">
          <thead>
            <tr>
              <th style="width:20px;">
                <label class="i-checks m-b-none">
                  <input type="checkbox"><i></i>
                </label>
              </th>
              <th>Tên sản phẩm</th>
              <th>Danh mục</th>
              <th>Thương hiệu</th>
              <th>Slug</th>
              <th>Mô tả sản phẩm</th>
              <th>Giá sản phẩm</th>
              <th>Hình ảnh sản phẩm</th>
              <th>Trạng thái</th>
              <th>Tương tác</th>
              <th style="width:30px;"></th>
            </tr>
          </thead>
          <tbody>
            <?php $__currentLoopData = $product; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
              <td><label class="i-checks m-b-none"><input type="checkbox" name="post[]"><i></i></label></td>
              <td><?php echo e($item->name); ?></td>
              <td><span class="text-ellipsis"><?php echo e($item->category->name); ?></span></td>
              <td><span class="text-ellipsis"><?php echo e($item->brand->name); ?></span></td>
              <td><span class="text-ellipsis"><?php echo e($item->slug); ?></span></td>
              <td><span class="text-ellipsis"><?php echo e($item->desc); ?></span></td>
              <td><span class="text-ellipsis"><?php echo e($item->price); ?></span></td>
              <td><img src="<?php echo e(asset('storage/images/products/'.$item->image)); ?>" alt="" width="150px" height="150px"></td>
              <td><span class="text-ellipsis">
                    <?php
                        if($item->status==1)
                        {
                            echo "Hiển thị";
                        }else{
                            echo "Ẩn";
                        }
                    ?>
              </span></td>

              <td>
                <a href="<?php echo e(route('edit_product',['id'=>$item->id])); ?>" class="active" ui-toggle-class=""><i class="fa fa-pencil-square-o text-success text-active"></i></a>
                <a onclick="confirmDelete()" href="<?php echo e(route('delete_product',['id'=>$item->id])); ?>" class="active" ui-toggle-class=""><i class="fa fa-times text-danger text"></i></a>
              </td>
            </tr>

            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </tbody>
        </table>
      </div>
      <footer class="panel-footer">
        <div class="row">

          <div class="col-sm-5 text-center">
            <small class="text-muted inline m-t-sm m-b-sm">showing 20-30 of 50 items</small>
          </div>
          <div class="col-sm-7 text-right text-center-xs">
            <ul class="pagination pagination-sm m-t-none m-b-none">
              <li><a href=""><i class="fa fa-chevron-left"></i></a></li>
              <li><a href="">1</a></li>
              <li><a href="">2</a></li>
              <li><a href="">3</a></li>
              <li><a href="">4</a></li>
              <li><a href=""><i class="fa fa-chevron-right"></i></a></li>
            </ul>
          </div>
        </div>
      </footer>
    </div>
  </div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
  <script type="text/javascript">
    function confirmDelete() {
        var x = confirm("Bạn có muốn xoá?");
        if (x)
            return true;
        else
            return false;
    }
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.admin_dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\shoplaravel\resources\views/admin/product/all_product.blade.php ENDPATH**/ ?>