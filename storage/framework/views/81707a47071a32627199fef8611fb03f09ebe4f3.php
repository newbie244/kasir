;

<?php $__env->startSection('content'); ?>

<div class="card">
    <div class="table-responsive text-nowrap">
        <a class="btn btn-success" href="<?php echo e(route('pelanggan.create')); ?>">Tambah+</a>
        <table class="table">
            <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>No Telp</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tbody class="table-border-bottom-0">
                <?php $__currentLoopData = $pelanggan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($loop->iteration); ?></td>
                        <td><?php echo e($p->nama); ?></td>
                        <td><?php echo e($p->alamat); ?></td>
                        <td><?php echo e($p->telp); ?></td>
                        <td>
                        <div class="dropdown">
                            <a class="btn btn-primary btn-sm" href="<?php echo e(route('pelanggan.edit',$p->id_pelanggan)); ?>"><i class="bx bx-edit-alt me-2">Edit</i></a>
                            <form action="<?php echo e(route('pelanggan.delete',$p->id_pelanggan)); ?>" method="POST">
                                <?php echo csrf_field(); ?>
                                <?php echo method_field('DELETE'); ?>
                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus Pelanggan ini?')"><i class="bx bx-trash-alt me-2">Delete</i></button>
                            </form>
                        </td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    </div>
</div>





<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\coba\resources\views/pelanggan/index.blade.php ENDPATH**/ ?>