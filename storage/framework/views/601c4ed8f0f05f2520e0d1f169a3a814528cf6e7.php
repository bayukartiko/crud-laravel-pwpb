<?php $__env->startSection('title', 'Selamat datang'); ?>

<?php $__env->startSection('container'); ?>
    <div class="container text-center" style="margin-top: 25%; ">
        Selamat datang di tugas CRUD data siswa
        <br>
        Bayu Kartiko | XII RPL 2
        <br>
        <a href="<?php echo e(url('/tampil')); ?>" class="btn btn-success">Mulai</a>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout/main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\crud_laravel_pwpb\resources\views/awal.blade.php ENDPATH**/ ?>