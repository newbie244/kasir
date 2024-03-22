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
                
            </tbody>
        </table>
    </div>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\coba\resources\views/penjualan/index.blade.php ENDPATH**/ ?>