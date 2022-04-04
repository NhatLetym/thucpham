<?php $__env->startSection('content'); ?>
<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">sua thong tin san pham</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
            <li class="breadcrumb-item active">Tables</li>
        </ol>
        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table me-1"></i>
                San pham
            </div>
            <div class="card-body">
                <form method="post" action='/admin/loaisanpham/update'>
                    <?php echo csrf_field(); ?>
                    <input type="hidden" id="id" value="<?php echo e($loaisanpham->id); ?>" name="id">
                    <div class="form-group">
                        <label for="tenloai">Ten loai</label>
                        <input type="text" class="form-control" id="tenloai" name="tenloai" value="<?php echo e($loaisanpham->tenloai); ?>">
                    </div>
                    <div class="form-group">
                        <label for="Delet">Delet</label>
                        <input type="text" class="form-control" id="Delet" name="Delet" value="<?php echo e($loaisanpham->Delet); ?>">
                    </div>




                    <button type="submit" value="cmd" name="cmd" class="btn bg-success">
                        Save
                    </button>

                </form>
            </div>
        </div>
    </div>
</main>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('_layout_admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\MY PC\Desktop\tenduan\resources\views/admin/loaisanpham/edit.blade.php ENDPATH**/ ?>