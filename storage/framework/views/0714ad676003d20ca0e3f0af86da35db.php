

<?php $__env->startSection('content'); ?>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-md-6">
                            <h4>Inventory Status</h4>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Quantity</th>
                                <th>Price(TK)</th>
                                <th>Total Consumed Space</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $__currentLoopData = $items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e($item->name); ?></td>
                                <td><?php echo e($item->quantity); ?></td>
                                <td><?php echo e($item->price); ?></td>
                                <td><?php echo e(round($item->quantity / 100 * 100)); ?>%</td>
                                <td>
                                    <div class="d-flex">
                                        <div class="mr-3">
                                            <a href="<?php echo e(route('items.show', $item->id)); ?>" class="btn btn-primary btn-sm">View</a>
                                        </div>
                                        <div class="mr-3">
                                            <a href="<?php echo e(route('items.edit', $item->id)); ?>" class="btn btn-success btn-sm">Edit</a>
                                        </div>
                                        <div>
                                            <form action="<?php echo e(route('items.destroy', $item->id)); ?>" method="POST">
                                                <?php echo csrf_field(); ?>
                                                <?php echo method_field('DELETE'); ?>
                                                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                            </form>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>
                    <div class="row mt-3">
                        <div class="col-md-6">
                            <h5>Total number of products present: <?php echo e($items->sum('quantity')); ?> out of 100</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Projects\Aaaaa\inventory\resources\views/items/index.blade.php ENDPATH**/ ?>