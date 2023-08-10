

    <?php $__env->startSection('content'); ?>
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Selamat Datang, Admin</h1>
            <div class="btn-toolbar mb-2 mb-md-0">
            <div class="btn-group me-2">
                <button type="button" class="btn btn-sm btn-outline-secondary">Share</button>
                <button type="button" class="btn btn-sm btn-outline-secondary">Export</button>
            </div>
            <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle d-flex align-items-center gap-1">
                <svg class="bi"><use xlink:href="#calendar3"/></svg>
                This week
            </button>
            </div>
        </div>
        <div class="mb-4 d-flex justify-content-between">
            <h3> Data Slider </h3>
            <input type="button" class="btn btn-primary" value="+ Tambah Data">

        </div>
                
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Judul</th>
                    <th scope="col">Link</th>
                    <th scope="col">Gambar</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row" class="bg-danger">1</th>
                    <td>Larry the Bird</td>
                    <td>@twitter</td>
                    <td>@twitter</td>
                    <td><a href="" class="btn btn-warning">Edit</a> <a href="" class="btn btn-danger">Hapus</a></td>
                </tr>
                <tr>
                    <th scope="row" class="bg-secondary">2</th>
                    <td>Larry the Bird</td>
                    <td>@twitter</td>
                    <td>@twitter</td>
                    <td><a href="" class="btn btn-warning">Edit</a> <a href="" class="btn btn-danger">Hapus</a></td>
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td>Larry the Bird</td>
                    <td>@twitter</td>
                    <td>@twitter</td>
                    <td><a href="" class="btn btn-warning">Edit</a> <a href="" class="btn btn-danger">Hapus</a></td>
                </tr>
                <tr>
                    <th scope="row">4</th>
                    <td>Larry the Bird</td>
                    <td>@twitter</td>
                    <td>@twitter</td>
                    <td><a href="" class="btn btn-warning">Edit</a> <a href="" class="btn btn-danger">Hapus</a></td>
                </tr>
            </tbody>
        </table>
    <?php $__env->stopSection(); ?>
<?php echo $__env->make('dashboard/layouts/main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\aplikasi\web_dpmptsp\resources\views/dashboard/slider/index.blade.php ENDPATH**/ ?>