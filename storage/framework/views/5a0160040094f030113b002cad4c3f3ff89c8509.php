

    
<?php $__env->startSection('content'); ?>
    
    <div class="space-medium mt20">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-8 p-0">
                    <div class="container">
                        <div class="row">
                            
                                
                                
                                    <?php if($posts->count()): ?>
                        
                                    <div class="card mb-3">
                                        <img src="<?php echo e(asset('storage/'.$posts[0]->image)); ?>" class="card-img-top" alt="<?php echo e($posts[0]->image); ?>">
                                        
                                        <div class="card-body text-center">
                                            <a href="/home/<?php echo e($posts[0]->slug); ?>">
                                                <h3 class="card-title"><?php echo e($posts[0]->judul); ?></h3>
                                            </a>
                                            
                                            <p>
                                                <small class="text-muted">
                                                By: <a href="" class="text-decoration-none text-primary">Rahmat Hidayah</a> <?php echo e($posts[0]->created_at->diffForHumans()); ?></small>
                                            </p>                                

                                            <p class="card-text"><?php echo e($posts[0]->excerpt); ?></p>
                                            <a href="/home/detailpost/<?php echo e($posts[0]->slug); ?>" class="btn btn-dark p-1">Read more</a>
                                        </div>
                                    </div>
                                    <?php else: ?>

                                    <p class="text-center fs-4">No post found</p>

                                    <?php endif; ?>

                                    <div class="container-fluid">
                                        <div class="row">
                                            <div class="card-group">
                                                
                                                <?php $__currentLoopData = $posts->skip(1); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <div class=" col-md-4 mb-3">
                                                    <div class="card">
                                                        <img src="https://source.unsplash.com/640x426/random" class="card-img-top" alt="...">
                                                        <div class="card-body">
                                                            <h5 class="card-title"><?php echo e($p->judul); ?></h5>
                                                            <p>
                                                                <small class="text-muted">
                                                                By: <a href="" class="text-decoration-none text-primary"><?php echo e($p->user->name); ?></a></small>
                                                            </p>
                                                            <p class="card-text"><?php echo e($p->excerpt); ?></p>
                                                            <a href="/home/detailpost/<?php echo e($p->slug); ?>" class="btn btn-dark p-1">Read More</a>
                                                        </div>
                                                        <div class="card-footer">
                                                            <small class="text-muted"><?php echo e($p->created_at->diffForHumans()); ?></small>
                                                        </div>
                                                    </div>
                                                </div>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                
                                            </div>
                                        </div>
                                    </div>

                                

                            
                        </div>
                    </div>
                </div>


                <?php echo $__env->make('frontend.layouts.partials.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

            </div>
        </div>
    </div>
    
<?php $__env->stopSection(); ?>




<?php echo $__env->make('frontend/layouts/main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\aplikasi\web_dpmptsp\resources\views/frontend/home.blade.php ENDPATH**/ ?>