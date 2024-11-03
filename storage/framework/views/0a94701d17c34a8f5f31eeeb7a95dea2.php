<?php echo $__env->make('header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->startSection('title','home'); ?>

<div class="container-fluid">
    <div class="row">
    <center><h3><b>Find Police Stations by Area</b></h3></center>
    <div class="col-md-6 col-md-offset-1" style="height:360px;">
    <br>
        <br>
            <br>
    <form method="POST" action="/find_police" novalidate class="form-horizontal" role="form">

    <div class="form-group">
        <label for="area" class="col-sm-6 control-label" style="color:black;">Select Area:</label>
            <div class="col-sm-6">
    <select name="area" class="form-control">
    <?php $__currentLoopData = $area; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    	<option value="<?php echo e($value->area); ?>"><?php echo e($value->area); ?></option>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </select>
        <br>
    <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
    <input type="submit" name="submit" value="Search" class="btn btn-primary">
    		</div>
    </div>
    
    </form>	


    </div>
	</div>
</div>
	<br>
		<br>
			<br>

<?php echo $__env->make('footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/manasverma/Desktop/NOTES/INT221 MVC PROGRAMMING/crimereportmgmt/resources/views/user/find_police.blade.php ENDPATH**/ ?>