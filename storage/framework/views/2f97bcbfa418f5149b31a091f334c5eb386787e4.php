

<?php $__env->startSection('container'); ?>
<div class="container mb-1 min-vh-100" style="background: #cbe0b4">

  <div class="row justify-content-center">
      <div class="col-md-4">
  
        <?php if(session()->has('success')): ?>
            <div class="alert alert-success alert-dismissible fade show" role="alert">
              <?php echo e(session('success')); ?>

              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        <?php endif; ?>
  
        <?php if(session()->has('loginError')): ?>
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
              <?php echo e(session('loginError')); ?>

              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        <?php endif; ?>
  
          <main class="form-signin">
              <h1 class="h3 mb-3 fw-normal text-center">Please login</h1>
              <form action="/admin" method="POST">
                <?php echo csrf_field(); ?>
    
                <div class="form-floating">
                  <input type="email" name="email" class="form-control <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="email" placeholder="name@example.com" autofocus required value="<?php echo e(old('email')); ?>">
                  <label for="email">Email address</label>
                  <?php $__errorArgs = ['email'];
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
                <div class="form-floating">
                  <input type="password" name="password"class="form-control" id="password" placeholder="Password" required>
                  <label for="password">Password</label>
                </div>
  
                <button class="w-100 btn btn-lg btn-primary" type="submit" name="submit">Login</button>
                
              </form>
            </main>
  
      </div>
  </div>
  </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('dashboard/login/layouts/main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\aplikasi\web_dpmptsp\resources\views/dashboard/login/index.blade.php ENDPATH**/ ?>