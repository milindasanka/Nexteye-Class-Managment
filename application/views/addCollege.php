<?php include("inc/header.php");?>
<br>
<div class="container">
 	<?php echo form_open("admin/createCollege", ['class' => 'form-horizontal']);?>
 	<?php if($msg = $this->session->flashdata('message')):?>
 		<div class="row">
 		<div class="col-md-6">
 			<div class="alert alert-dismissible alert-success">
 				<?php echo $msg;?>
 			</div>
 		</div>

</div>
 	<?php endif;?>
 	<h3>ADD CLASS</h3>
 	<hr>
 	
 	<div class="row">
 		<div class="col-md-6">
 			<div class="form-group">
 				<label class="col-md-3 control-label">CLASS Name</label>
 				<div class="col-md-9">
 					<?php echo form_input(['name'=>'collegename','class'=>'form-control','placeholder'=>'College Name', 'value'=>set_value('collegename')]);?>
 					
 				</div>
 				
 			</div>
 			
 		</div>
 		<div class="col-md-6">
 			<?php echo form_error('', '<div class="text-danger">','</div>');?>
 	    </div>
 	</div>

    
<div class="row">
 		<div class="col-md-6">
 			<div class="form-group">
 				<label class="col-md-3 control-label">Branch</label>
 				<div class="col-md-9">
 					<?php echo form_input(['name'=>'branch','class'=>'form-control','placeholder'=>'Branch']);?>
 					
 				</div>
 				
 			</div>
 			
 		</div>
 		<div class="col-md-6">
 			<?php echo form_error('branch', '<div class="text-danger">','</div>');?>
 	    </div>
 </div>
 

  <button type="submit" class="btn btn-primary">ADD</button>
 <?php echo anchor("admin/dashboard","BACK", ['class'=>'btn btn-primary']);?>
 </div>
 	<?php echo form_close();  ?>
 </div>
 <br>
<?php include("inc/footer.php");?>