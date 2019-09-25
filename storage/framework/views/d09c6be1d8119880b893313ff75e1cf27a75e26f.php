<?php $__env->startSection('content'); ?>

<div class="content-wrapper">

	<!-- content header (page header) -->

	<section class="content-header">

		<h1>Create Services</h1>

	</section>

	<!-- main content -->

	<section class="content">

    <form method="post" action="<?php echo e(action('DiscountController@update', $id)); ?>" enctype='multipart/form-data'>

    <?php echo e(csrf_field()); ?>


			 <input name="_method" type="hidden" value="PATCH">

		<!--select2 example -->

		<div class="box box-default">

			<div class="box-body">

				<div class="row">

					<div class="col-md-4">

						<div class="form-group">

							<label>Title</label><br>

							<input type="text" name="title" value="<?php echo e($discount->title); ?>" class="form-control" style="width:100%;" >

						</div>

					</div>
					<div class="col-md-4">

						<div class="form-group">

							<label>Percentage</label><br>

							<input type="text" name="percentage" required class="form-control" value="<?php echo e($discount->percentage); ?>" style="width:100%;" >

						</div>

					</div>
					<div class="col-md-4">

						<div class="form-group">

							<label>Condition</label><br>
							<select name="condition" class="form-control" style="width:100%;">
							<option  value="">please select</option>
							<option <?php if($discount->condition =='<'): ?> selected=select" <?php endif; ?> value="<"> < </option>
							<option <?php if($discount->condition =='>'): ?> selected=select" <?php endif; ?> value=">"> > </option>
							</select>
							

						</div>

					</div>
					<div class="col-md-4">

						<div class="form-group">

							<label>Age</label><br>

							<input type="number"  min="1" max="100" value="<?php echo e($discount->age); ?>" name="age" class="form-control" style="width:100%;" >

						</div>

					</div>
					<div class="col-md-4">

						<div class="form-group">

							<label>From</label><br>

							<input type="date" name="from" value="<?php echo e($discount->from); ?>" class="form-control" style="width:100%;" >

						</div>

					</div>
					<div class="col-md-4">

						<div class="form-group">

							<label>to</label><br>

							<input type="date" name="to" value="<?php echo e($discount->to); ?>" class="form-control" style="width:100%;" >

						</div>

					</div>

					

				</div>			

			</div>

			<div class="box-body">

				<div class="row">

					<div class="col-lg-2">

							<input type="submit" class="btn btn-primary btn-block btn-flat">

					</div>

				

                    <div class="col-lg-2">

					<button type="remove" class="btn btn-success btn-block btn-flat"><a href="<?php echo e(URL::previous()); ?>">Cancel</a></button>

					</div>

				</div>

			</div>

		</div>

        </form>

	</section>

  

	<!-- content header (page header) -->

	<section class="content-header">

		<h1>Search Discount</h1>

    </section>

  <!-- Main content -->

    <section class="content">

      <div class="row">

        <div class="col-xs-12">

          <div class="box">

            <div class="box-header">

              <h3 class="box-title">Discount Search result column</h3>

            </div>

            <!-- /.box-header -->

            <div class="box-body">

              <table id="example1" class="table table-bordered table-striped">

                <thead>

                <tr>

                  <th>Id</th>

                  <th>Title</th>
                  <th>Percentage</th>
                  <th>Condition</th>
                  <th>Age</th>
                  <th>From</th>
                  <th>To</th>

                  <th>Action</th>

                </tr>

                </thead>

                <tbody>

                <?php $__currentLoopData = $discountmst; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                <tr>

                  <td><?php echo e($post['id']); ?></td>

                  <td><?php echo e($post['title']); ?></td>
                  <td><?php echo e($post['percentage']); ?></td>
                  <td><?php echo e($post['condition']); ?></td>
                  <td><?php echo e($post['age']); ?></td>
                  <td><?php echo e($post['from']); ?></td>
                  <td><?php echo e($post['to']); ?></td>

                  <td> <a href="<?php echo e(action('DiscountController@edit', $post['id'])); ?>" class="#"><i class="fa fa-edit"></i></a> | <a class="#" data-toggle="modal" data-target="#modal-default-<?php echo e($post['id']); ?>"><i class="fa fa-remove"></i></a></td>

                </tr>
                <div class="modal fade" id="modal-default-<?php echo e($post['id']); ?>">
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
                          <form method="post" action="<?php echo e(action('DiscountController@destroy', $post['id'])); ?>">
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

                 <th>Id</th>

                  <th>Title</th>
                  <th>Percentage</th>
                  <th>Condition</th>
                  <th>Age</th>
                  <th>From</th>
                  <th>To</th>

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