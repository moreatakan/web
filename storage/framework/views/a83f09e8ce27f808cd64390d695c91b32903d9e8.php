

    <?php $__env->startSection('content'); ?>
        <?php echo $__env->make('backend/dashboard/layouts/welcome_admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <div class="mb-4 d-flex justify-content-between">
            
            <h3> Standar Pelayanan </h3>

        </div>
        <div class="col-lg-8">
            <form action="/dashboard/sp" method="POST" enctype="multipart/form-data">
                <?php echo csrf_field(); ?> 
                
                <div class="mb-3">
                    <label for="izin_id" class="form-label">Pilih Jenis Izin</label>
                    <select name="izin_id" id="izin" class="form-control" id="namaizin">
                        
                        
                        <?php $__currentLoopData = $seluruhizin; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $izin): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($izin->id); ?>"><?php echo e($izin->namaizin); ?></option>    
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        
                    </select>
                </div>

                <div class="mb-3">
                    <label for="category_id" class="form-label">Kategori Izin</label>
                    <input name="category_id" id="category" type="text" class="form-control <?php $__errorArgs = ['category_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="category_id">
                    
                    <?php $__errorArgs = ['category_id'];
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
                    <label for="persyaratan" class="form-label">Persyaratan Izin</label>
                    <?php $__errorArgs = ['persyaratan'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <p class="text-danger">
                            <?php echo e($message); ?>

                        </p>    
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    <input id="persyaratan" type="hidden" name="persyaratan" value="<?php echo e(old('persyaratan')); ?>">
                    <trix-editor input="persyaratan"></trix-editor>
                </div>

                <div class="mb-3">
                    <label for="file" class="form-label">File Standar Pelayanan</label>
                    <input class="form-control <?php $__errorArgs = ['file'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" type="file" id="namafile" name="file">
                    
                    <?php $__errorArgs = ['file'];
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
        
    
        
    <?php $__env->stopSection(); ?>

    <?php $__env->startPush('scripts'); ?>
    <script>
        let izin = document.getElementById('izin')
        let input_category = document.getElementById('category')
        izin.addEventListener('change', async (e) => {
            const response = await fetch(`/api/get-category/${e.target.value}`);
            const category = await response.json();            
            input_category.value = await category.namakategori
        })
    </script>
    <?php $__env->stopPush(); ?>
    
<?php echo $__env->make('backend/dashboard/layouts/main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\aplikasi\web_dpmptsp\resources\views/backend/dashboard/sp/create_sp.blade.php ENDPATH**/ ?>