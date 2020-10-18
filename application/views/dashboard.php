<?php include("inc/header.php");?> <br>
<div class="container">
	<h3>TEACHERS DASHBOARD</h3>
	<?php $username = $this->session->userdata('username');?>
	<h5>Welcome <?php echo $username;?></h5>
	<?php echo anchor("admin/addCollege" , "ADD CLASS", ['class'=>'btn btn-primary']);?>
	<?php echo anchor("admin/addCoadmin" , "ADD TEACHER", ['class'=>'btn btn-primary']);?>
	<?php echo anchor("admin/addStudent" , "ADD STUDENT", ['class'=>'btn btn-primary']);?>	
	<hr>
	<div class="row">
		<table class="table table-hover">
			<thead>
				<tr>
					<th scope="col">ID</th>
					<th scope="col">Class Name</th>
					<th scope="col">Username</th>
					<th scope="col">Email</th>
					<th scope="col">Role</th>
					<th scope="col">Gender</th>
					<th scope="col">Branch</th>
					<th scope="col">Action</th>
				</tr>
			</thead>
			<tbody>
				<?php if(count($users)):?>
					<?php foreach($users as $user):?>
				<tr class="table-active">
					<td><?php echo $user->user_id;?></td>
					<td><?php echo $user->collegename;?></td>
					<td><?php echo $user->username;?></td>
					<td><?php echo $user->email;?></td>
					<td><?php echo $user->rolename;?></td>
					<td><?php echo $user->gender;?></td>
					<td><?php echo $user->branch;?></td>
					<td><?php echo anchor("admin/viewStudents/{$user->college_id}", "View Students", ['class'=>'buttons']);?>	
				</td>
				</tr>
			<?php endforeach;?>
				<?php else:?>
					<tr>
						<td>No Record Found!</td>
					</tr>
				<?php endif;?>
			</tbody>
		</table>
		
	</div>
</div>
<br>
<br>
<br>


<?php include("inc/footer.php");?>