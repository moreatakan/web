

    
<?php $__env->startSection('content'); ?>
    
    <div class="space-medium mt20">
        <div class="container">
            <div class="col-md-8">

                <h1 class="mb-3">   
                    <?php echo e($post->judul); ?>

                </h1>
                <p>
                    <small class="text-muted">
                    By: <a href="" class="text-decoration-none text-primary"><?php echo e($post->user->name); ?></a>
                    <?php echo e($post->created_at); ?>

                </small>
                </p>
                <a href="/" class="btn btn-success">
                    <i class="bibi-arrow-left-short"></i ><< Kembali
                </a>
                <img src="<?php echo e(asset('storage/'.$post->image)); ?>" alt="" width="700px" height="400px" class="img-fluid mt-3">
                <article class="my-3 fs-6">
                    <?php echo $post->body; ?>

                </article>

            </div>
        </div>
    </div>
    
<?php $__env->stopSection(); ?>




<?php echo $__env->make('frontend/layouts/main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\aplikasi\web_dpmptsp\resources\views/frontend/detail_post.blade.php ENDPATH**/ ?>