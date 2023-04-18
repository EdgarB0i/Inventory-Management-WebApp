

<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Performance Status</div>

                    <div class="card-body">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">Item Name</th>
                                    <th scope="col">Selling Price(TK)</th>
                                    <th scope="col">Buying Price(TK)</th>
                                    <th scope="col">Profit/Loss</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $__currentLoopData = $items->sortByDesc(function ($item, $key) {
                                    return ($item->buying_price > 0) ? ($item->price - $item->buying_price) / $item->buying_price : 0;
                                }); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td><?php echo e($item->name); ?></td>
                                        <td><?php echo e($item->price); ?></td>
                                        <td><?php echo e($item->buying_price); ?></td>
                                        <td>
                                            <?php
                                                $profit = ($item->buying_price > 0) ? (($item->price - $item->buying_price) / $item->buying_price) * 100 : 0;
                                                $color = ($profit > 0) ? 'green' : 'red';
                                            ?>
                                            <span style="color:<?php echo e($color); ?>"><?php echo e(number_format($profit, 2)); ?>%</span>
                                        </td>
                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Projects\Aaaaa\inventory\resources\views/items/performance.blade.php ENDPATH**/ ?>