<?php echo $__env->make('header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->startSection('title','home'); ?>


<div class="container-fluid">
    <div class="row">
        <div class="col-md-12" >
    <center><h3>Robbery FIR</h3></center>

        <script type="text/javascript" src="http://jqueryjs.googlecode.com/files/jquery-1.3.1.min.js" > </script> 
<script type="text/javascript">

    function PrintElem(elem)
    {
        Popup($(elem).html());
    }

    function Popup(data) 
    {
        var mywindow = window.open('', 'robbery fir', 'height=400,width=600');
        mywindow.document.write('<html><head><title>robbery fir</title>');
        /*optional stylesheet*/ //mywindow.document.write('<link rel="stylesheet" href="main.css" type="text/css" />');
        mywindow.document.write('</head><body >');
        mywindow.document.write(data);
        mywindow.document.write('</body></html>');

        mywindow.document.close(); // necessary for IE >= 10
        mywindow.focus(); // necessary for IE >= 10

        mywindow.print();
        mywindow.close();

        return true;
    }

    </script>
    <?php if($datas == NULL): ?>

 <div class="col-md-6 col-md-offset-2"> 
    <div class="alert alert-danger">
  	<strong>Not found!</strong> no record found in database.
	</div>
 </div>

    <?php else: ?>

<?php $__currentLoopData = $datas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
           <button onclick="PrintElem('#mydiv')" class="btn btn-danger" style="float:right;">Export to  PDF</button>
            <div id="mydiv">
            <div class='container-fluid' style='background-color:#D8D8D8;'>
            <div class='row'>
            <div class='col-sm-6 col-md-offset-4'>
            <br>
            <div class="table-responsive" id="content">
            <table>
            <h4 style="color:black;"><b>Reporting Person Information:-</b></h4>
            <tr>
            <th><b>First Name</b></th>
            <th> : </th>
            <td><b style='color:#21610B;'><?php echo e($value->first_name); ?></b></td>
            </tr>

            <tr>
            <th><b>Last Name</b></th>
            <th> : </th>
            <td><b style='color:#21610B;'><?php echo e($value->last_name); ?></b></td>
            </tr>

            <tr>
            <th><b>Street Address</b></th>
            <th> : </th>
            <td><b style='color:#21610B;'><?php echo e($value->street_address_home); ?></b></td>
            </tr>

            <tr>
            <th><b>City</b></th>
            <th> : </th>
            <td><b style='color:#21610B;'><?php echo e($value->city); ?></b></td>
            </tr>

            <tr>
            <th><b>Zip Code</b></th>
            <th> : </th>
            <td><b style='color:#21610B;'><?php echo e($value->zip_code); ?></b></td>
            </tr>

            <tr>
            <th><b>Contact Number</b></th>
            <th> : </th>
            <td><b style='color:#21610B;'><?php echo e($value->phone_number); ?></b></td>
            </tr>

            <tr>
            <th><b>Email</b></th>
            <th> : </th>
            <td><b style='color:#21610B;'><?php echo e($value->email); ?></b></td>
            </tr>

            <tr>
            <th><b>Gender</b></th>
            <th> : </th>
            <td><b style='color:#21610B;'><?php echo e($value->gender); ?></b></td>
            </tr>

            <tr>
            <th><b>Date of birth</b></th>
            <th> : </th>
            <td><b style='color:#21610B;'><?php echo e($value->day); ?>/<?php echo e($value->month); ?>/<?php echo e($value->year); ?></b></td>
            </tr>
            </table>
            </div>
            <br>

            <div class="table-responsive">
            <table>
            <h4 style="color:black;"><b>Incident Information:-</b></h4>
            <tr>
            <th><b>Street Address</b></th>
            <th> : </th>
            <td><b style='color:#21610B;'><?php echo e($value->street_address_incident); ?></b></td>
            </tr>

            <tr>
            <th><b>City</b></th>
            <th> : </th>
            <td><b style='color:#21610B;'><?php echo e($value->city_incident); ?></b></td>
            </tr>

            <tr>
            <th><b>Zip Code</b></th>
            <th> : </th>
            <td><b style='color:#21610B;'><?php echo e($value->zip_code_incident); ?></b></td>
            </tr>

            <tr>
            <th><b>Incident time</b></th>
            <th> : </th>
            <td><b style='color:#21610B;'><?php echo e($value->incident_start); ?></b></td>
            </tr>

            <tr>
            <th><b>Incident time</b></th>
            <th> : </th>
            <td><b style='color:#21610B;'><?php echo e($value->incident_end); ?></b></td>
            </tr>

            <tr>
            <th><b>Witness</b></th>
            <th> : </th>
            <td><b style='color:#21610B;'><?php echo e($value->witness); ?></b></td>
            </tr>
            </table>
            </div>
            <br>

            <div class="table-responsive">
            <table>
            <h4 style="color:black;"><b>Property Information:-</b></h4>
            <tr>
            <th><b>Property type</b></th>
            <th> : </th>
            <td><b style='color:#21610B;'><?php echo e($value->type); ?></b></td>
            </tr>

            <tr>
            <th><b>Brand</b></th>
            <th> : </th>
            <td><b style='color:#21610B;'><?php echo e($value->brand); ?></b></td>
            </tr>

            <tr>
            <th><b>Model</b></th>
            <th> : </th>
            <td><b style='color:#21610B;'><?php echo e($value->model); ?></b></td>
            </tr>

            <tr>
            <th><b>Color</b></th>
            <th> : </th>
            <td><b style='color:#21610B;'><?php echo e($value->color); ?></b></td>
            </tr>

            <tr>
            <th><b>Serial Number</b></th>
            <th> : </th>
            <td><b style='color:#21610B;'><?php echo e($value->serial_no); ?></b></td>
            </tr>

            <tr>
            <th><b>How many</b></th>
            <th> : </th>
            <td><b style='color:#21610B;'><?php echo e($value->how_many); ?></b></td>
            </tr>

            <tr>
            <th><b>Property description</b></th>
            <th> : </th>
            <td><b style='color:#21610B;'><?php echo e($value->description); ?></b></td>
            </tr>
            </table>
            </div>
            <br>

            <div class="table-responsive">
            <table>
            <h4 style="color:black;"><b>Detail About Robbery:-</b></h4>
            <tr>
            <th><b>Narrative</b></th>
            <th> : </th>
            <td><b style='color:#21610B;'><?php echo e($value->narrative); ?></b></td>
            </tr>
            <tr>
            <th><b>Submission Date & Time</b></th>
            <th> : </th>
            <td><b style='color:#21610B;'><?php echo e($value->created_at); ?></b></td>
            </tr>
            </table>
            </div>
            <br>
            	<br>

            <!-- <a class="btn btn-small btn-info" href="<?php echo e(URL::to('edit_robbery/' . $value->id )); ?>" style="width:80px;">Edit</a> --> 
            <a class="btn btn-small btn-info" href="<?php echo e(URL::to('delete_robbery/' . $value->id)); ?>" onclick='return confirm("Are you sure you want to delete this record?")' style="width:80px;">Delete</a>

            <br>
            	<br>
            		<br>
            
            </div>
            </div>
            </div>
            </div>

        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        <?php endif; ?>

                </div>
            </div>
        </div>


<?php echo $__env->make('footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/manasverma/Desktop/NOTES/INT221 MVC PROGRAMMING/crimereportmgmt/resources/views/user/view_robbery.blade.php ENDPATH**/ ?>