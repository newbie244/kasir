<?php $__env->startSection('content'); ?>
<div class="row mt-4">
    <h3>Nama Pelanggan : <?php echo e($pelanggan->pelanggan->nama); ?></h3>
    <div class="col-md-6">
        <div class="card">
            <div class="card-body">
                <div class="row mb-2">
                    <div class="col-md-4">kode produk</div>
                    <form action="" method="GET" class="col-md-8">
                        <div class="row">
                        <div class="col-md-8">
                            <select name="id_produk" id="" class="form-control">
                                <option value="" selected>Pilih Produk</option>
                                <?php $__empty_1 = true; $__currentLoopData = $produk; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                <option value="<?php echo e($p->id_produk); ?>"><?php echo e($p->kode_produk); ?>:<?php echo e($p->nama); ?>-<?php echo e($p->stok); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                <option value="">Belum ada produk disini</option>
                                <?php endif; ?>
                            </select>
                        </div>
                        <div class="col-md-2">
                            <button type="submit" class="btn btn-info">Pilih</button>
                        </div>
                    </div>
                    </form>
                </div>

                <form action="<?php echo e(route('penjualan.detail.create')); ?>" method="POST">
                    <?php echo csrf_field(); ?>
                    <input type="hidden" name="id_produk" value="<?php echo e(isset($d_produk) ? $d_produk->id_produk : ''); ?>">
                    <input type="hidden" name="kode_penjualan" value="<?php echo e(isset($kode_penjualan) ? $kode_penjualan : ''); ?>">
                    <div class="row mb-2">
                        <div class="col-md-4">nama</div>
                        <div class="col-md-8">
                            <input type="text" class="form-control" placeholder="nama produk" readonly value="<?php echo e(isset($d_produk) ? $d_produk->nama : ''); ?>">
                        </div>
                    </div>

                    <div class="row mb-2">
                        <div class="col-md-4">harga</div>
                        <div class="col-md-8">
                            <input type="text" class="form-control harga-produk" name="harga" placeholder="harga produk" readonly value="<?php echo e(isset($d_produk) ? $d_produk->harga : ''); ?>">
                        </div>
                    </div>


                    <div class="row mb-2">
                        <div class="col-md-4">jumlah</div>
                        <div class="col-md-8">
                            <input type="number" name="jumlah" class="form-control jumlah" min="1" max="" required>
                        </div>
                    </div>
                    <a href="<?php echo e(route('penjualan.index')); ?>" class="btn btn-primary">Kembali</a>
                    <button type="submit" class="btn btn-info">Tambah</button>
                </form>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="card">
            <div class="card-body">

            <table class="table">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Jumlah</th>
                        <th>Sub total</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                    <?php $__empty_1 = true; $__currentLoopData = $detail_penjualan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $dp): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                    <tr>
                        <td><?php echo e($loop->iteration); ?></td>
                        <td><?php echo e($dp->produk->nama); ?></td>
                        <td><?php echo e($dp->jumlah); ?></td>
                        <td><?php echo e($dp->sub_total); ?></td>
                        <td>
                            <a href="<?php echo e(route('penjualan.detail.delete' , '?id_detail='.$dp->id_detail)); ?>">X</a>
                        </td>
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                    <tr>
                        <td colspan="5"><div class="alert alert-secondary">Belum ada produk</div></td>
                    </tr>
                    <?php endif; ?>
                </tbody>
            </table>
            </div>
        </div>
    </div>
</div>

<div class="row mt-4">
    <div class="col-md-6">
        <div class="card">
            <div class="card-body">
                <h4>Pembayaran</h4>
                <form action="">

                    <div class="form-group my-1">
                        <label for="">Total Bayar</label>
                        <input type="number"value="<?php echo e($penjualan->total_harga); ?>" class="form-control" readonly>
                    </div>
                    <div class="form-group my-1">
                        <label for="">Uang Bayar</label>
                        <input type="number" name="uang_bayar" class="form-control" min="<?php echo e($penjualan->total_harga); ?>">
                    </div>
                    <button type="submit" class="btn btn-primary my-3">Hitung</button>
                </form>
                <div class="form-group my-1">
                    <label for="">Uang Kembalian</label>
                    <input type="number" name="kembalian" class="form-control" value="<?php echo e(isset($kembalian) ? $kembalian : ''); ?>" readonly>
                </div>
                    <?php if($kembalian!==''): ?>
                    <a href="<?php echo e(route('penjualan.invoice', $penjualan->kode_penjualan)); ?>" class="btn btn-primary">Invoice</a>
                    <?php endif; ?>


            </div>
        </div>
    </div>
</div>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.penjualan', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\coba\resources\views/penjualan/create.blade.php ENDPATH**/ ?>