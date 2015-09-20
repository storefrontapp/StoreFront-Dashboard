<h1>Manage Users</h1>
<ol class="breadcrumb">
  <li><a href="<?php echo base_url(); ?>cars/"><i class="fa fa-dashboard"></i> Cars</a></li>
  <li class="active">Shop Inventory</li>
</ol>
</section>
<section class="content">
  <div class="row">
  	<div class="col-md-8 col-md-offset-2">
  		<div class="panel panel-default">
  			<div class="panel-heading">Cars</div>
  			<table class="table table-bordered table-striped">
  				<thead>
  					<tr>
              <th width="120">Image</th>
  						<th width="150">Item</th>
  						<th>Number</th>
  						<th width="100">Code Name<small></small></th>
  						<th width="100">Status</th>
              <th width="100">Action</th>
  					</tr>
  				</thead>
  				<tbody>
  					<?php
            if(count($cars)){
              $html = '';
              foreach($cars as $car){
                $html .= '<tr>';
                  $html .= '<td><img src="'.base_url().'uploads/'.$car['taxiImg'].'" width="100" height="100" style="border-radius:100px;" alt=""></td>';
                  $html .= '<td>'.$car['taxinum'].'</td>';
                  $html .= '<td>'.$car['driverNum'].'</td>';
                  $html .= '<td>'.$car['rent'].'</td>';
                  if($car['availability']=='Available'){
                    $html .= '<td><span  class="label label-success">Available</span></td>';
                  }elseif($car['availability']=='Not Available'){
                    $html .= '<td><span  class="label label-danger">Not Available</span></td>';
                  }elseif($car['availability']=='Pending'){
                    $html .= '<td><span  class="label label-warning">Pending</span></td>';
                  }
                  $html .= '<td>
                    <a href="'.base_url().'cars/edit/'.md5($car['taxinum']).'" class="btn btn-primary btn-xs">Edit</a>
                     <a href="'.base_url().'cars/delete/'.md5($car['taxinum']).'" class="btn btn-danger btn-xs btn-del">Delete</a>
                  </td>';
                $html .= '</tr>';
              }
              echo $html;
            }
            ?>
  				</tbody>
  			</table>
  		</div>
  	</div>
  </div>
</div>
