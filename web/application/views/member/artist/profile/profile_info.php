<script type="text/javascript">
	$(document).ready(function() {
		$('select#edit-info, input#edit-info').hide();

		$('#edit-basic-info').click(function() {
			$('span#user-info').toggle();
			$('select#edit-info, input#edit-info').toggle();
		});
	});
</script>
<section>
<div class="page-header">
	<?php
	if ($this -> sess_uid == $user -> uid) {
		echo '<h4 class="pull-right" id="edit-basic-info"><a href="#" >edit</a></h4>';
	}
	?>
	<h2>Basic Info</h2>
</div>

<dl class="dl-horizontal">
	<dt>Name</dt>
	<dd>
		<span id="user-info"><?php echo $user -> fullname; ?></span>
		<input type="text" id="edit-info" name="name" value="<?php echo $user->fullname; ?>" />
	</dd>
</dl>

<dl class="dl-horizontal">
	<dt>Gender</dt>
	<dd>
		<span id="user-info"><?php echo $user -> gender; ?></span>
		<?php
			$options = array('Male' => 'Male', 'Female' => 'Female');
			echo form_dropdown('gender', $options, $user->gender, 'id=edit-info');
		?>
	</dd>
</dl>

<dl class="dl-horizontal">
	<dt>About me</dt>
	<dd><?php echo $user -> about; ?></dd>
</dl>

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