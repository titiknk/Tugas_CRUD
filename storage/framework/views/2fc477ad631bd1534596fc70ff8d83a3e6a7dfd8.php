

<?php $__env->startSection('content'); ?>
    <div class="container">
    <h1><p style="text-align:center">DATA PASIEN</p></h1>
    <a class="btn btn-primary"  href="/pasien/create">+ Tambah Data</a>
    <table class="table table-hover">
        <tr>
            <th>No</th>
            <th>Nama Pasien</th>
            <th>Alamat</th>
            <th>No HP</th>
            <th>Umur</th>
            <th>Jenis Kelamin</th>
            <th>Riwayat Penyakit</th>
            <th>Poli</th>
            <th>Aksi</th>
        </tr>
        <?php $__currentLoopData = $pasien; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo e($p->id); ?></td>
            <td><?php echo e($p->nama); ?></td>
            <td><?php echo e($p->alamat); ?></td>
            <td><?php echo e($p->no_hp); ?></td>
            <td><?php echo e($p->umur); ?></td>
            <td><?php echo e($p->jenis_kelamin); ?></td>
            <td><?php echo e($p->riwayat_penyakit); ?></td>
            <td><?php echo e($p->poli); ?></td>
            <td>
                    <div class="btn-group" role="group" aria-label="Basic example">
                    <a class="btn btn-warning" href="/pasien/<?php echo e($p->id); ?>/edit">Edit</a>
                    <form action="/pasien/<?php echo e($p->id); ?>" method="POST">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('delete'); ?>
                        <input class="btn btn-danger" type="submit" value="Delete">
                    </form>
                </div>
            </td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </table>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laravel\laravel9_crud\resources\views/pasien/index.blade.php ENDPATH**/ ?>