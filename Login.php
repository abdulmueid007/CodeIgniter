<?php include('header.php') ?>
<div class="container">
	
	<?php echo form_open('http://localhost/codeigniter/login/admin_login'); ?>

  <fieldset>
  	<?php if(isset($account_created)) { ?>
    <legend style="color:#000; font-size: 5rem"><?php echo $account_created;  ?></legend>
    	<?php } else { ?>
    	<legend style="color:#000; font-size: 5rem">Login Please.</legend>
    	<?php } ?>
   <div class="row">
   	<div class="col-lg-6">
   		<div class="form-group">
      <label for="exampleInputEmail1" style="font-size: 2.5rem;">User Name</label>
      <?php echo form_input(['name'=>'username','class'=>'form-control','placeholder'=>'Enter User Name','value'=>set_value('username')]); ?>
          </div>
   	</div> 
   	<div class="col-lg-8" style="font-size: 1.5rem;">
   		<?php echo form_error('username'); ?>
   	</div>
   </div>
    <div class="row">
    	<div class="col-lg-6">
    		<div class="form-group">
      <label for="exampleInputPassword1" style="font-size: 2.5rem;">Password</label>
      <?php echo form_password(['name'=>'password','class'=>'form-control','placeholder'=>'Password']); ?>
    </div>
    	</div>
    	<div class="col-lg-8" style="font-size: 1.5rem;">
    		<?php echo form_error('password'); ?>
    	</div>
    </div>
    
    </fieldset>    
    	<?php 
    	echo form_submit(['name'=>'submit','class'=>'btn btn-primary','value'=>'Login','style'=>'margin-right:10px']), 
    		form_reset(['name'=>'reset','class'=>'btn btn-default','value'=>'Reset']);
    		?>


   <label style="font-size: 2rem;margin-left: 280px ">New User?</label>
   <?php echo anchor('http://localhost/codeigniter/login/user_register','Register','class="btn btn-primary"'); 
   echo form_close();
 ?>
     
   	
   
 	
	
	

<?php include('footer.php') ?>
	





