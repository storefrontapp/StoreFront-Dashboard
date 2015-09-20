<h1>Dashboard </h1>
<ol class="breadcrumb">
  <li><a href="<?php echo base_url(); ?>cars/"><i class="fa fa-dashboard"></i> Cars</a></li>
  <li class="active">Edit Items</li>
</ol>
</section>
<section class="content">
  <div class="row">
  	<div class="col-md-12">
  		<?php if(isset($error)){ echo $error; } ?>
  	</div>
  </div>

  <form action="" method="post"  enctype="multipart/form-data">
  <input type="hidden" name="sf" value="1">
  <div class="row">
  	<div class="col-md-12">
  		<div class="panel panel-default">
  			<div class="panel-heading">Edit Items</div>
  			<div class="panel-body">
  				<div class="row">
  					<div class="col-md-12">
  						<h3>Inventory</h3> <hr>
  						<div class="row">
  							<div class="col-md-3 form-group">
  								<label for="car_number">Item<span class="req">*</span></label>
								<input type="text" disabled="disabled" class="form-control" name="car_number" id="car_number" value="<?php echo $car['taxinum']; ?>">
  							</div>
  							<div class="col-md-3 form-group">
  								<label for="driver_phone">Phone Number <span class="req">*</span></label>
								<input type="text" class="form-control" name="driver_phone" id="driver_phone" value="<?php echo $car['driverNum']; ?>">
  							</div>
  							<div class="col-md-3 form-group">
  								<label for="image">Image <span class="req">*</span></label>
								<input type="file" class="form-control" name="image" id="image" value="">
  							</div>
  							<div class="col-md-3 form-group">
  								<label for="fare_price">Price<small></small> <span class="req">*</span></label>
								<input type="text" class="form-control" name="fare_price" id="fare_price" value="<?php echo $car['rent']; ?>">
  							</div>
  						</div>
  						<div class="row">
  							<div class="col-md-6 form-group">
  								<label for="address1">Address Line 1</label>
  								<input type="text" class="form-control" name="address1" id="address1" value="<?php echo $car['address']; ?>">
  							</div>
  						</div>
  						<div class="row">
  							<div class="col-md-3 form-group">
  								<label for="city">City <span class="req">*</span></label>
								<input type="text" class="form-control" name="city" id="city" value="<?php echo $car['city']; ?>">
  							</div>
  							<div class="col-md-3 form-group">
  								<label for="state">State <span class="req">*</span></label>
								<input type="text" class="form-control" name="state" id="state" value="<?php echo $car['state']; ?>">
  							</div>
  							<div class="col-md-3 form-group">
  								<label for="email">Email <span class="req">*</span></label>
								<input type="text" class="form-control" name="email" id="email" value="<?php echo $car['email']; ?>">
  							</div>
  							<div class="col-md-3 form-group">
  								<label for="status">Status <span class="req">*</span></label>
								<select name="status" id="status" class="form-control combo" data-value="<?php echo $car['availability']; ?>">
									<?php if($car['availability']=='Available'){
                    echo '<option value="Available" selected="selected">Available</option>
                  <option value="Not Available">Not Available</option>
                  <option value="Pending">Pending</option>';
                  }elseif($car['availability']=='Not Available'){
                    echo '<option value="Available">Available</option>
                  <option value="Not Available"  selected="selected">Not Available</option>
                  <option value="Pending">Pending</option>';
                  }elseif($car['availability']=='Pending'){
                    echo '<option value="Available">Available</option>
                  <option value="Not Available">Not Available</option>
                  <option value="Pending"  selected="selected">Pending</option>';
                  } ?>
								</select>
  							</div>
  						</div>
              <div class="row">
                <div class="col-md-12 form-group">
                  <label for="description">Description</label>
                  <textarea name="description" id="description" class="form-control" rows="5"><?php echo $car['any_other_desc']; ?></textarea>
                </div>
              </div>
  						<h3>Availability Dates</h3> <hr>
  						<div class="row">
  							<div class="col-md-3 form-group">
  								<label for="start_date">Start Date <span class="req">*</span></label>
								<input type="text" class="form-control datepicker" name="start_date" id="start_date" value="<?php echo $car['start_date']; ?>">
  							</div>
  							<div class="col-md-3 form-group">
  								<label for="start_time">Start Time <span class="req">*</span></label>
								<input type="text" class="form-control" name="start_time" id="start_time" value="<?php echo $car['start_time']; ?>">
  							</div>
  							<div class="col-md-3 form-group">
  								<label for="end_date">End Date <span class="req">*</span></label>
								<input type="text" class="form-control datepicker" name="end_date" id="end_date" value="<?php echo $car['end_date']; ?>">
  							</div>
  							<div class="col-md-3 form-group">
  								<label for="end_time">End Time  <span class="req">*</span></label>
								<input type="text" class="form-control" name="end_time" id="end_time" value="<?php echo $car['end_time']; ?>">
  							</div>
  						</div>
  						<div class="row">
  							<div class="col-md-3">
  								<input type="submit" class="btn btn-success" value="Submit">
  							</div>
  						</div>
  					</div>
  				</div>
  			</div>
  		</div>
  	</div>
  </div>
  </form>
</div>
