<?php $__env->startSection('content'); ?>
<h4 class="">Invoice Kode Penjualan <?php echo e($detail_penjualan->kode_penjualan); ?></h4>
<p class="my-3">Tanggal <?php echo e($detail_penjualan->tanggal); ?></p>

<div class="row">
    <div class="col-md-6">
        <h5>Data Pelanggan</h5>
        <div class="row">
            <div class="col-md-4">
                <p>Nama pelanggan</p>
            </div>
            <div class="col-md-8">
                <p>: <?php echo e($detail_penjualan->pelanggan->nama); ?></p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <p>Alamat pelanggan</p>
            </div>
            <div class="col-md-8">
                <p>: <?php echo e($detail_penjualan->pelanggan->alamat); ?></p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <p>Telp pelanggan</p>
            </div>
            <div class="col-md-8">
                <p>: <?php echo e($detail_penjualan->pelanggan->telp); ?></p>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <h5>Data petugas</h5>
        <div class="row">
            <div class="col-md-4">
                <p>Nama petugas</p>
            </div>
            <div class="col-md-8">
                
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <p>Username petugas</p>
            </div>
            <div class="col-md-8">
                
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <p>Level petugas</p>
            </div>
            <div class="col-md-8">
                
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="table-responsive text-nowrap">
        <table class="table">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Kode</th>
                    <th>Nama</th>
                    <th>Harga</th>
                    <th>Jumlah</th>
                    <th>Sub total</th>
                </tr>
            </thead>
            <tbody class="table-border-bottom-0">
                <?php $__currentLoopData = $detail_produk; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $detail): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($loop->iteration); ?></td>
                    <td><?php echo e($detail->produk->kode_produk); ?></td>
                    <td><?php echo e($detail->produk->nama); ?></td>
                    <td><?php echo e($detail->produk->harga); ?></td>
                    <td><?php echo e($detail->jumlah); ?></td>
                    <td><?php echo e($detail->sub_total); ?></td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    </div>
</div>

<div class="mt-5">

    <div class="row ">
        <div class="col-md-2">
            <p>Total Harga</p>
        </div>
        <div class="col-md-2">
            <p>: <?php echo e($detail_penjualan->total_harga); ?>.00</p>
        </div>
    </div>
    <div class="row ">
        <div class="col-md-2">
            <p>Total Bayar</p>
        </div>
        <div class="col-md-2">
            <p>: <?php echo e($detail_penjualan->bayar); ?></p>
        </div>
    </div>
    <div class="row ">
        <div class="col-md-2">
            <p>Total Kembalian</p>
        </div>
        <div class="col-md-2">
            <p>: <?php echo e($detail_penjualan->bayar - $detail_penjualan->total_harga); ?>.00</p>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\coba\resources\views/penjualan/invoice/nota.blade.php ENDPATH**/ ?>