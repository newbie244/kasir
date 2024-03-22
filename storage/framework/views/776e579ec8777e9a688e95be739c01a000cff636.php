;

<?php $__env->startSection('content'); ?>

<div class="card">
    <div class="table-responsive text-nowrap">
        <a class="btn btn-success" href="<?php echo e(route('produk.create')); ?>">Tambah+</a>
        <table class="table">
            <thead>
            <tr>
                <th>No</th>
                <th>Kode</th>
                <th>Nama</th>
                <th>Harga</th>
                <th>Stok</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tbody class="table-border-bottom-0">
                <?php $__currentLoopData = $produk; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($loop->iteration); ?></td>
                        <td><?php echo e($p->kode_produk); ?></td>
                        <td><?php echo e($p->nama); ?></td>
                        <td><?php echo e($p->stok); ?></td>
                        <td><?php echo e($p->harga); ?></td>
                        <td>
                        <div class="dropdown">
                            <a class="btn btn-primary btn-sm" href="<?php echo e(route('produk.edit',$p->id_produk)); ?>"><i class="bx bx-edit-alt me-2">Edit</i></a>
                            <form action="<?php echo e(route('produk.delete',$p->id_produk)); ?>" method="POST">
                                <?php echo csrf_field(); ?>
                                <?php echo method_field('DELETE'); ?>
                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus produk ini?')"><i class="bx bx-trash-alt me-2">Delete</i></button>
                            </form>
                        </td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    </div>
</div>





<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\coba\resources\views/produk/index.blade.php ENDPATH**/ ?>