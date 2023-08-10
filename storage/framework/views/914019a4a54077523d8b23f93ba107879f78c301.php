

    
<?php $__env->startSection('content'); ?>
    
<div class="space-medium mt20">
    <div class="container">
        <div class="row">
            <div class="col-lg-9 col-md-9">
                <div class="row">

                    <?php $__currentLoopData = $seluruhizin; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $izin): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="col-md-3">
                            <div class="container-overlay mb-3 p-0 text-wrap">
                                <span class="badge text-bg-secondary mt-1"><?php echo e($loop->iteration); ?></span>  
                                    <div class="konten-overlay">
                                        <p><?php echo e($izin->namaizin); ?></p>
                                    </div>
                                </div>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    
                </div>
            </div>


            <?php echo $__env->make('frontend.layouts.partials.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


        </div>
    </div>
</div>
    
<?php $__env->stopSection(); ?>




<?php echo $__env->make('frontend/layouts/main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\aplikasi\web_dpmptsp\resources\views/frontend/perizinan/jenis_izin.blade.php ENDPATH**/ ?>