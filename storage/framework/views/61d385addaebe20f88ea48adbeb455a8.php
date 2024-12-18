<?php echo $__env->make('header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->startSection('title','home'); ?>

<div class="container-fluid">
    <div class="row">

        <div class="col-md-8 col-md-offset-2">
            <h3 style="text-align:center; font-family: Bernard MT Condensed;">Complaint Against Police</h3>
            <div class="panel panel-primary">

                <?php if($errors->any()): ?>
            <div class="alert alert-danger">
                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php echo e($error); ?><br>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
            <?php endif; ?>

        <?php if(Session::has('submitmsg')): ?>
            <div class='alert alert-success'>
            <strong>Success!</strong> <?php echo Session::get('submitmsg'); ?>

            <?php $__currentLoopData = $results; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $number): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <p style="color:red;"> Your Complaint Number is:&nbsp;<?php echo e($number->rand); ?></p>
            <p style="color:blue;">Note this Complaint Number for further query.Thank You</p>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        <?php endif; ?>


                <div class="panel-body">
                <h4 style="color: #00acc1;">Enter Reporting Person Information:-</h4>
                    <div style="background-color: #E6E6E6; padding: 10px; color: #0B4C5F;">
                    <p>Please enter your information as completely as possible. You may be contacted regarding this incident. An email address is required if you would like to be notified when this report is received and approved.</p>
                    </div>
                    <hr>
        <form method="POST" action="/police_complaint" novalidate class="form-horizontal" role="form">

            <div class="form-group">
                <label for="name" class="col-sm-2 control-label">Name</label>
                <div class="col-sm-10">
                <input type="text" id="name" class="form-control" name="name" placeholder="Enter Your Name" >
                <?php if($errors->has('name')): ?> <p class="help-block"><?php echo e($errors->first('name')); ?></p> <?php endif; ?>
                </div>
            </div>

            <div class="form-group">
                <label for="address" class="col-sm-2 control-label">Address</label>
                <div class="col-sm-10">
                    <input type="text" id="address" class="form-control" name="address" placeholder="Enter Your Address">
                    <?php if($errors->has('address')): ?> <p class="help-block"><?php echo e($errors->first('address')); ?></p> <?php endif; ?>
                </div>
            </div>

            <div class="form-group">
                <label for="phone" class="col-sm-2 control-label">Contact Number</label>
                <div class="col-sm-4">
                    <input type="text" id="phone" class="form-control" name="phone_number" placeholder="ex: +880171-0000000">
                    <?php if($errors->has('phone_number')): ?> <p class="help-block"><?php echo e($errors->first('phone_number')); ?></p> <?php endif; ?>
                </div>
            </div>

            <div class="form-group">
                <label for="email" class="col-sm-2 control-label">Email</label>
                <div class="col-sm-10">
                    <input type="email" id="email" class="form-control" name="email" placeholder="ex: someone@gmail.com or someone@yahoo.com">
                    <?php if($errors->has('email')): ?> <p class="help-block"><?php echo e($errors->first('email')); ?></p> <?php endif; ?>
                </div>
            </div>

                
                
                <hr>
                <h4 style="color: #00acc1;">Enter Police Information:-</h4>
                
                    <hr>

                        <div class="form-group">
                            <label for="police_name" class="col-sm-2 control-label">Name</label>
                            <div class="col-sm-10">
                                <input type="text" id="police_name" class="form-control" name="police_name" placeholder="Enter police person name">
                                <?php if($errors->has('police_name')): ?> <p class="help-block"><?php echo e($errors->first('police_name')); ?></p> <?php endif; ?>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="rank" class="col-sm-2 control-label">Rank</label>
                            <div class="col-sm-4">
                                <input type="text" id="rank" class="form-control" name="rank" placeholder="Enter police person rank">
                                <?php if($errors->has('rank')): ?> <p class="help-block"><?php echo e($errors->first('rank')); ?></p> <?php endif; ?>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="place_of_position" class="col-sm-2 control-label">Place of Position</label>
                            <div class="col-sm-4">
                                <input type="text" id="place_of_position" class="form-control" name="place_of_position" placeholder="Enter place of position">
                                <?php if($errors->has('place_of_position')): ?> <p class="help-block"><?php echo e($errors->first('place_of_position')); ?></p> <?php endif; ?>
                            </div>
                        </div>


                        <div class="form-group">
                            <label for="complaint" class="col-sm-2 control-label">Complaint</label>
                            <div class="col-sm-10">
                                <textarea id="complaint" class="form-control" name="complaint" placeholder="2000 characters maximum"></textarea>
                                <?php if($errors->has('complaint')): ?> <p class="help-block"><?php echo e($errors->first('complaint')); ?></p> <?php endif; ?>
                            </div>
                        </div>

                        <center><p style="color:red;">Please double check before submission<br>
                        Once you submitted you could not change</p></center>



            <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
            <input type="hidden" name="random_number" id="random-number" value="" />
            <br>

            <center><input type="submit" name="submit" value="Submit" class="btn btn-primary" style="padding: 10px; width: 100px;" onclick="getElementById('random-number').value=Math.floor(Math.random()*10000)"></center>

        </form>

                </div>
            </div>
        </div>
    </div>
</div>

<?php echo $__env->make('footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/manasverma/Desktop/NOTES/INT221 MVC PROGRAMMING/crimereportmgmt/resources/views/complaint/police_complaint.blade.php ENDPATH**/ ?>