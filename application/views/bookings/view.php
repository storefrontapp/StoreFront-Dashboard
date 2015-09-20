<h1>Report <?php echo $order['Pid']; ?></h1>
<ol class="breadcrumb">
  <li><a href="<?php echo base_url(); ?>"><i class="fa fa-dashboard"></i> Dashboard</a></li>
  <li><a href="<?php echo base_url('bookings'); ?>">Reports</a></li>
  <li class="active">View Reports</li>
</ol>
</section>
<section class="content">

	<div class="row">
		<div class="col-md-6 col-md-offset-3">
			<?php if(isset($message) AND $message!=""){ echo $message; } ?>
			<div class="panel panel-primary">
				<div class="panel-heading"><strong>Reports # <?php echo $order['Pid']; ?></strong></div>
				<table class="table table-bordered table-striped">
				<form action="" method="post">
				<input type="hidden" name="sf" value="update_status">
				<tr>
					<td width="150"><strong>Status:</strong></td>
					<td width="200">
						<select name="status" id="status" class="form-control">
							<?php if($order['status']=='Pending'){
								echo '<option value="Pending" selected="selected">Pending</option>
							<option value="Under Review">Under Review</option>
							<option value="Confirmed">Confirmed</option>';
							}elseif($order['status']=='Under Review'){
								echo '<option value="Pending">Pending</option>
							<option value="Under Review" selected="selected">Under Review</option>
							<option value="Confirmed">Confirmed</option>';
							}elseif($order['status']=='Confirmed'){
								echo '<option value="Pending">Pending</option>
							<option value="Under Review">Under Review</option>
							<option value="Confirmed" selected="selected">Confirmed</option>';
							} ?>
						</select>
					</td>
					<td>
						<input type="hidden" name="id" value="<?php echo md5($order['Pid']); ?>">
						<input type="submit" class="btn btn-danger" value="Update Status">
					</td>
				</tr>
				</form>
				<tr>
					<td><strong>Date/Time: </strong></td>
					<td colspan="2"><?php echo $order['date']; ?></td>
				</tr>
				<tr>
					<td><strong>Number: </strong></td>
					<td colspan="2"><?php echo $order['carNumber']; ?></td>
				</tr>
				<tr>
					<td><strong>Name: </strong></td>
					<td colspan="2"><?php echo $order['name']; ?></td>
				</tr>
				<tr>
					<td><strong>Address: </strong></td>
					<td colspan="2"><?php echo $order['address']; ?></td>
				</tr>
				<tr>
					<td><strong>Phone: </strong></td>
					<td colspan="2"><?php echo $order['phone']; ?></td>
				</tr>
				<tr>
					<td><strong>Comments: </strong></td>
					<td colspan="2"><?php echo $order['comment']; ?></td>
				</tr>
			</table>
			</div>
		</div>
	</div>
</section>