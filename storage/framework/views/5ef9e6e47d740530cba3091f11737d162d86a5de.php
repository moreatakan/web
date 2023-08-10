

    <?php $__env->startSection('content'); ?>
        <?php echo $__env->make('backend/dashboard/layouts/welcome_admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <div class="mb-4 d-flex justify-content-between">
            
            <h3> Buat Kategori Izin Baru </h3>

        </div>
        <div class="col-lg-8">
            <form action="/dashboard/categoryizin" method="POST">
                <?php echo csrf_field(); ?>
                <div class="mb-3">
                    <label for="namakategori" class="form-label">Kategori Izin</label>
                    <input name="namakategori" type="text" class="form-control <?php $__errorArgs = ['namakategori'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="namakategori" required>
                    
                    <?php $__errorArgs = ['namakategori'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <div class="invalid-feedback">
                        <?php echo e($message); ?>

                    </div>    
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    
                </div>

                <div class="mb-3">
                    <label for="slug" class="form-label">Slug</label>
                    <input name="slug" type="text" class="form-control <?php $__errorArgs = ['slug'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="slug" >
                    
                    <?php $__errorArgs = ['slug'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <div class="invalid-feedback">
                        <?php echo e($message); ?>

                    </div>    
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    
                </div>
                
                <button type="submit" class="btn btn-primary">Create</button>
            </form>
        </div>
        
        <script>
            const namakategori = document.querySelector('#namakategori');
            const slug = document.querySelector('#slug');


            namakategori.addEventListener('change', function(){
                fetch('/dashboard/categoryizin/slug?namakategori=' + namakategori.value)
                .then(response => response.json())
                .then(data => slug.value = data.slug)
            });
        </script>
            
    <?php $__env->stopSection(); ?>
<?php echo $__env->make('backend/dashboard/layouts/main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\aplikasi\web_dpmptsp\resources\views/backend/dashboard/categoryizin/create_categoryizin.blade.php ENDPATH**/ ?>