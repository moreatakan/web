

    <?php $__env->startSection('content'); ?>
        <?php echo $__env->make('backend/dashboard/layouts/welcome_admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <div class="mb-4 d-flex justify-content-between">
            <h3> Kategori Izin </h3>
            <a href="/dashboard/categoryizin/create" class="btn btn-primary">Buat Kategori Izin</a>

        </div>
        
        <?php if(session()->has('success')): ?>
            <div class="col-lg-8 alert alert-success alert-dismissible fade show" role="alert">
                <?php echo e(session('success')); ?>

                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
        <?php endif; ?>
        <div class="table-responsive col-lg-10">
            <table class="table table-striped table-sm">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Kategori Ijin</th>
                        <th scope="col">Slug</th>
                        <th scope="col">Action</th>
                    </tr>
            </thead>

                <tbody>
                
                    <?php $__currentLoopData = $kategoriizin; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $kategori): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <th scope="row"><?php echo e(++$i); ?></th>    
                            <td><?php echo e($kategori->namakategori); ?></td>
                            <td><?php echo e($kategori->slug); ?></td>
                            <td>
                                <a href="/dashboard/categoryizin/<?php echo e($kategori->slug); ?>" class="badge bg-info"><i class="bi bi-eye"></i></a>
                                <a href="/dashboard/categoryizin/<?php echo e($kategori->slug); ?>/edit" class="badge bg-warning"><i class="bi bi-pencil"></i></a>
                                
                                <form action="/dashboard/categoryizin/<?php echo e($kategori->slug); ?>" method="POST" class="d-inline">
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
        <?php echo e($kategoriizin->links('pagination::bootstrap-5')); ?>  
    <?php $__env->stopSection(); ?>
<?php echo $__env->make('backend/dashboard/layouts/main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\aplikasi\web_dpmptsp\resources\views/backend/dashboard/categoryizin/categoryizin.blade.php ENDPATH**/ ?>