

<?php $__env->startSection('content'); ?>
    <div class="container">
        <h2>Warehouse Staff Management</h2>
        <form method="POST" action="<?php echo e(route('warehouse.store')); ?>">
            <?php echo csrf_field(); ?>
            <div class="form-group">
                <label for="present_staff">Enter the number of current workers:</label>
                <input type="number" class="form-control" id="present_staff" name="present_staff">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
        <div class="mt-4">
            <?php if($presentStaff > 0): ?>
                <h4>Present staff:</h4>
                <p><?php echo e($presentStaff); ?></p>
            <?php else: ?>
                <h4>Present staff: 0</h4>
            <?php endif; ?>
        </div>
        <?php
            $requiredStaff = ceil($totalQuantity / 5);
            $suggestion = '';
            if ($requiredStaff > $presentStaff) {
                $suggestion = 'You need to hire more staff.';
            } elseif ($requiredStaff < $presentStaff) {
                $suggestion = 'You have excess staff, consider reducing.';
            } else {
                $suggestion = 'You have the right amount of staff.';
            }
        ?>
        <div class="mt-4">
            <h4>Required Staff:</h4>
            <p><?php echo e($requiredStaff); ?></p>
        </div>
        <div class="mt-4">
            <h4>Suggestion:</h4>
            <p><?php echo e($suggestion); ?></p>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Projects\Aaaaa\inventory\resources\views/warehouse/warehouse.blade.php ENDPATH**/ ?>