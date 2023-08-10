

    <?php $__env->startSection('content'); ?>
        
        <?php if(session()->has('success')): ?>
            <div class="col-md-12 alert alert-success alert-dismissible fade show" role="alert">
                <?php echo e(session('success')); ?>

                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
        <?php endif; ?>
        
        <div class="container">
            <div class="row my-3">
                <div class="col-lg-12">
                    

                    <a href="/dashboard/categoryizin" class="btn btn-success font-italic"><i class="bi bi-arrow-left-short"></i >Kembali ke kategori izin</a>
                    <a href="/dashboard/categoryizin/<?php echo e($kategoriizin->slug); ?>/edit" class="btn btn-warning"><i class="bi bi-pencil"></i>Edit</a>
                    
                    <form action="/dashboard/categoryizin/<?php echo e($kategoriizin->slug); ?>" method="POST" class="d-inline">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('delete'); ?>
                        <button class="btn btn-danger" onclick="return confirm('anda yakin ingin hapus data')"><i class="bi bi-x-circle"></i>Hapus</button>
                    </form>
                    
                    <div class="row mt-4">
                        <div class="col-md-4 fs-3">Nama Kategori :</div>
                        <div class="col-md-6 fs-3"><?php echo e($kategoriizin->namakategori); ?></div>
                    </div>
                    
                    <div class="row mt-4">
                        <div class="col-md-4 fs-3">Slug Kategori :</div>
                        <div class="col-md-6 fs-3"><?php echo e($kategoriizin->namakategori); ?></div>
                    </div>

                </div>
            </div>
        </div>
        
    <?php $__env->stopSection(); ?>
<?php echo $__env->make('backend/dashboard/layouts/main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\aplikasi\web_dpmptsp\resources\views/backend/dashboard/categoryizin/detail_categoryizin.blade.php ENDPATH**/ ?>