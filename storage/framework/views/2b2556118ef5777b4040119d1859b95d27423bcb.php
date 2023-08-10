

    <?php $__env->startSection('content'); ?>
        <?php echo $__env->make('backend/dashboard/layouts/welcome_admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <div class="mb-4">
            <h3> Standar Pelayanan </h3>
        </div>
        <div class="mb-4"><a href="/dashboard/sp/create" class="btn btn-primary">Buar Standar Pelayanan Baru</a>
        </div>
        
        <?php if(session()->has('success')): ?>
            <div class="col-lg-10 alert alert-success alert-dismissible fade show" role="alert">
                <?php echo e(session('success')); ?>

                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
        <?php endif; ?>
        <div class="table-responsive col-lg-12">
            <table class="table table-striped table-sm">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Jenis Ijin</th>
                        <th scope="col">Persyaratan</th>
                        <th scope="col" class="text-center">Download File</th>
                        <th scope="col">Action</th>
                    </tr>
            </thead>

                <tbody>
                
                    <?php $__currentLoopData = $seluruhsp; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sp): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <th scope="row"><?php echo e(++$i); ?></th>    
                            <td><?php echo e($sp->izin->namaizin); ?></td>
                            <td><?php echo e($sp->persyaratan); ?></td>
                            <td align="center">
                                <a href="<?php echo e(asset('storage/'.$sp->file)); ?>"><i class="bi bi-file-earmark-text"></i></a>
                            </td>
                            <td>
                                
                                <a href="" class="badge bg-warning"><i class="bi bi-pencil"></i></a>
                                
                                <form action="/dashboard/sp/<?php echo e($sp->id); ?>" method="POST" class="d-inline">
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


        <?php echo e($seluruhsp->links('pagination::bootstrap-5')); ?>

    <?php $__env->stopSection(); ?>
<?php echo $__env->make('backend/dashboard/layouts/main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\aplikasi\web_dpmptsp\resources\views/backend/dashboard/sp/sp.blade.php ENDPATH**/ ?>