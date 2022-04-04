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
                <form method="post" action='/admin/sanpham/update'>
                    <?php echo csrf_field(); ?>
                    <input type="hidden" id="id" value="<?php echo e($sanpham->id); ?>" name="id">
                    <div class="form-group">
                        <label for="name">Ten SP</label>
                        <input type="text" class="form-control" id="name" name="name" value="<?php echo e($sanpham->name); ?>">
                    </div>

                    <div class="form-group">
                        <label for="description">Mo ta</label>
                        <script src="https://cdn.ckeditor.com/4.18.0/standard/ckeditor.js"></script>
                        <textarea id="description" name="description">
                        <?php echo e($sanpham->mota_sp); ?>


                        </textarea>
                        <script>
                            CKEDITOR.replace('description');
                        </script>

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
<?php echo $__env->make('_layout_admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\MY PC\Desktop\tenduan\resources\views/admin/sanpham/edit.blade.php ENDPATH**/ ?>