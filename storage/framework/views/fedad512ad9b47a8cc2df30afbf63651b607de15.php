;

<?php $__env->startSection('content'); ?>

<div class="card">
    <div class="table-responsive text-nowrap">
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
                            <a class="btn btn-primary btn-sm" href="<?php echo e(route('penjualan.create',$p->id_pelanggan)); ?>">Pilih</a>
                        </td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    </div>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\coba\resources\views/penjualan/pelanggan.blade.php ENDPATH**/ ?>