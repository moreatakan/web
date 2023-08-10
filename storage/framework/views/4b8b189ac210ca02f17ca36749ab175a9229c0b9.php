<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="description" content="Web Dpmptsp."
        />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <title>
        <?php echo e($title); ?>

        </title>
        <!-- Bootstrap -->
        <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css"
        rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ"
        crossorigin="anonymous"
        />

        

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">    

        <!-- Style Custom CSS -->
        <link rel="stylesheet" href="<?php echo e(asset('css/font-awesome.min.css')); ?>">
        <!-- Fontello CSS -->
        <link type="text/css" href="<?php echo e(asset('css/fontello.css')); ?>" rel="stylesheet" />
        <!-- Style Custom CSS -->
        <link type="text/css" href="<?php echo e(asset('css/style2.css')); ?>" rel="stylesheet" />
        <!-- Font CSS -->
        <link
        href="https://fonts.googleapis.com/css?family=Merriweather:300,300i,400,400i,700,700i,900,900i"
        rel="stylesheet"
        />
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
        
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.3.1/css/swiper.min.css"
        />
        <link type="text/css" rel="stylesheet" href="<?php echo e(asset('/css/slider/Simple-Slider.css')); ?>" />
        <link rel="stylesheet" href="<?php echo e(asset('css/overlay.css')); ?>">
        <link rel="stylesheet" href="<?php echo e(asset('css/table.css')); ?>">
        <link type="text/css" rel="stylesheet" href="<?php echo e(asset('/css/slider/style.css')); ?>" />
        <link rel="icon" href="<?php echo e(asset('img/sarolangun.png')); ?>" />
        
    </head>

    <body>

        
        <?php echo $__env->make('frontend/layouts/partials/top_header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        

        
        <?php echo $__env->make('frontend/layouts/partials/header_navigasi', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        


        
        <?php echo $__env->make('frontend/layouts/partials/slider_home', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        

        
        
        <?php echo $__env->make('frontend/layouts/partials/bawah_slider', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        

        
        <?php echo $__env->yieldContent('content'); ?>
        

        
        <?php echo $__env->make('frontend/layouts/partials/footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        

        
        <?php echo $__env->make('frontend/layouts/partials/copyright', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        
        
        

        
        <?php echo $__env->make('frontend/layouts/partials/script', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        
    </body>
</html>
<?php /**PATH D:\aplikasi\web_dpmptsp\resources\views/frontend/layouts/main.blade.php ENDPATH**/ ?>