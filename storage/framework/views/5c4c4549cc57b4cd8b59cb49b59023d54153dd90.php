

    <?php $__env->startSection('content'); ?>
        <?php echo $__env->make('backend/dashboard/layouts/welcome_admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <div class="mb-4 d-flex justify-content-between">
            <h3> Data Slider </h3>
            <a href="/dashboard/slider/create" class="btn btn-primary">Create New Slider</a>

        </div>
        
        <?php if(session()->has('success')): ?>
            <div class="col-md-12 alert alert-success alert-dismissible fade show" role="alert">
                <?php echo e(session('success')); ?>

                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
        <?php endif; ?>

        <table class="table">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Judul</th>
                    <th scope="col">Status</th>
                    <th scope="col">Gambar</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                
                <?php $no=1; ?>
                <?php $__currentLoopData = $slides; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $slide): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <th scope="row"><?php echo e($no++); ?></th>    
                        <td><?php echo e($slide->judul_slide); ?></td>
                        <td><?php echo e($slide->status == 1 ? 'Publish' : 'Draft'); ?></td>
                        <td><img style="max-height:200px;" src="<?php echo e(asset('storage/' . $slide->image)); ?>" alt=""></td>
                        <td><a href="/dashboard/slider/<?php echo e($slide->id); ?>/edit" class="btn btn-warning">Edit</a> 
                        <form action="/dashboard/slider/<?php echo e($slide->id); ?>" method="POST" class="d-inline">
                            <?php echo method_field('DELETE'); ?>
                            <?php echo csrf_field(); ?>
                            <button class="btn btn-danger border-0" onclick="return confirm('Are You Sure')">Hapus</button>
                        </form>    
                        
                    </tr>
                        
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                
            </tbody>
        </table>
        <?php echo e($slides->links('pagination::bootstrap-5')); ?>

    <?php $__env->stopSection(); ?>
<?php echo $__env->make('backend/dashboard/layouts/main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\aplikasi\web_dpmptsp\resources\views/backend/dashboard/slider/slider.blade.php ENDPATH**/ ?>