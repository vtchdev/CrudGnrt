<?php $__env->startSection('content'); ?>

    <?php if(Session::has('success_message')): ?>
        <div class="alert alert-success">
            <span class="glyphicon glyphicon-ok"></span>
            <?php echo session('success_message'); ?>


            <button type="button" class="close" data-dismiss="alert" aria-label="close">
                <span aria-hidden="true">&times;</span>
            </button>

        </div>
    <?php endif; ?>

    <div class="panel panel-default">

        <div class="panel-heading clearfix">

            <div class="pull-left">
                <h4 class="mt-5 mb-5">Blogs</h4>
            </div>

            <div class="btn-group btn-group-sm pull-right" role="group">
                <a href="<?php echo e(route('blogs.blog.create')); ?>" class="btn btn-success" title="Create New Blog">
                    <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                </a>
            </div>

        </div>
        
        <?php if(count($blogs) == 0): ?>
            <div class="panel-body text-center">
                <h4>No Blogs Available.</h4>
            </div>
        <?php else: ?>
        <div class="panel-body panel-body-with-table">
            <div class="table-responsive">

                <table class="table table-striped ">
                    <thead>
                        <tr>
                            <th>Title</th>
                            <th>Slug</th>
                            <th>Blogcategory</th>
                            <th>Seoname</th>
                            <th>Metabody</th>

                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php $__currentLoopData = $blogs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $blog): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e($blog->title); ?></td>
                            <td><?php echo e($blog->slug); ?></td>
                            <td><?php echo e(optional($blog->blogcategory)->name); ?></td>
                            <td><?php echo e($blog->seoname); ?></td>
                            <td><?php echo e($blog->metabody); ?></td>

                            <td>

                                <form method="POST" action="<?php echo route('blogs.blog.destroy', $blog->id); ?>" accept-charset="UTF-8">
                                <input name="_method" value="DELETE" type="hidden">
                                <?php echo e(csrf_field()); ?>


                                    <div class="btn-group btn-group-xs pull-right" role="group">
                                        <a href="<?php echo e(route('blogs.blog.show', $blog->id )); ?>" class="btn btn-info" title="Show Blog">
                                            <span class="glyphicon glyphicon-open" aria-hidden="true"></span>
                                        </a>
                                        <a href="<?php echo e(route('blogs.blog.edit', $blog->id )); ?>" class="btn btn-primary" title="Edit Blog">
                                            <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                                        </a>

                                        <button type="submit" class="btn btn-danger" title="Delete Blog" onclick="return confirm(&quot;Click Ok to delete Blog.&quot;)">
                                            <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
                                        </button>
                                    </div>

                                </form>
                                
                            </td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>

            </div>
        </div>

        <div class="panel-footer">
            <?php echo $blogs->render(); ?>

        </div>
        
        <?php endif; ?>
    
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\vcms\resources\views/blogs/index.blade.php ENDPATH**/ ?>