 <?php include("inc/header.php");?>
<br>
 <div class="container">
 	<?php echo form_open("admin/createStudent", ['class' => 'form-horizontal']);?>
 	<?php if($msg = $this->session->flashdata('message')):?>
 		<div class="col-md-6">
 			<div class="alert alert-dismissible alert-success">
 				<?php echo $msg;?>
 			</div>
 		</div>

 	<?php endif;?>
 	<h3>ADD STUDENT</h3>
 	<hr>
 	<div class="row">
 		<div class="col-md-6">
 			<div class="form-group">
 				<label class="col-md-3 control-label">Student Name</label>
 				<div class="col-md-9">
 					<?php echo form_input(['name'=>'studentname','class'=>'form-control','placeholder'=>'Student name']);?>
 					
 				</div>
 				
 			</div>
 			
 		</div>
 		<div class="col-md-6">
 		<?php echo form_error('studentname', '<div class="text-danger">','</div>');?>	

 	    </div>
 	</div>

 <div class="row">
 		<div class="col-md-6">
 			<div class="form-group">
 				<label class="col-md-3 control-label">Class Name</label>
 				<select class="col-lg-9" name="college_id">
 					<option value="">Select</option>
 					<?php if(count($colleges)):?>
 						<?php foreach($colleges as $college):?>
 					<option value=<?php echo $college->college_id?>><?php echo $college->collegename?></option>
 				<?php endforeach;?>
 				<?php endif;?>
 				</select>
 				
 			</div>
 			
 		</div>
 		<div class="col-md-6">
 			<?php echo form_error('', '<div class="text-danger">','</div>');?>
 	    </div>
 	</div>



 	<div class="row">
 		<div class="col-md-6">
 			<div class="form-group">
 				<label class="col-md-3 control-label">Email</label>
 				<div class="col-md-9">
 					<?php echo form_input(['name'=>'email','class'=>'form-control','placeholder'=>'Email']);?>
 					
 				</div>
 				
 			</div>
 			
 		</div>
 		<div class="col-md-6">
 			<?php echo form_error('email', '<div class="text-danger">','</div>');?>
 	    </div>
 	</div>

    <div class="row">
 		<div class="col-md-6">
 			<div class="form-group">
 				<label class="col-md-3 control-label">Gender</label>
 				<select class="col-md-9" name="gender">
 					<option value="">Select</option>
 					<option value="Male">Male</option>
 					<option value="Female">Female</option>
 				</select>
 				
 			</div>
 			
 		</div>
 		<div class="col-md-6">
 			<?php echo form_error('gender', '<div class="text-danger">','</div>');?>
 	    </div>
 	</div>

 <div class="row">
 		<div class="col-md-6">
 			<div class="form-group">
 				<label class="col-md-3 control-label">Subject</label>
 				<div class="col-md-9">
 					<?php echo form_input(['name'=>'','class'=>'form-control','placeholder'=>'Course']);?>
 					
 				</div>
 				
 			</div>
 			
 		</div>
 		<div class="col-md-6">
 		<?php echo form_error('', '<div class="text-danger">','</div>');?>	

 	    </div>
 	</div>


  <button type="submit" class="btn btn-primary">ADD</button>
 <?php echo anchor("admin/dashboard","BACK", ['class'=>'btn btn-primary']);?>
 </div>
 	<?php echo form_close();  ?>
 </div>
 <br>
<?php include("inc/footer.php");?>