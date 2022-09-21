


<?php $__env->startSection('title'); ?>
    update tag
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <table class="table table-bordered table-hover table-dark">
        <thead>
        <tr>
            <th scope="col">id</th>
            <th scope="col">title</th>
            <th scope="col">slug</th>
            <th scope="col">created_at</th>
            <th scope="col">updated_at</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <th scope="col"><?php echo e($tag->id); ?></th>
            <th scope="col"><?php echo e($tag->title); ?></th>
            <th scope="col"><?php echo e($tag->slug); ?></th>
            <th scope="col"><?php echo e($tag->created_at); ?></th>
            <th scope="col"><?php echo e($tag->updated_at); ?></th>
        </tr>
        </tbody>
    </table>
    <div class="container mt-4">
        <form action="" method="POST">
            <input type="hidden" id="id" name="id" value="<?php echo e($tag->id); ?>">
            <div class="form-group">
                <label for="title">title</label>
                <input type="text" class="form-control" id="title" name="title" value="<?php echo e($tag->title); ?>">
            </div>
            <div class="form-group">
                <label for="slug">Password</label>
                <input type="text" class="form-control" id="slug" name="slug" value="<?php echo e($tag->slug); ?>">
            </div>
            <button type="submit" class="btn btn-primary mt-4">Submit</button>
        </form>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/vagrant/code/sandbox/DZ-now/resources/views/tags/update.blade.php ENDPATH**/ ?>