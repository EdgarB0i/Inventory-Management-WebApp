

<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Add Item</div>
                    <div class="panel-body">
                        <form class="form-horizontal" role="form" method="POST" action="<?php echo e(route('items.store')); ?>">
                            <?php echo e(csrf_field()); ?>


                            <div class="form-group<?php echo e($errors->has('name') ? ' has-error' : ''); ?>">
                                <label for="name" class="col-md-4 control-label">Name</label>

                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control" name="name" value="<?php echo e(old('name')); ?>" required autofocus>

                                    <?php if($errors->has('name')): ?>
                                        <span class="help-block">
                                            <strong><?php echo e($errors->first('name')); ?></strong>
                                        </span>
                                    <?php endif; ?>
                                </div>
                            </div>

                            <div class="form-group<?php echo e($errors->has('price') ? ' has-error' : ''); ?>">
                                <label for="price" class="col-md-4 control-label">Selling Price(TK)</label>

                                <div class="col-md-6">
                                    <input id="price" type="number" class="form-control" name="price" value="<?php echo e(old('price')); ?>" required min="1">

                                    <?php if($errors->has('price')): ?>
                                        <span class="help-block">
                                            <strong><?php echo e($errors->first('price')); ?></strong>
                                        </span>
                                    <?php endif; ?>
                                </div>
                            </div>

                            <div class="form-group<?php echo e($errors->has('buying_price') ? ' has-error' : ''); ?>">
                                <label for="buying_price" class="col-md-4 control-label">Buying Price(TK)</label>

                                <div class="col-md-6">
                                    <input id="buying_price" type="number" class="form-control" name="buying_price" value="<?php echo e(old('buying_price')); ?>" required min="1">

                                    <?php if($errors->has('buying_price')): ?>
                                        <span class="help-block">
                                            <strong><?php echo e($errors->first('buying_price')); ?></strong>
                                        </span>
                                    <?php endif; ?>
                                </div>
                            </div>

                            <div class="form-group<?php echo e($errors->has('quantity') ? ' has-error' : ''); ?>">
                                <label for="quantity" class="col-md-4 control-label">Quantity</label>

                                <div class="col-md-6">
                                    <input id="quantity" type="number" class="form-control" name="quantity" value="<?php echo e(old('quantity')); ?>" required min="1">

                                    <?php if($errors->has('quantity')): ?>
                                        <span class="help-block">
                                            <strong><?php echo e($errors->first('quantity')); ?></strong>
                                        </span>
                                    <?php endif; ?>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <button type="submit" class="btn btn-primary">
                                        Add Item
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Projects\Aaaaa\inventory\resources\views/items/create.blade.php ENDPATH**/ ?>