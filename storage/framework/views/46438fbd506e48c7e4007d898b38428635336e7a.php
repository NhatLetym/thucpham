<?php $__env->startSection('content'); ?>
<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">Danh sach san pham</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
            <li class="breadcrumb-item active">Tables</li>
        </ol>

        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table me-1"></i>
                San pham
                <a href="/admin/nhanvien/create" class="btn btn-info" style="float: right;">Thêm</a>
            </div>
            <div class="card-body">
                <table id="datatablesSimple">
                    <thead>
                        <tr>
                            <th>TT</th>
                            <th>Ten NV</th>
                            <th>Gioi Tinh</th>
                            <th>Ngay Sinh</th>
                            <th>Que Quan</th>
                            <th>Email</th>
                            <th>SDT</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>TT</th>
                            <th>Ten NV</th>
                            <th>Gioi Tinh</th>
                            <th>Ngay Sinh</th>
                            <th>Que Quan</th>
                            <th>Email</th>
                            <th>SDT</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        <?php
                        $tt=1;
                        ?>
                        <?php $__currentLoopData = $nhanvien; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sp): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e($tt++); ?></td>
                            <td><?php echo e($sp->ten_nhanvien); ?></td>
                            <td><?php echo e($sp->gioitinh); ?></td>
                            <td><?php echo e($sp->ngaysinh); ?></td>
                            <td><?php echo e($sp->quequan); ?></td>
                            <td><?php echo e($sp->email); ?></td>
                            <td><?php echo e($sp->sdt); ?></td>
                            <td><a href="/admin/nhanvien/<?php echo e($sp->id); ?>/show" class="btn btn-info">Edit</a></td>
                            <td><a onclick="return confirm('Ban co muon xoa that khong?');" href="/admin/nhanvien/<?php echo e($sp->id); ?>/delete" class="btn btn-danger">Delete</a></td>
                        </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</main>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('_layout_admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\MY PC\Desktop\tenduan\resources\views/admin/nhanvien/index.blade.php ENDPATH**/ ?>