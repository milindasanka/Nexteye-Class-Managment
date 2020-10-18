<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Next Eye Class Management</title>
  <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>"/>
  <script src="<?php echo base_url('assets/js/jquery-3.1.0.js');?>"></script>
  <script src="<?php echo base_url('assets/js/bootstrap.js');?>"></script>
  <style type="text/css">
    .buttons{
      color: #2196f3;
      border: 1px solid #cadbdb;
      border-radius: 5px;
      padding: 2px 10px 2px 10px; 
    }
  </style>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#"><h1>Next Eye Class Management</h1></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor02" aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarColor02">
    <ul class="navbar-nav mr-auto">
       <div class="tab">
        <?php
        echo $user_id = $this->session->userdata('user_id') ?>
        
        <li><?php echo anchor("admin/dashboard",'Dashboard');?> </li>
        <li><?php echo anchor("welcome/about",'About Us');?> </li>
        <li><?php echo anchor("welcome/contact",'Contact');?> </li>
        <li><?php echo anchor("welcome/logout",'Logout');?> </li>
      
     </div>
            
  </div>
</nav>

</body>
</html>