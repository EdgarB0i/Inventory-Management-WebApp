

<?php $__env->startSection('content'); ?>

<div class="container">
    <div class="card">
        <div class="card-header">
            <h3><?php echo e($item->name); ?></h3>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-sm-12">
                    <h5>Selling Price: <?php echo e($item->price); ?> BDT</h5>
                    <h5>Buying Price: <?php echo e($item->buying_price); ?> BDT</h5>
                    <h5>Quantity: <?php echo e($item->quantity); ?></h5>
                    <?php if($item->quantity < 5): ?>
                        <h5 class="text-danger">Item is running low on stock!</h5>
                    <?php endif; ?>
                </div>
            </div>
        </div>
        <div class="card-footer">
            <a href="<?php echo e(route('items.edit', $item->id)); ?>" class="btn btn-primary">Edit Item</a>
            <a href="<?php echo e(route('items.index')); ?>" class="btn btn-secondary">Back to List</a>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Projects\Aaaaa\inventory\resources\views/items/show.blade.php ENDPATH**/ ?>