<?php include('header.php') ?>
<div class="container">

	<?php echo form_open('http://localhost/codeigniter/login/create_user'); ?>

  <fieldset>
    <legend style="color:#000; font-size: 5rem">User Registration</legend>
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
      <?php echo form_password(['name'=>'password','class'=>'form-control','placeholder'=>'Password','value'=>set_value('password')]); ?>
    </div>
    	</div>
    	<div class="col-lg-8" style="font-size: 1.5rem;">
    		<?php echo form_error('password'); ?>
    	</div>
    </div>

   	<div class="row">
   	<div class="col-lg-6">
    <div class="form-group">
      <label for="exampleInputPassword1" style="font-size: 2.5rem;">Confirm Password</label>
      <?php echo form_password(['name'=>'password1','class'=>'form-control','placeholder'=>'Password','value'=>set_value('password1')]); ?>
    </div>
	</div>
    <div class="col-lg-8" style="font-size: 1.5rem;">
   		<?php echo form_error('password1'); ?>
   	</div>
   	</div>
   	<div class="row">
   	<div class="col-lg-6">
    <div class="form-group">
      <label for="exampleInputEmail1" style="font-size: 2.5rem;">Email address</label>
      <?php echo form_input(['name'=>'email','class'=>'form-control','placeholder'=>'Enter email','value'=>set_value('email')]); ?>
      <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
    </div>
	</div>
    <div class="col-lg-8" style="font-size: 1.5rem;">
   		<?php echo form_error('email'); ?>
   	</div>
   	</div>
   	<div class="row">
   	<div class="col-lg-6">
    <div class="form-group">
      <label for="exampleInputPassword1" style="font-size: 2.5rem;">Mobile Number</label>
      <input type="Mobile" maxlength="10" name="mobno" class="form-control" placeholder="Enter Mobile number" value="<?php echo set_value('mobno'); ?>" >
    </div>
    </div>
    <div class="col-lg-8" style="font-size: 1.5rem;">
   		<?php echo form_error('mobno'); ?>
   	</div>
   	</div>
	<div class="row">
   	<div class="col-lg-6">
    <div class="form-group">
      <label for="exampleSelect1" style="font-size: 2.5rem;">Gender</label>
      <select class="form-control" name="gender" id="exampleSelect1">
        <option value="Male">Male</option>
        <option value="Female">Female</option>
        <option value="Others">Others</option>
      </select>
    </div>
   	</div>
   </div>
    </fieldset>
    <?php 
    	echo form_submit(['name'=>'submit','class'=>'btn btn-primary','value'=>'Register','style'=>'margin-right:10px']), 
    		form_reset(['name'=>'reset','class'=>'btn btn-default','value'=>'Reset','style'=>'margin-right:10px']);
    		?>
    <?php echo anchor('http://localhost/codeigniter/login','Cancel','class="btn btn-primary"'); 
   echo form_close();
   ?>

	</div>



<?php include('footer.php') ?>