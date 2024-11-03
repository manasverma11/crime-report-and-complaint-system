<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            
                <center><h3><b>Insert a new Police Station</b></h3></center>
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
                
            <!-- <?php echo Form::open(array('url' => ['insert_police'])); ?> -->
    <form method="POST" action="/insert_police" novalidate class="form-horizontal" role="form">

            <div class="form-group">
                <label for="area" class="col-sm-2 control-label"><b>Area:</b></label>
                <div class="col-sm-10">
                <input type="text" id="area" class="form-control" name="area" placeholder="Area">
                <?php if($errors->has('area')): ?> <p class="help-block"><?php echo e($errors->first('area')); ?></p> <?php endif; ?>
                </div>
            </div>
            <div class="form-group">
                <label for="lon" class="col-sm-2 control-label"><b>Longitude:</b></label>
                <div class="col-sm-10">
                <input type="text" id="lon" class="form-control" name="lon" placeholder="Longitude">
                <?php if($errors->has('lon')): ?> <p class="help-block"><?php echo e($errors->first('lon')); ?></p> <?php endif; ?>
                </div>
            </div>
            <div class="form-group">
                <label for="lat" class="col-sm-2 control-label"><b>Latitude:</b></label>
                <div class="col-sm-10">
                <input type="text" id="lat" class="form-control" name="lat" placeholder="Latitude">
                <?php if($errors->has('lat')): ?> <p class="help-block"><?php echo e($errors->first('lat')); ?></p> <?php endif; ?>
                </div>
            </div>

            <div class="form-group">
                <label for="address" class="col-sm-2 control-label"><b>Address:</b></label>
                <div class="col-sm-10">
                <input type="text" id="address" class="form-control" name="address" placeholder="Address">
                <?php if($errors->has('address')): ?> <p class="help-block"><?php echo e($errors->first('address')); ?></p> <?php endif; ?>
                </div>
            </div>

            <div class="form-group">
                <label for="dutyofficer" class="col-sm-2 control-label"><b>Duty Officer:</b></label>
                <div class="col-sm-10">
                <input type="text" id="dutyofficer" class="form-control" name="dutyofficer" placeholder="Duty Officer">
                <?php if($errors->has('dutyofficer')): ?> <p class="help-block"><?php echo e($errors->first('dutyofficer')); ?></p> <?php endif; ?>
                </div>
            </div>

            <div class="form-group">
                <label for="dmp" class="col-sm-2 control-label"><b>DMP:</b></label>
                <div class="col-sm-10">
                <input type="text" id="dmp" class="form-control" name="dmp" placeholder="DMP">
                <?php if($errors->has('dmp')): ?> <p class="help-block"><?php echo e($errors->first('dmp')); ?></p> <?php endif; ?>
                </div>
            </div>

            <div class="form-group">
                <label for="tnt" class="col-sm-2 control-label"><b>T&T:</b></label>
                <div class="col-sm-10">
                <input type="text" id="tnt" class="form-control" name="tnt" placeholder="T&T">
                <?php if($errors->has('tnt')): ?> <p class="help-block"><?php echo e($errors->first('tnt')); ?></p> <?php endif; ?>
                </div>
            </div>

            <div class="form-group">
                <label for="cell" class="col-sm-2 control-label"><b>Cell:</b></label>
                <div class="col-sm-10">
                <input type="text" id="cell" class="form-control" name="cell" placeholder="Cell">
                <?php if($errors->has('cell')): ?> <p class="help-block"><?php echo e($errors->first('cell')); ?></p> <?php endif; ?>
                </div>
            </div>

            <div class="form-group">
                <label for="inspectorinvestigationcell" class="col-sm-2 control-label"><b>Inspector Investigation Cell:</b></label>
                <div class="col-sm-10">
                <input type="text" id="inspectorinvestigationcell" class="form-control" name="inspectorinvestigationcell" placeholder="Inspector Investigation Cell">
                <?php if($errors->has('inspectorinvestigationcell')): ?> <p class="help-block"><?php echo e($errors->first('inspectorinvestigationcell')); ?></p> <?php endif; ?>
                </div>
            </div>
            <center><h4><b>Officers Incharge:-</b></h4></center>
                <br>

            <div class="form-group">
                <label for="inchargedmp" class="col-sm-2 control-label"><b>DMP:</b></label>
                <div class="col-sm-10">
                <input type="text" id="inchargedmp" class="form-control" name="inchargedmp" placeholder="DMP">
                <?php if($errors->has('inchargedmp')): ?> <p class="help-block"><?php echo e($errors->first('inchargedmp')); ?></p> <?php endif; ?>
                </div>
            </div>

            <div class="form-group">
                <label for="inchargecell" class="col-sm-2 control-label"><b>Cell:</b></label>
                <div class="col-sm-10">
                <input type="text" id="inchargecell" class="form-control" name="inchargecell" placeholder="Cell">
                <?php if($errors->has('inchargecell')): ?> <p class="help-block"><?php echo e($errors->first('inchargecell')); ?></p> <?php endif; ?>
                </div>
            </div>


            <div class="form-group">
                <label for="inchargefax" class="col-sm-2 control-label"><b>Fax:</b></label>
                <div class="col-sm-10">
                <input type="text" id="inchargefax" class="form-control" name="inchargefax" placeholder="Fax">
                <?php if($errors->has('inchargefax')): ?> <p class="help-block"><?php echo e($errors->first('inchargefax')); ?></p> <?php endif; ?>
                </div>
            </div>

            <div class="form-group">
                <label for="inchargeemail" class="col-sm-2 control-label"><b>Email:</b></label>
                <div class="col-sm-10">
                <input type="email" id="inchargeemail" class="form-control" name="inchargeemail" placeholder="Email">
                <?php if($errors->has('inchargeemail')): ?> <p class="help-block"><?php echo e($errors->first('inchargeemail')); ?></p> <?php endif; ?>
                </div>
            </div>

            <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">

            <center><input type="submit" name="submit" value="Submit" class="btn btn-primary" style="padding: 10px; width: 100px;"></center>

            <br>
                <br>
        <!-- <?php echo Form::close(); ?> -->
        </form>
        </div>
            

            <div class="col-md-10 col-md-offset-1">
                <center><h3>All Police Stations</h3></center>
            <table class="table table-hover table-condensed table-bordered table-responsive">
            <thead>
            <tr class="active">
                <th>Area</th>
                <th>Longitude</th>
                <th>Latitude</th>
                <th>Address</th>
                <th>Duty Officer</th>
                <th>DMP</th>
                <th>T&T</th>
                <th>Cell</th>
                <th>Inspector Investigation Cell</th>
                <th>DMP(Incharge)</th>
                <th>Cell(Incharge)</th>
                <th>Fax(Incharge)</th>
                <th>Email(Incharge)</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tbody>
                <?php foreach($datas as $key => $value): ?>
                <tr>
                    <td><?php echo e($value->area); ?></td>
                    <td><?php echo e($value->lon); ?></td>
                    <td><?php echo e($value->lat); ?></td>
                    <td><?php echo e($value->address); ?></td>
                    <td><?php echo e($value->dutyofficer); ?></td>
                    <td><?php echo e($value->dmp); ?></td>
                    <td><?php echo e($value->tnt); ?></td>
                    <td><?php echo e($value->cell); ?></td>
                    <td><?php echo e($value->inspectorinvestigationcell); ?></td>
                    <td><?php echo e($value->inchargedmp); ?></td>
                    <td><?php echo e($value->inchargecell); ?></td>
                    <td><?php echo e($value->inchargefax); ?></td>
                    <td><?php echo e($value->inchargeemail); ?></td>
                    <td>
                    <a class="btn btn-small btn-info" href="<?php echo e(URL::to('delete/' . $value->id)); ?>" onclick='return confirm("Are you sure you want to delete this record?")' style="width:80px;">Delete</a></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
            </table>
            </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>