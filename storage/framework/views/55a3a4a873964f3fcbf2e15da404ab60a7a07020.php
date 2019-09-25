<?php $__env->startSection('content'); ?>
<div class="content-wrapper">
	<!-- content header (page header) -->
	<section class="content-header">
		<h1>Search Standard</h1>
		<ol class="breadcrumb">
			<li><b><a href="<?php echo e(action('StandardController@create')); ?>" class="pull-right"><span style="color:blue;">create Standard</span></a></b></li>
		</ol>
	</section>
	<!-- Main content -->
	<section class="content">
		<div class="row">
			<div class="col-xs-12">
				<div class="box">
					<div class="box-header with-border">
						<h3 class="box-title"></h3>
						<div class="box-tools pull-right">
							<button type="button" class="btn bg-teal btn-sm" data-widget="collapse"><i class="fa fa-minus"></i>
							</button>
						</div>
					</div>
					<!-- /.box-header -->
					<div class="box-body">
						<div class="row">
							<div class="col-md-3">
								<div class="form-group">
									<label>Section</label><br>
									<select class="form-control select2 select2-hidden-accessible" id="sectionId" name="sectionId" style="width:100%;" tabindex="-1" aria-hidden="true">
										<option selected="selected" value="">Select Section</option>
										<option value="Play Group">Play Group</option>
										<option value="Primary">Primary</option>
										<option value="Secondary">Secondary</option>
										<option value="Science">Science</option>
										<option value="Arts">Arts</option>
										<option value="Commerce">Commerce</option>
									</select>
								</div>
							</div>
							<!-- Select name of employee -->
							<div class="col-md-3">
								<div class="form-group">
									<label>Standard</label><br>
									<input type="text" name="standard" id="standard" require="" class="form-control" style="width:100%" ;="">
								</div>
							</div>
							<div class="col-md-3">
								<div class="form-group">
									<label>Division</label><br>
									<div class="checkbox-inline">
										<label><input type="checkbox" name="division[]" value="A">A</label>
									</div>
									<div class="checkbox-inline">
										<label><input type="checkbox" name="division[]" value="B">B</label>
									</div>
									<div class="checkbox-inline">
										<label><input type="checkbox" name="division[]" value="C">C</label>
									</div>
									<div class="checkbox-inline">
										<label><input type="checkbox" name="division[]" value="D">D</label>
									</div>
									<div class="checkbox-inline">
										<label><input type="checkbox" name="division[]" value="E">E</label>
									</div>
									<div class="checkbox-inline">
										<label><input type="checkbox" name="division[]" value="F">F</label>
									</div>
								</div>
							</div>
							<div class="col-md-3">
								<div class="form-group">
									<label>Status</label><br>
									<select class="form-control select2" name="deleteData" id="deleteData" style="width:100%;">
										<option value="1">Active</option>
										<option value="0">Inactive</option>
										<option selected="all" value="2">All</option>
									</select>
								</div>
							</div>
						</div>
					</div>
					<div class="box-body">
						<div class="row">
							<div class="col-lg-2">
								<button type="submit" onclick="search_standard();" class="btn btn-primary btn-block btn-flat">Search</button>
							</div>
							<div class="col-lg-2">
								<button type="remove" class="btn btn-success btn-block btn-flat">Cancel</button>
							</div>
						</div>
					</div>
					<!-- /.box-body -->
				</div>
				<!-- /.box -->
				<div class="box">
					<div class="box-header">
						<h3 class="box-title">Standard Search result column</h3>
					</div>
					<!-- /.box-header -->
					<div class="box-body">
						<table id="example1" class="table table-bordered table-striped">
							<thead>
								<tr>
									<th>Section</th>
									<th>Standard</th>
									<th>Division</th>
									<th>Description</th>
									<th>Status</th>
									<th>Action</th>
								</tr>
							</thead>
							<tbody>
								<?php $__currentLoopData = $standardmst; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
								<tr>
									<td><?php echo e($post['sectionId']); ?></td>
									<td><?php echo e($post['standard']); ?></td>
									<td><?php echo e($post['division']); ?></td>
									<td><?php echo e($post['description']); ?></td>
									<td><?php if ($post['deleteData'] == 1) echo "Active";
										else echo "InActive"; ?></td>
									<td> <a href="<?php echo e(action('StandardController@edit', $post['standardId'])); ?>" class="#"><i class="fa fa-edit"></i></a> | <a class="#" data-toggle="modal" data-target="#modal-default"><i class="fa fa-remove"></i></a></td>
								</tr>
								<div class="modal fade" id="modal-default">
									<div class="modal-dialog">
										<div class="modal-content">
											<div class="modal-header">
												<button type="button" class="close" data-dismiss="modal" aria-label="Close">
													<span aria-hidden="true">&times;</span></button>
												<h4 class="modal-title">Confirm</h4>
											</div>
											<div class="modal-body">
												<p>Are you sure you want to delete record?</p>
											</div>
											<div class="modal-footer">
												<form method="post" action="<?php echo e(action('StandardController@destroy', $post['standardId'])); ?>">
													<?php echo e(csrf_field()); ?> <input name="_method" type="hidden" value="DELETE">
													<button type="submit" class="btn btn-primary">Yes</button>
												</form>
											</div>
										</div>
										<!-- /.modal-content -->
									</div>
									<!-- /.modal-dialog -->
								</div>
								<!-- /.modal -->
								<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
							</tbody>
							<tfoot>
								<tr>
									<th>Section</th>
									<th>Standard</th>
									<th>Division</th>
									<th>Description</th>
									<th>Status</th>
									<th>Action</th>
								</tr>
							</tfoot>
						</table>
					</div>
					<!-- /.box-body -->
				</div>
				<!-- /.box -->
			</div>
			<!-- /.col -->
		</div>
		<!-- /.row -->
	</section>
	<!-- /.content -->
</div>
<script type="text/javascript">
	function search_standard() {
		var val = [];
		$(':checkbox:checked').each(function(i) {
			val[i] = $(this).val();
		});
		var division = val.join(',');
		var token = $("input[name=_token]").val();
		var sectionId = $("#sectionId").val();
		var standard = $("#standard").val();
		var division = division;
		var deleteData = $("#deleteData").val();
		if (deleteData == '') {
			$("#msg").text('Please enter status');
			$('#default_popup').modal('show');
		}
		//alert(name+empTypeId+staffTypeId+bloodGroup+deleteData);
		//$value=$(this).val();
		$.ajax({
			url: '<?php echo e(url(' / search_standard ')); ?>',
			type: 'get',
			data: {
				'token': token,
				'sectionId': sectionId,
				'standard': standard,
				'division': division,
				'deleteData': deleteData
			},
			success: function(data) {
				console.log(data);
				$('tbody').html(data);
			}
		});
	}
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>