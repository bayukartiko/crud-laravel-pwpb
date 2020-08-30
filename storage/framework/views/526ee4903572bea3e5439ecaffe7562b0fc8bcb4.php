<?php $__env->startSection('title', 'Data Siswa'); ?>

<?php $__env->startSection('container'); ?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-10">
                <h1 class="mt-3">Tabel Data Calon Siswa</h1>
                <a href="<?php echo e(url('/tambah/create')); ?>" class="btn btn-secondary my-3">Tambah Calon Siswa</a>

                <?php if(session('notif')): ?>
                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                        <?php echo e(session('notif')); ?>

                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                <?php endif; ?>

                <table class="table table-striped">
                    <thead class="thead-dark">
                      <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nomor PPDB</th>
                        <th scope="col">Nama Calon Siswa</th>
                        <th scope="col">Asal Sekolah</th>
                        <th scope="col">Pilihan Jurusan 1</th>
                        <th scope="col">Pilihan Jurusan 2</th>
                        <th scope="col">Aksi</th>
                      </tr>
                    </thead>
                    <tbody>
                        <?php $__currentLoopData = $mahasiswa; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data_siswa): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <th scope="row">1</th>
                                <th><?php echo e($data_siswa->no_ppdb); ?></th>
                                <td><?php echo e($data_siswa->nama); ?></td>
                                <td><?php echo e($data_siswa->asal_sekolah); ?></td>
                                <td><?php echo e($data_siswa->jurusan1); ?></td>
                                <td><?php echo e($data_siswa->jurusan2); ?></td>
                                <td>
                                    <a href="/edit" class="btn btn-success">Ubah</a> |
                                    <a href="#" class="btn btn-danger">Hapus</a> |
                                    <a href="/detail/<?php echo e($data_siswa->id); ?>" class="btn btn-info">Detail</a>
                                </td>
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout/main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\crud_laravel_pwpb\resources\views/CRUD_siswa/dataSiswa.blade.php ENDPATH**/ ?>