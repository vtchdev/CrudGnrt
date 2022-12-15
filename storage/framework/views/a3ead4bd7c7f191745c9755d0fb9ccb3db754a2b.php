<?php $__env->startSection('content'); ?>

    <div class="panel panel-default">

        <div class="panel-heading clearfix">
            
            <span class="pull-left">
                <h4 class="mt-5 mb-5">Create New Blog</h4>
            </span>

            <div class="btn-group btn-group-sm pull-right" role="group">
                <a href="<?php echo e(route('blogs.blog.index')); ?>" class="btn btn-primary" title="Show All Blog">
                    <span class="glyphicon glyphicon-th-list" aria-hidden="true"></span>
                </a>
            </div>

        </div>

        <div class="panel-body">
        
            <?php if($errors->any()): ?>
                <ul class="alert alert-danger">
                    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li><?php echo e($error); ?></li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
            <?php endif; ?>

            <form method="POST" action="<?php echo e(route('blogs.blog.store')); ?>" accept-charset="UTF-8" id="create_blog_form" name="create_blog_form" class="form-horizontal" enctype="multipart/form-data">
            <?php echo e(csrf_field()); ?>

            <?php echo $__env->make('blogs.form', [
                                        'blog' => null,
                                      ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                <div class="form-group">
                    <div class="col-md-offset-2 col-md-10">
                        <input class="btn btn-primary" type="submit" value="Add">
                    </div>
                </div>

            </form>

        </div>
    </div>

<?php $__env->stopSection(); ?>



<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\vcms\resources\views/blogs/create.blade.php ENDPATH**/ ?>