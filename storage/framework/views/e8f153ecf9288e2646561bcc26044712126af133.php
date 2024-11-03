<?php $__env->startSection('content'); ?>

<div class="container">
    <div class="row">
        <div class="col-md-4 col-md-offset-4" >
    <center><h3><b>Post a new criminal record</b></h3></center>
    <hr>

    	<?php if($errors->has()): ?>
            <div class="alert alert-danger">
                <?php foreach($errors->all() as $error): ?>
                    <?php echo e($error); ?><br>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>

        <?php if(Session::has('submitmsg')): ?>
        <div class='alert alert-success'>
            <strong><span style="color:green"><?php echo Session::get('submitmsg'); ?></span></strong>
        </div>
        <?php endif; ?>

        <?php if(Session::has('deletemsg')): ?>
        <div class='alert alert-success'>
            <strong><span style="color:green"><?php echo Session::get('deletemsg'); ?></span></strong>
        </div>
        <?php endif; ?>

    <?php echo Form::open(array('url' => '/post', 'files' => true )); ?>


            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" id="title" class="form-control" name="title" placeholder="Title">
                <?php if($errors->has('title')): ?> <p class="help-block"><?php echo e($errors->first('title')); ?></p> <?php endif; ?>
            </div>


            <div class="form-group">
                <label for="file">Select Image</label>
                <input type="file" id="image" class="form-control" name="image">
                <?php if($errors->has('image')): ?> <p class="help-block"><?php echo e($errors->first('image')); ?></p> <?php endif; ?>
            </div>
            <?php /*<input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">*/ ?>

            <button type="submit" class="btn btn-primary">Upload</button>

        <?php echo Form::close(); ?>


        	<br>
    			<br>
    				<br>
    	</div>

    	<div class="col-md-6 col-md-offset-3">
    		<center><h3><b>Most Wanted Criminals</b></h3></center>
    		<hr>

    		<table class="table table-hover table-condensed table-bordered">
            <thead>
            <tr>
                <th>Title</th>
                <th>Image</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach($datas as $key => $value): ?>
                <tr>
                    <td><?php echo e($value->title); ?></td>
                    <td><img src="<?= url('uploads/logo') ?>/<?= $value->image ?>" width="150px" height="150px;" alt="image"></td>
                    <td><a class="btn btn-small btn-info" href="<?php echo e(URL::to('edit/' . $value->id )); ?>">Edit</a> 
                    <a class="btn btn-small btn-info" href="<?php echo e(URL::to('delete/' . $value->id)); ?>" onclick='return confirm("Are you sure you want to delete this record?")'>Delete</a></td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>

    	</div>
    </div>
</div>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>