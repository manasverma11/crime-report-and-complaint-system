<?php echo $__env->make('header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->startSection('title','home'); ?>

<div class="container-fluid">
    <div class="row">

    <center><h3><b>Most Wanted Criminals</b></h3></center>
    <br>
   	
   <div class="col-md-12">
			<div class="row">
			<div class="col-md-8 col-md-offset-2">
					
			<table class="table table-condensed table-responsive table-bordered" >
            <thead>
            <tr class="active">
                <th>Name</th>
                <th>Image</th>
            </tr>
            </thead>
            <tbody>
            <?php $__currentLoopData = $datas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr class="info">
                    <td style="color:black;"><?php echo e($value->title); ?></td>
                    <td><img src="<?= url('uploads/logo') ?>/<?= $value->image ?>" width="150px" height="150px;" alt="image" class="img-thumbnail"></td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>

            
                
            </div>
        </div>
        </div>

	</div>
</div>

<?php echo $__env->make('footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/manasverma/Desktop/NOTES/INT221 MVC PROGRAMMING/crimereportmgmt/resources/views/crimeinformation/mostWantedCriminals.blade.php ENDPATH**/ ?>