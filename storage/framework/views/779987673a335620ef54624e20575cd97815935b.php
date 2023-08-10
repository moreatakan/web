

    
<?php $__env->startSection('content'); ?>
    
<div class="space-medium mt20">
    <div class="container">
        <div class="row">
            <div class="col-lg-9 col-md-9">
                <div class="row">

                    
                
                    
                </div>
            </div>


            <?php echo $__env->make('frontend.layouts.partials.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


        </div>
    </div>
</div>
    

    <script>

        let container1 = document.querySelector('.container1');
        let isCliked = true;

        container1.addEventListener('click',function(e){
            if(isCliked){
                e.target.nextElementSibling.style.display = 'block';
                isCliked = false;
            }else{
                e.target.nextElementSibling.style.display = 'none';
                isCliked = true;
            }
            

            
        });

    </script>
<?php $__env->stopSection(); ?>




<?php echo $__env->make('frontend/layouts/main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\aplikasi\web_dpmptsp\resources\views/frontend/perizinan/standar_pelayanan.blade.php ENDPATH**/ ?>