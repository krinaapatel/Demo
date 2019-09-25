<?php $__env->startSection('content'); ?>

<div class="content-wrapper">

	<!-- content header (page header) -->

	<section class="content-header">

		<h1>Search Subject</h1>

      <ol class="breadcrumb">

        <li><b><a href="<?php echo e(action('SubjectController@create')); ?>" class="pull-right"><span style="color:blue;">Create Subject</span></a></b></li>

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

					<div class="col-md-4">

						<div class="form-group">

							<label>Description</label>

							<input type="text" name="description" class="form-control" style="width:100%;" >

						</div>

					</div>

					<div class="col-md-4">

						<div class="form-group">

							<label>Standard</label><br>

							<input type="text" name="standard" class="form-control" style="width:100%;" >

						</div>

					</div>

					<div class="col-md-4">

						<div class="form-group">

							<label>Division</label><br>

							<input type="text" name="division" class="form-control" style="width:100%;" >

						</div>

					</div>

					<div class="col-md-4">

						<div class="form-group">

							<label>Subject</label>

							<input type="text" name="subject" class="form-control" style="width:100%;" >

						</div>

					</div>

				</div>

            </div>

			<div class="box-body"> 

				<div class="row">

					<div class="col-lg-2">

						<button type="submit" class="btn btn-primary btn-block btn-flat">Search</button>

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

              <h3 class="box-title">Subject Search result column</h3>

            </div>

            <!-- /.box-header -->

            <div class="box-body">

              <table id="example1" class="table table-bordered table-striped">

                <thead>

                <tr>

                  <th>Section</th>

                  <th>Standard</th>

                  <th>Division</th>

                  <th>Subject</th>

                  <th>Action</th>

                </tr>

                </thead>

                <tbody>

                <?php $__currentLoopData = $subjectmst; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                <tr>

                  <td><?php echo e($post['section']); ?></td>

                  <td><?php echo e($post['standardId']); ?></td>

                  <td><?php echo e($post['division']); ?></td>

                  <td><?php echo e($post['subject']); ?></td>

                  <td> <a href="<?php echo e(action('SubjectController@edit', $post['subjectId'])); ?>" class="#"><i class="fa fa-edit"></i></a> | <a class="#" data-toggle="modal" data-target="#modal-default"><i class="fa fa-remove"></i></a></td>
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
                          <form method="post" action="<?php echo e(action('SubjectController@destroy', $post['subjectId'])); ?>">
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

                  <th>Subject</th>

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

<?php $__env->stopSection(); ?>
<?php echo $__env->make('master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>