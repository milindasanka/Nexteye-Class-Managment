<?php include("inc/header.php");?>

<div class="container">
    <?php echo form_open("welcome/sendcontact", ['class' => 'form-horizontal']);?>
    <?php if($msg = $this->session->flashdata('message')):?>
        <div class="col-md-6">
            <div class="alert alert-dismissible alert-success">
                <?php echo $msg;?>
            </div>
        </div>

    <?php endif;?>


<!--Section: Contact v.2-->
<section class="mb-4">

    <!--Section heading-->
    <h2 class="h1-responsive font-weight-bold text-center my-4">Contact us</h2>
    <!--Section description-->
    <p class="text-center w-responsive mx-auto mb-5">Do you have any questions? Please do not hesitate to contact us directly.</p>
<div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label class="col-md-3 control-label">Your Name</label>
                <div class="col-md-9">
                    <?php echo form_input(['name'=>'contactname','class'=>'form-control','placeholder'=>'Your Name']);?>
                    
                </div>
                
            </div>
            
        </div>
        <div class="col-md-6">
        <?php echo form_error('contactname', '<div class="text-danger">','</div>');?>   

        </div>
    </div>

<div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label class="col-md-3 control-label">Your Email</label>
                <div class="col-md-9">
                    <?php echo form_input(['name'=>'contactemail','class'=>'form-control','placeholder'=>'Your Email']);?>
                    
                </div>
                
            </div>
            
        </div>
        <div class="col-md-6">
        <?php echo form_error('contactemail', '<div class="text-danger">','</div>');?>   

        </div>
    </div>

<div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label class="col-md-3 control-label">Subject</label>
                <div class="col-md-9">
                    <?php echo form_input(['name'=>'subject','class'=>'form-control','placeholder'=>'Subject']);?>
                    
                </div>
                
            </div>
            
        </div>
        <div class="col-md-6">
        <?php echo form_error('subject', '<div class="text-danger">','</div>');?>   

        </div>
    </div>    

<div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label class="col-md-3 control-label">Message</label>
                <div class="col-md-12">
                    <?php echo form_input(['name'=>'message','class'=>'form-control','placeholder'=>'Message']);?>
                    
                </div>
                
            </div>
            
        </div>
        <div class="col-md-6">
        <?php echo form_error('message', '<div class="text-danger">','</div>');?>   

        </div>
    </div>     
<div class="col-md-6">
<button type="submit" class="btn btn-primary">SEND</button>
<?php echo anchor("admin/dashboard","BACK", ['class'=>'btn btn-primary']);?>
</div>    
</section>

<!--Section: Contact v.2-->
</div><?php include("inc/footer.php");?>