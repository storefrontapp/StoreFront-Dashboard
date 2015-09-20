<h1> Edit User </h1>
<ol class="breadcrumb">
  <li><a href="<?php echo base_url(); ?>users"><i class="fa fa-dashboard"></i> Users</a></li>
  <li class="active">Edit</li>
</ol>
</section>
<section class="content">
	<div class="row">
		<div class="col-md-12 form-group"><?php if(isset($error)){ echo $error; } ?></div>
	</div>
	<div class="row">
		<div class="col-md-4 col-md-offset-4">
			<div class="panel panel-default">
				<div class="panel-heading">New User</div>
				<div class="panel-body">
					<form action="" method="post">
						<input type="hidden" name="sf" value="1" />
						<div class="row">
							<div class="col-md-12 form-group">
								<label for="name">Fullname</label>
								<input type="text" name="name" id="name" value="<?php echo $name; ?>" class="form-control" />
							</div>
						</div>
						<div class="row">
							<div class="col-md-12  form-group">
								<label for="password">New Password <span class="text-danger">(if update)</span></label>
								<input type="password" name="password" id="password" value="" class="form-control" />
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
