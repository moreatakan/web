

    <?php $__env->startSection('content'); ?>
        <?php echo $__env->make('backend/dashboard/layouts/welcome_admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <div class="mb-4 d-flex justify-content-between">
            
            <h3> Buat Jenis Izin Baru </h3>

        </div>
        <div class="col-lg-8">
            <form action="/dashboard/izin" method="POST">
                <?php echo csrf_field(); ?>
                <div class="mb-3">
                    <label for="namaizin" class="form-label">Jenis Izin</label>
                    <input name="namaizin" type="text" class="form-control <?php $__errorArgs = ['namaizin'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="namaizin" required>
                    
                    <?php $__errorArgs = ['namaizin'];
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

                <div class="mb-3">
                    <label for="categoryizin_id" class="form-label">Pilih Kategori Izin</label>
                    <select name="categoryizin_id" class="form-control" id="categoryizin_id">
                        
                        <?php $__currentLoopData = $kategoris; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $kategori): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($kategori->id); ?>"><?php echo e($kategori->namakategori); ?></option>    
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        
                    </select>
                </div>
                
                <button type="submit" class="btn btn-primary">Create</button>
            </form>
        </div>
        
        <script>
            const namaizin = document.querySelector('#namaizin');
            const slug = document.querySelector('#slug');


            namaizin.addEventListener('change', function(){
                fetch('/dashboard/izin/slug?namaizin=' + namaizin.value)
                .then(response => response.json())
                .then(data => slug.value = data.slug)
            });
        </script>
        
            
    <?php $__env->stopSection(); ?>
<?php echo $__env->make('backend/dashboard/layouts/main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\aplikasi\web_dpmptsp\resources\views/backend/dashboard/izin/create_izin.blade.php ENDPATH**/ ?>