

<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><?php echo e(__('Dashboard')); ?></div>

                <div class="card-body">
                    <div class="blue-row" onclick="location.href='<?php echo e(route('items.index')); ?>';">
                        <h3 class="text-white"><?php echo e(__('Inventory Status')); ?></h3>
                    </div>
                    <div class="blue-row" onclick="location.href='<?php echo e(route('items.create')); ?>';">
                        <h3 class="text-white"><?php echo e(__('Add items')); ?></h3>
                    </div>
                    <div class="blue-row" onclick="location.href='<?php echo e(route('items.search')); ?>';">
                        <h3 class="text-white"><?php echo e(__('Search Items')); ?></h3>
                    </div>
                    <div class="blue-row" onclick="location.href='<?php echo e(route('items.performance')); ?>';">
                        <h3 class="text-white"><?php echo e(__('Performance Status')); ?></h3>
                    </div>
                    <div class="blue-row" onclick="location.href='<?php echo e(route('warehouse.index')); ?>';">
                        <h3 class="text-white"><?php echo e(__('Warehouse Staff Management')); ?></h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    .blue-row {
        background-color: blue;
        padding: 20px;
        margin-bottom: 20px;
        cursor: pointer;
    }
</style>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Projects\Aaaaa\inventory\resources\views/home.blade.php ENDPATH**/ ?>