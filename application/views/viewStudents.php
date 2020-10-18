<?php include("inc/header.php");?> <br>
<div class="container">
	<h3>VIEW STUDENTS</h3>
		
	<hr>
	

	<div class="row">
		<table class="table table-hover">
			<thead>
				<tr>
					
					<th scope="col">Student Name</th>
					<th scope="col">Class Name</th>
					<th scope="col">Subject</th>
					<th scope="col">Email</th>
					<th scope="col">Gender</th>
					<th scope="col">Action</th>
				</tr>
			</thead>
			<tbody>
				<?php if(count($students)):?>
					<?php foreach($students as $student):?>
				<tr class="table-active">
					<td><?php echo $student->studentname;?></td>
					<td><?php echo $student->collegename;?></td>
					<td><?php echo $student->course;?></td>
					<td><?php echo $student->email;?></td>
					<td><?php echo $student->gender;?></td>
					
					<td><?php echo anchor("admin/deleteStudent/{$student->id}", "Delete", ['class'=>'buttons']);?>	
				</td>
				</tr>
			<?php endforeach;?>
				<?php else:?>
					<tr>
						<td>No Record Found!</td>
					</tr>
				<?php endif;?>
			</tbody>
		</table> <hr>
		<?php echo anchor("admin/dashboard" , "Back", ['class'=>'btn btn-primary']);?><br>
	</div>
</div>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<?php include("inc/footer.php");?>