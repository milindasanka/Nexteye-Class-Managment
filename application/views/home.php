<?php include("inc/header.php");?><br>
<div class="container">
	<br>
	<div class="jumbotron">
		<h1 class="display-3" style="text-align: center;">ADMIN & CO ADMIN LOGIN</h1>
        <hr>
        <div class="my-4">
        	<div class="row">
                
                    <div class="col-lg-4" style="text-align: center;">
                    <?php echo anchor("welcome/adminRegister","ADMIN REGISTER", ['class'=>'btn btn-primary']);?>
                </div>
           
        		<div class="col-lg-4" style="text-align: center;">
        			<?php echo anchor("welcome/login","ADMIN LOGIN",['class'=>'btn btn-primary']);?>
        		</div>
        	</div>
        	
        </div>
	</div>	
</div>
<br><br><br><br><br>

<?php include("inc/footer.php");?>