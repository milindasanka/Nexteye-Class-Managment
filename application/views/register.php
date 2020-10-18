<?php include("inc/header.php");?>
<br>
 <div class="container">
 	<?php echo form_open("welcome/adminSignup", ['class' => 'form-horizontal']);?>
 	<?php if($msg = $this->session->flashdata('message')):?>
 		<div class="col-md-6">
 			<div class="alert alert-dismissible alert-success">
 				<?php echo $msg;?>
 			</div>
 		</div>

 	<?php endif;?>
 	<h3>ADMIN REGISTRATION</h3>
 	<hr>
 	<div class="row">
 		<div class="col-md-6">
 			<div class="form-group">
 				<label class="col-md-3 control-label">Username</label>
 				<div class="col-md-9">
 					<?php echo form_input(['name'=>'username','class'=>'form-control','placeholder'=>'Username']);?>
 					
 				</div>
 				
 			</div>
 			
 		</div>
 		<div class="col-md-6">
 		<?php echo form_error('username', '<div class="text-danger">','</div>');?>	

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
 				<label class="col-md-3 control-label">Role</label>
 				<select class="col-lg-9" name="role_id">
 					<option value="">Select</option>
 					<?php if(count($roles)):?>
 						<?php foreach($roles as $role):?>
 					<option value=<?php echo $role->role_id?>><?php echo $role->rolename?></option>
 				<?php endforeach;?>
 				<?php endif;?>
 				</select>
 				
 			</div>
 			
 		</div>
 		<div class="col-md-6">
 			<?php echo form_error('role_id', '<div class="text-danger">','</div>');?>
 	    </div>
 	</div>
<div class="row">
 		<div class="col-md-6">
 			<div class="form-group">
 				<label class="col-md-3 control-label">Password</label>
 				<div class="col-md-9">
 					<?php echo form_password(['name'=>'password','class'=>'form-control','placeholder'=>'Password']);?>
 					
 				</div>
 				
 			</div>
 			
 		</div>
 		<div class="col-md-6">
 			<?php echo form_error('password', '<div class="text-danger">','</div>');?>
 	    </div>
 </div>
 	<div class="row">
 		<div class="col-md-9">
 			<div class="form-group">
 				<label class="col-md-3 control-label">ReType Password</label>
 				<div class="col-md-6">
 					<?php echo form_password(['name'=>'confpwd','class'=>'form-control','placeholder'=>'ReType Password ']);?>
 					
 				</div>
 				
 			</div>
 			
 		</div>
 		<div class="col-md-6">
 			<?php echo form_error('ReType Password', '<div class="text-danger">','</div>');?>
 	    </div>
  </div>

  <button type="submit" class="btn btn-primary">REGISTER</button>
 <?php echo anchor("welcome","BACK", ['class'=>'btn btn-primary']);?>
 </div>
 	<?php echo form_close();  ?>
 </div>
 <br>
<?php include("inc/footer.php");?>