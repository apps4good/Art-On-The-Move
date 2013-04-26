<div class="row">
<form class="form-horizontal" action="<?php echo site_url('login'); ?>" method="post">
	<legend>Login</legend>
	<div class="control-group">
		<label class="control-label" for="inputEmail">Email</label>
		<div class="controls">
			<input type="text" name="email" id="inputEmail" placeholder="Email">
			<?php echo form_error('email', '<span class="help-inline text-error">', '</span>'); ?>
		</div>
	</div>
	<div class="control-group">
		<label class="control-label" for="inputPassword">Password</label>
		<div class="controls">
			<input type="password" name="password" id="inputPassword" placeholder="Password">
			<?php echo form_error('password', '<span class="help-inline text-error">', '</span>'); ?>
		</div>
	</div>
	<div class="control-group">
		<div class="controls">
			<button type="submit" name="login" class="btn">Sign in</button>
		</div>
	</div>
</form>
</div>