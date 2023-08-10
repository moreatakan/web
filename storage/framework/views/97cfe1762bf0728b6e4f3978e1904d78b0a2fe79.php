

    <?php $__env->startSection('content'); ?>
        <?php echo $__env->make('backend/dashboard/layouts/welcome_admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <div class="mb-4 d-flex justify-content-between">
            <h3> Jenis Izin dan Non Izin </h3>
            <a href="/dashboard/izin/create" class="btn btn-primary">Buat Jenis Izin Baru</a>

        </div>
        
        <?php if(session()->has('success')): ?>
            <div class="col-lg-10 alert alert-success alert-dismissible fade show" role="alert">
                <?php echo e(session('success')); ?>

                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
        <?php endif; ?>
        <div class="table-responsive col-lg-10">
            <table class="table table-striped table-sm">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Jenis Ijin</th>
                        <th scope="col">Action</th>
                    </tr>
            </thead>

                <tbody>
                
                    <?php $__currentLoopData = $izins; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $izin): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <th scope="row"><?php echo e(++$i); ?></th>    
                            <td><?php echo e($izin->namaizin); ?></td>
                            <td>
                                <a href="/dashboard/posts/<?php echo e($izin->slug); ?>" class="badge bg-info"><i class="bi bi-eye"></i></a>
                                <a href="/dashboard/posts/<?php echo e($izin->slug); ?>/edit" class="badge bg-warning"><i class="bi bi-pencil"></i></a>
                                
                                <form action="/dashboard/izin/<?php echo e($izin->slug); ?>" method="POST" class="d-inline">
                                    <?php echo csrf_field(); ?>
                                    <?php echo method_field('delete'); ?>
                                    <button class="badge bg-danger border-0" onclick="return confirm('anda yakin ingin hapus data')"><i class="bi bi-x-circle"></i></button>
                                </form>
                            </td>
                            
                            
                        </tr>
                            
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
                    
                </tbody>
            </table>
        </div>


        <?php echo e($izins->links('pagination::bootstrap-5')); ?>

    <?php $__env->stopSection(); ?>
<?php echo $__env->make('backend/dashboard/layouts/main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\aplikasi\web_dpmptsp\resources\views/backend/dashboard/izin/izin.blade.php ENDPATH**/ ?>