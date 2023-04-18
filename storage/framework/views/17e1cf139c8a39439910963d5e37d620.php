

<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                        <form action="<?php echo e(route('items.search')); ?>" method="GET">
                            <div class="form-group">
                                <label for="name"><?php echo e(__('Enter the name of the product:')); ?></label>
                                <input type="text" class="form-control" id="name" name="name" required>
                            </div>
                            <button type="submit" class="btn btn-primary"><?php echo e(__('Search')); ?></button>
                        </form>
                        <?php if(isset($errorMessage)): ?>
                            <div class="alert alert-danger mt-3"><?php echo e($errorMessage); ?></div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Projects\Aaaaa\inventory\resources\views/items/search.blade.php ENDPATH**/ ?>