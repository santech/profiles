<?php echo form_open(uri_string(),array('class'=>'form-horizontal')); ?>
<fieldset>
	<legend>New User Registration</legend>
	<div class="control-group">
    	<label class="control-label" for="inputEmail">First Name</label>
    	<div class="controls">
      		<?php echo form_input($first_name); ?>
    	</div>
  	</div>
  	<div class="control-group">
    	<label class="control-label" for="inputEmail">Last Name</label>
    	<div class="controls">
      		<?php echo form_input($last_name); ?>
    	</div>
  	</div>
  	<div class="control-group">
    	<label class="control-label" for="inputEmail">Email</label>
    	<div class="controls">
      		<?php echo form_input($email); ?>
    	</div>
  	</div>
  	<div class="control-group">
    	<label class="control-label" for="inputEmail">Password</label>
    	<div class="controls">
      		<?php echo form_input($password); ?>
    	</div>
  	</div>
  	<div class="control-group">
    	<label class="control-label" for="inputEmail">Confirm Password</label>
    	<div class="controls">
      		<?php echo form_input($password_confirm); ?>
    	</div>
  	</div>
  	<div class="form-actions">
  		<?php $attribute='class="btn btn-primary"'; echo form_submit('submit','Register',$attribute); ?>
  		<a href="<?php echo site_url('auth/login'); ?>" class="btn btn-info">Already a member? Login</a>
  	</div>
</fieldset>
<?php echo form_close(); ?>