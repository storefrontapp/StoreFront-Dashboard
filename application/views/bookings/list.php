<h1>All Reports</h1>
<ol class="breadcrumb">
  <li><a href="<?php echo base_url(); ?>"><i class="fa fa-dashboard"></i>Dashboard</a></li>
  <li class="active">Reports</li>
</ol>
</section>
<section class="content">
  <div class="row">
  	<div class="col-md-10 col-md-offset-1">
  		<div class="panel panel-default">
  			<div class="panel-heading">Inventory</div>
  			<table class="table table-bordered table-striped">
  				<thead>
  					<tr>
  						<th width="75">Name</th>
  						<th>Name</th>
  						<th width="150">Name (2)</th>
  						<th width="150">Item</th>
  						<th width="150">Actions</th>
  					</tr>
  				</thead>
  				<tbody>
  					<?php
		            if(count($orders)==0){
		              $html = '<tr><td colspan="5"><div class="alert alert-warning">Orders not created yet.</div></td></tr>';
		            }else{
		              $html = '';
		              foreach($orders as $order){
		                $html .= '<tr>';
		                  $html .= '<td>'.$order['carNumber'].'</td>';
		                  $html .= '<td>'.$order['name'].'</td>';
		                  $html .= '<td>'.$order['phone'].'</td>';
		              		if($order['status']=='Confirmed'){
		                  	$html .= '<td><div class="label label-success"><i class="fa fa-check"></i> Confirmed</div></td>';
		                  }elseif($order['status']=='Pending'){
		                  	$html .= '<td><div class="label label-warning"><i class="fa fa-spinner"></i> Pending</div></td>';
		                  }elseif($order['status']=='Under Review'){
		                  	$html .= '<td><div class="label label-primary"><i class="fa fa-binoculars"></i> Under Review</div></td>';
		                  }
		                  $html .= '<td>';
		                    $html .= '<a class="btn btn-xs btn-primary" href="'.base_url().'bookings/view/'.md5($order['Pid']).'"><i class="fa fa-search"></i> View</a> ';
		                    $html .= '<a class="btn btn-xs btn-danger btn-del" href="'.base_url().'bookings/delete/'.md5($order['Pid']).'"><i class="fa fa-trash" ></i> Delete</a>';
		                  $html .= '</td>';
		                $html .= '</tr>';
		              }
		            }
		            echo $html;
		            ?>
  				</tbody>
  			</table>
  		</div>
  	</div>
  </div>
</div>
