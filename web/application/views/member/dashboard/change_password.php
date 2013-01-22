<div class="page-header">
	<h2>Password</h2>
</div>

<?php
$attr = array(
	'class' => 'form-horizontal'
);

echo form_open('settings/password', $attr);

?>
	<div class="control-group">
		<label class="control-label" for="password">Password</label>
		<div class="controls">
			<input type="password" autocomplete="off" id="current_password" name="current_password" placeholder="Current Password">
			<?php echo form_error('current_password', '<span class="help-inline text-error">', '</span>'); ?>
			<span class="help-block"><a href="/account/forgot_password" >Forgot your password?</a></span>
		</div>
	</div>
	<div class="control-group">
		<label class="control-label" for="password">Password</label>
		<div class="controls">
			<input type="password" autocomplete="off" id="new_password" name="new_password" placeholder="New Password">
			<?php echo form_error('new_password', '<span class="help-inline text-error">', '</span>'); ?>
		</div>
	</div>

	<div class="control-group">
		<label class="control-label" for="passconf">Confirm Password</label>
		<div class="controls">
			<input type="password" name="passconf" placeholder="Confirm Password">
			<?php echo form_error('passconf', '<span class="help-inline text-error">', '</span>'); ?>
		</div>
	</div>
	<div class="control-group">
		<div class="controls">
			<button type="submit" class="btn btn-success">Save Changes</button>
		</div>
	</div>
</form>