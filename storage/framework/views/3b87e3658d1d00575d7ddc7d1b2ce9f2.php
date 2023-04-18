

<?php $__env->startSection('content'); ?>
    <div class="container">
        <h1 class="text-center">Warehouse Status</h1>

        <div class="status-container">
            <div class="status">
                <h2>Present Warehouse Staff:</h2>
                <p class="number"><?php echo e($present_staff); ?></p>
            </div>

            <div class="status">
                <h2>Required Warehouse Staff:</h2>
                <p class="number"><?php echo e($required_staff); ?></p>
            </div>

            <div class="status">
                <h2>Suggestion:</h2>
                <?php if($required_staff > $present_staff): ?>
                    <p class="message">More Warehouse Workers Are Needed!</p>
                <?php elseif($required_staff < $present_staff): ?>
                    <p class="message">Some Warehouse Workers Can Be Cut Off</p>
                <?php else: ?>
                    <p class="message">No Change in Staff Needed at the Moment.</p>
                <?php endif; ?>
            </div>
        </div>

        <div class="status-update">
            <h2>Update Present Warehouse Staff:</h2>
            <form action="<?php echo e(route('warehouse.update', ['user_id' => Auth::id()])); ?>" method="POST">
                <?php echo csrf_field(); ?>
                <?php echo method_field('PUT'); ?>
                <div class="form-group">
                    <label for="present_staff">Enter the number of present staff:</label>
                    <input type="number" class="form-control <?php $__errorArgs = ['present_staff'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="present_staff" name="present_staff" value="<?php echo e(old('present_staff') ?? session('present_staff') ?? $present_staff); ?>" required>
                    <?php $__errorArgs = ['present_staff'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <div class="invalid-feedback"><?php echo e($message); ?></div>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>
                <button type="submit" class="btn btn-primary">Update</button>
            </form>
        </div>
    </div>

    <style>
        .status-container {
            display: flex;
            flex-direction: row;
            justify-content: space-evenly;
            margin-top: 30px;
        }

        .status {
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 20px;
            background-color: #f0f0f0;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
        }

        .status h2 {
            font-size: 24px;
            margin-bottom: 10px;
            text-align: center;
            color: #333333;
        }

        .status p.number {
            font-size: 48px;
            font-weight: bold;
            margin: 0;
            color: #333333;
        }

        .status p.message {
            font-size: 24px;
            font-weight: bold;
            margin: 0;
            text-align: center;
            color: #333333;
        }
    </style>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Projects\Aaaaa\inventory\resources\views/warehouse/status.blade.php ENDPATH**/ ?>