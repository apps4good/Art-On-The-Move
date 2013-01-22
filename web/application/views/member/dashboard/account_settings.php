<div class="page-header">
	<h2>Account</h2>
</div>

<script type="text/javascript" >
	$(document).ready(function() {
		$('#email').popover({
			trigger: 'focus',
			title: 'New Email?',
			content: 'If you change you email address, '
				+ 'the change will be made once the new email address has been confirmed.'
		});
	});
</script>

<?php
$attr = array(
	'class' => 'form-horizontal'
);

echo form_open('settings/account', $attr);

?>
	<div class="control-group">
		<label class="control-label" for="name">Full Name</label>
		<div class="controls">
			<input type="text" name="name" value="<?php echo set_value('name', $user->fullname); ?>" placeholder="Full Name">
			<?php echo form_error('name', '<span class="help-inline text-error">', '</span>'); ?>
		</div>
	</div>
	<div class="control-group" id="email-group">
		<label class="control-label" for="email">Email</label>
		<div class="controls">
			<input type="text" id="email" name="email" value="<?php echo set_value('email', $user->email); ?>" placeholder="Email">
			<?php echo form_error('email', '<span class="help-inline text-error">', '</span>'); ?>
		</div>
	</div>
	<div class="control-group">
		<label class="control-label" for="password">Gender</label>
		<div class="controls">
			<select name="gender">
				<?php
				if($user->gender == "Female")
				{
					echo '<option value="Male">Male</option>';
					echo '<option value="Female" selected="selected">Female</option>';
				} else {
					echo '<option value="Male">Male</option>';
					echo '<option value="Female">Female</option>';
				}
				?>
			</select>
		</div>
	</div>
	<div class="control-group">
		<div class="controls">
			<button type="submit" class="btn btn-success">Save Changes</button>
		</div>
	</div>
</form>