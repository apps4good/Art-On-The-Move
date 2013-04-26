<div class="row">
<form class="form-horizontal" action="<?php echo site_url('register'); ?>" method="POST">
	<legend>Register</legend>
	<div style="margin: auto;">
	<div class="control-group">
		<label class="control-label" for="name">Full Name</label>
		<div class="controls">
			<input type="text" id="name" placeholder="Full Name" name="name">
			<?php echo form_error('name', '<span class="help-inline" class="text-error">', '</span>'); ?>
		</div>
	</div>
	<div class="control-group">
		<label class="control-label" for="email">Email</label>
		<div class="controls">
			<input type="text" id="email" placeholder="Email" name="email">
			<?php echo form_error('email', '<span class="help-inline" class="text-error">', '</span>'); ?>
		</div>
	</div>
	<div class="control-group">
		<label class="control-label" for="password">Password</label>
		<div class="controls">
			<input type="password" id="password" placeholder="Password" name="password">
			<?php echo form_error('password', '<span class="help-inline" class="text-error">', '</span>'); ?>
		</div>
	</div>
	<div class="control-group">
		<label class="control-label" for="userType">I am</label>
		<div class="controls">
		<select name="userType" id="userType">
			<option value="1">an Artist</option>
			<option value="2">an Art Lover</option>
		</select>
		</div>
	</div>
	<div class="control-group">
		<div class="controls">
			<button type="submit" name="register" class="btn">Register</button>
		</div>
	</div>
	</div>
</form>
</div>