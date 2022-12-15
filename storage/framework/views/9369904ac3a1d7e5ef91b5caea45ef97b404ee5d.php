
<div class="form-group <?php echo e($errors->has('name') ? 'has-error' : ''); ?>">
    <label for="name" class="col-md-2 control-label">Name</label>
    <div class="col-md-10">
        <input class="form-control" name="name" type="text" id="name" value="<?php echo e(old('name', optional($blogcategory)->name)); ?>" minlength="1" maxlength="255" placeholder="Enter name here...">
        <?php echo $errors->first('name', '<p class="help-block">:message</p>'); ?>

    </div>
</div>

<div class="form-group <?php echo e($errors->has('slug') ? 'has-error' : ''); ?>">
    <label for="slug" class="col-md-2 control-label">Slug</label>
    <div class="col-md-10">
        <input class="form-control" name="slug" type="text" id="slug" value="<?php echo e(old('slug', optional($blogcategory)->slug)); ?>" minlength="1" placeholder="Enter slug here...">
        <?php echo $errors->first('slug', '<p class="help-block">:message</p>'); ?>

    </div>
</div>

<div class="form-group <?php echo e($errors->has('description') ? 'has-error' : ''); ?>">
    <label for="description" class="col-md-2 control-label">Description</label>
    <div class="col-md-10">
        <textarea class="form-control" name="description" cols="50" rows="10" id="description" minlength="1" maxlength="1000"><?php echo e(old('description', optional($blogcategory)->description)); ?></textarea>
        <?php echo $errors->first('description', '<p class="help-block">:message</p>'); ?>

    </div>
</div>

<?php /**PATH C:\xampp\htdocs\vcms\resources\views/blogcategories/form.blade.php ENDPATH**/ ?>