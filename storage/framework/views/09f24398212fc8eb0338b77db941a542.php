<?php $__env->startSection('content'); ?>

<div class="jumbotron jumbotron-fluid">
    <div class="container text-center">
        <h1 class="display-2 fw-bold text-primary">Manage all of your<br>Inventory<br>at one place!</h1>
        <?php if(auth()->guard()->check()): ?>
            <a href="<?php echo e(url('/home')); ?>" class="btn btn-lg btn-primary mt-4">Home</a>
        <?php else: ?>
            <a href="<?php echo e(route('login')); ?>" class="btn btn-lg btn-primary mt-4">Login</a>
            <a href="<?php echo e(route('register')); ?>" class="btn btn-lg btn-outline-primary mt-4">Register</a>
        <?php endif; ?>
    </div>
</div>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('styles'); ?>

<style>
body {
    background-color: #f7fafc;
}

.jumbotron {
    margin-top: 3rem;
    padding: 3rem;
    border-radius: 1rem;
    background-color: #87CEFA;
    height: 500px;
}

h1.display-2 {
    font-family: 'Montserrat', sans-serif;
    text-shadow: 2px 2px #001f3f;
    color: #001f3f;
    font-size: 6rem;
    line-height: 1.2;
    text-transform: uppercase;
}

.btn-primary {
    background-color: #001f3f;
    border-color: #001f3f;
    font-size: 2rem;
    padding: 1.5rem 3rem;
}

.btn-outline-primary {
    color: #001f3f;
    border-color: #001f3f;
    font-size: 2rem;
    padding: 1.5rem 3rem;
}
</style>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Projects\Aaaaa\inventory\resources\views/welcome.blade.php ENDPATH**/ ?>