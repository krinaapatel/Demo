<?php $__env->startSection('content'); ?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>

    <!-- Main content -->
    
    <!-- /.content -->
  </div>
   <script type="text/javascript">
  
 
    jQuery(document).ready(function() {
		
		//$( ".subInstituteList" ).empty();
		 //Fields wrapper
		 	var academic = $("#academic");
		
		$.ajax({
			url: '<?php echo e(url('/allAcadamicYear')); ?>',
          type: "get",
          success: function(response){ // What to do if we succeed
          //if(data == "success")
        console.log(response);
		$(academic).append('<option selected="selected" value="" disabled>Select academic</option>'); //add input box
		 for(var i=0;i<response.length;i++){
		// 	console.log(response[i].instituteId)
		
			$(academic).append('<option value="'+ response[i].id+'">'+response[i].year +'</option>'); //add input box
		 } 
    }
        });	
    });
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>