

    <?php $__env->startSection('content'); ?>
        
        <?php if(session()->has('success')): ?>
            <div class="col-md-12 alert alert-success alert-dismissible fade show" role="alert">
                <?php echo e(session('success')); ?>

                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
        <?php endif; ?>
        
        <div class="container">
            <div class="row my-3">
                <div class="col-lg-8">
                    <h1 class="mb-3">
                        <?php echo e($post->judul); ?>

                    </h1>

                    <a href="/dashboard/posts" class="btn btn-success"><i class="bi bi-arrow-left-short"></i >Back to all my posts</a>
                    <a href="/dashboard/posts/<?php echo e($post->slug); ?>/edit" class="btn btn-warning"><i class="bi bi-pencil"></i>Edit</a>
                    
                    <form action="/dashboard/posts/<?php echo e($post->slug); ?>" method="POST" class="d-inline">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('delete'); ?>
                        <button class="btn btn-danger" onclick="return confirm('anda yakin ingin hapus data')"><i class="bi bi-x-circle"></i>Delete</button>
                    </form>
                    
                    <img src="<?php echo e(asset('storage/'.$post->image)); ?>" alt="" width="700px" height="400px" class="img-fluid mt-3">

                    <article class="my-3 fs-5">
                        <?php echo $post->body; ?>

                    </article>

                </div>
            </div>
        </div>
        
    <?php $__env->stopSection(); ?>
<?php echo $__env->make('backend/dashboard/layouts/main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\aplikasi\web_dpmptsp\resources\views/backend/dashboard/post/detail_post.blade.php ENDPATH**/ ?>