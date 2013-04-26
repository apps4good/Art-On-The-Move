<script type="text/javascript">
	$(document).ready(function() {
		$('.edit-info, #hide-edit').hide();

		$('#edit-basic-info').click(function() {
			$('span.user-info').hide();
			$('.edit-info').show();
			$(this).hide();
			$('#hide-edit').show();
		});

		$('#hide-edit').click(function() {
			$('span.user-info').show();
			$('.edit-info').hide();
			$(this).hide();
			$('#edit-basic-info').show();
		});
	});
</script>
<section>
<div class="page-header">
	<?php
	if ($this -> sess_uid == $user -> uid) {
		echo '<h4 class="pull-right" id="edit-basic-info"><a href="#" >Edit</a></h4>';
		echo '<h4 class="pull-right" id="hide-edit"><a href="#" >Done Editing</a></h4>';
		
	}
	?>
	<h2>Basic Info</h2>
</div>
<form action="<?php echo site_url('artist/profile/edit/basic'); ?>" id="basic-info-form" method="post">
<dl class="dl-horizontal">
	<dt>Gender</dt>
	<dd>
		<span class="user-info"><?php echo $user -> gender; ?></span>
		<?php
			$options = array('Male' => 'Male', 'Female' => 'Female');
			echo form_dropdown('gender', $options, $user->gender, 'class=edit-info');
		?>
	</dd>
</dl>

<dl class="dl-horizontal">
	<dt>About me</dt>
	<dd>
		<span class="user-info"><?php echo $user -> about; ?></span>
		<textarea name="about" class="edit-info"><?php echo $user->about; ?></textarea>
	</dd>
	<dd>
		<input type="submit" name="submit" value="Save" class="btn edit-info" />
	</dd>
</dl>
</form>
</section>

<section>
<div class="page-header">
	<?php
	if ($this -> sess_uid == $user -> uid) {
		echo '<h4 class="pull-right"><a href="#" >edit</a></h4>';
	}
	?>
	<h2>Contact Info</h2>
</div>

<dl class="dl-horizontal">
	<dt>Email</dt>
	<dd><?php echo $user -> email; ?></dd>
</dl>

<dl class="dl-horizontal">
	<dt>Address</dt>
	<dd><?php echo $user -> street_addr; ?></dd>
</dl>

<dl class="dl-horizontal">
	<dt>City</dt>
	<dd><?php echo $user -> city; ?></dd>
</dl>

<dl class="dl-horizontal">
	<dt>Region</dt>
	<dd><?php echo $user -> region_name; ?></dd>
</dl>

</section>

<section>
<div class="page-header">
	<?php
	if ($this -> sess_uid == $user -> uid) {
		echo '<h4 class="pull-right"><a href="#" >edit</a></h4>';
	}
	?>
	<h2>My Work</h2>
</div>

<dl class="dl-horizontal">
	<dt>Category</dt>
	<dd>
		<?php
			foreach ($categs as $categ) {
				if ($categ != $categs[count($categs) - 1]) {
					echo $categ->categ_name . ', ';
				} else {
					echo $categ->categ_name;
				}
			}
		?>
	</dd>
</dl>

<dl class="dl-horizontal">
	<dt>Specialty</dt>
	<dd>
		<?php
		foreach ($tags as $tag) {
			if ($tag != $tags[count($tags) - 1]) {
				echo $tag -> tag . ', ';
			} else {
				echo $tag -> tag;
			}
		}
		?>
	</dd>
</dl>

</section>