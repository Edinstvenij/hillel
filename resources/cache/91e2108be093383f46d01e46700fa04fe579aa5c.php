

<?php $__env->startSection('content'); ?>

    <!-- As a link -->
    <nav class="navbar bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" style="width: 100%" href="categories/list.php">Categories</a>
        </div>
        <div class="container-fluid">
            <a class="navbar-brand" style="width: 100%" href="tags/list.php">Tags</a>
        </div>
    </nav>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/vagrant/code/sandbox/DZ-now/resources/views/index.blade.php ENDPATH**/ ?>