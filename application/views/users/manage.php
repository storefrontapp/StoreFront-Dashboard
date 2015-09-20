<h1>Manage Users</h1>
<ol class="breadcrumb">
  <li><a href="<?php echo base_url(); ?>users/"><i class="fa fa-dashboard"></i> Users</a></li>
  <li class="active">Manage</li>
</ol>
</section>
<section class="content">
  <div class="row">
  	<div class="col-md-6 col-md-offset-3">
  		<div class="panel panel-default">
  			<div class="panel-heading">Users</div>
  			<table class="table table-bordered table-striped">
  				<thead>
  					<tr>
  						<th width="50">ID</th>
  						<th width="150">Username</th>
  						<th>Name</th>
  						<th width="100">Status</th>
  						<th width="100">Actions</th>
  					</tr>
  				</thead>
  				<tbody>
  					<?php
            if(count($users)==0){
              $html = '<tr><td colspan="5"><div class="alert alert-warning">Users not created yet.</div></td></tr>';
            }else{
              $html = '';
              foreach($users as $user){
                $html .= '<tr>';
                  $html .= '<td>'.$user['id'].'</td>';
                  $html .= '<td>'.$user['username'].'</td>';
                  $html .= '<td>'.$user['name'].'</td>';
                  if($user['status']=='1'){
                    $html .= '<td><a href="'.base_url().'users/deactive/'.md5($user['id']).'" class="label label-success">Active</a></td>';
                  }else{
                    $html .= '<td><a href="'.base_url().'users/active/'.md5($user['id']).'" class="label label-danger">Deactived</a></td>';
                  }
                  $html .= '<td>';
                    $html .= '<a class="btn btn-xs btn-primary" href="'.base_url().'users/edit/'.md5($user['id']).'">Edit</a> ';
                    $html .= '<a class="btn btn-xs btn-danger btn-del" href="'.base_url().'users/delete/'.md5($user['id']).'">Delete</a>';
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
