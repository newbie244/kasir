;

<?php $__env->startSection('content'); ?>

<div class="card">
    <div class="table-responsive text-nowrap">
        <a class="btn btn-success" href="<?php echo e(route('penjualan.pelanggan')); ?>">Tambah Penjualan</a>
        <table class="table">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Kode Penjualan</th>
                    <th>Tanggal</th>
                    <th>Total Harga</th>
                    <th>Bayar</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody class="table-border-bottom-0">
                <?php $__currentLoopData = $penjualan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($loop->iteration); ?></td>
                        <td><?php echo e($p->kode_penjualan); ?></td>
                        <td><?php echo e($p->tanggal); ?></td>
                        <td><?php echo e($p->total_harga); ?></td>
                        <td><?php echo e($p->bayar); ?></td>
                        <td>
                            <a class="btn btn-primary text-white" href="<?php echo e(route('penjualan.invoice',$p->kode_penjualan)); ?>">Invoice</a>
                        </td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    </div>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\coba\resources\views/penjualan/index.blade.php ENDPATH**/ ?>