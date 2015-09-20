<h1> Change Password </h1>
<ol class="breadcrumb">
  <li><a href="<?php echo base_url(); ?>"><i class="fa fa-dashboard"></i> Dashboard</a></li>
  <li class="active">Change Password</li>
</ol>
</section>
<section class="content">
	<div class="row">
		<div class="col-md-12 form-group"><?php if(isset($error)){ echo $error; } ?></div>
	</div>
	<div class="row">
		<div class="col-md-4 col-md-offset-4">
			<div class="panel panel-default">
				<div class="panel-heading">Change Password</div>
				<div class="panel-body">
					<form action="" method="post">
						<input type="hidden" name="sf" value="1" />
						<div class="row">
							<div class="col-md-12 form-group">
								<label for="pass1">Current Password</label>
								<input type="password" name="pass1" id="pass1" value="" class="form-control" />
							</div>
						</div>
						<div class="row">
							<div class="col-md-12  form-group">
								<label for="pass2">New Password</label>
								<input type="password" name="pass2" id="pass2" value="" class="form-control" />
							</div>
						</div>
						<div class="row">
							<div class="col-md-12  form-group">
								<label for="pass3">Retype Password</label>
								<input type="password" name="pass3" id="pass3" value="" class="form-control" />
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<input type="submit" class="btn btn-danger btn-block">
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
