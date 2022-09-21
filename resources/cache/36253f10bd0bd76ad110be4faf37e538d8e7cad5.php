

<?php $__env->startSection('title'); ?>
    list tags
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <table class="table table-bordered table-hover table-dark">
        <thead>
        <tr>
            <td colspan="7"  style="text-align: center;"><a href="create.php" style="font-size: 30px; color: #0099FF">&#43;  Create tag  &#43;</a></td>
        </tr>
        </thead>
        <thead>
        <tr>
            <th scope="col">id</th>
            <th scope="col">title</th>
            <th scope="col">slug</th>
            <th scope="col">created_at</th>
            <th scope="col">updated_at</th>
            <th scope="col">update</th>
            <th scope="col">delete</th>
        </tr>
        </thead>
        <tbody>
        <?php $__currentLoopData = $tags; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tag): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <th scope="row"><?php echo e($tag->id); ?></th>
                <td><?php echo e($tag->title); ?></td>
                <td><?php echo e($tag->slug); ?></td>
                <td><?php echo e($tag->created_at); ?></td>
                <td><?php echo e($tag->updated_at); ?></td>
                <td><a href="update.php?id=<?php echo e($tag->id); ?>">&#9999;</a></td>
                <td><a href="delete.php?id=<?php echo e($tag->id); ?>">&#10060;</a></td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/vagrant/code/sandbox/DZ-now/resources/views/tags/list.blade.php ENDPATH**/ ?>