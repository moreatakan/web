

    <?php $__env->startSection('content'); ?>
        <?php echo $__env->make('backend/dashboard/layouts/welcome_admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <div class="mb-4 d-flex justify-content-between">
            
            <h3> Edit Post </h3>

        </div>
        <div class="col-lg-8">
            <form action="/dashboard/posts/<?php echo e($post->slug); ?>" method="POST">
                <?php echo csrf_field(); ?>
                <?php echo method_field('put'); ?>                
                <div class="mb-3">
                    <label for="judul" class="form-label">Judul Post</label>
                    <input name="judul" type="text" class="form-control <?php $__errorArgs = ['judul'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="judul" value="<?php echo e(old('judul',$post->judul)); ?>" required autofocus>
                    <?php $__errorArgs = ['judul'];
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
                    <input name="slug" type="text" class="form-control" id="slug" value="<?php echo e(old('slug',$post->slug)); ?>">
                </div>

                <div class="mb-3">
                    <label for="body" class="form-label">Body</label>
                    <?php $__errorArgs = ['body'];
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
                    <input id="body" type="hidden" name="body" value="<?php echo e(old('body',$post->body)); ?>">
                    <trix-editor input="body"></trix-editor>
                </div>


                
                
                

                <button type="submit" class="btn btn-primary">Update</button>
            </form>
        </div>
        
    
        <script>
            const judul = document.querySelector('#judul');
            const slug = document.querySelector('#slug');


            judul.addEventListener('change', function(){
                fetch('/dashboard/posts/slug?judul=' + judul.value)
                .then(response => response.json())
                .then(data => slug.value = data.slug)
            });

            document.addEventListener('trix-file-accept',function(e){
                e.preventDefault();
            })
        </script>

        
    <?php $__env->stopSection(); ?>
    
<?php echo $__env->make('backend/dashboard/layouts/main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\aplikasi\web_dpmptsp\resources\views/backend/dashboard/post/edit_post.blade.php ENDPATH**/ ?>