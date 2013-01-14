<div class="row-fluid">
<form class="form-horizontal" action="/artist/get_started" method="post">
<legend>Create Profile</legend>
	<div class="control-group">
		<label class="control-label" for="gender">Gender</label>
		<div class="controls">
		<select name="gender" id="gender">
			<option value="Male">Male</option>
			<option value="Female">Female</option>
		</select>
		</div>
	</div>
	<div class="control-group">
		<label class="control-label" for="street_addr">Address</label>
		<div class="controls">
			<input type="text" id="street_addr" name="street_addr" placeholder="Address">
		</div>
	</div>
	<div class="control-group">
		<label class="control-label" for="password">City</label>
		<div class="controls">
			<input type="text" id="city" name="city" placeholder="City">
		</div>
	</div>
	<div class="control-group">
		<label class="control-label" for="region">Region</label>
		<div class="controls">
		<select name="region" id="region">
			<?php
				foreach ($regions as $region) {
					echo '<option value="'.$region->region_id.'">'.$region->region_name.'</option>';
				}
			?>
		</select>
		</div>
	</div>
	<div class="control-group">
		<label class="control-label" for="category">Which categories do you fall under?</label>
		<div class="controls">
		<select name="category" id="category">
			<?php
				foreach ($categories as $categ) {
					echo '<option value="'.$categ->categ_id.'">'.$categ->categ_name.'</option>';
				}
			?>
		</select>
		</div>
	</div>
	<div class="control-group">
		<label class="control-label" for="specialty">I specialize in</label>
		<div class="controls">
			<span class="help-block">Comma-separated list. E.g., graffiti, african, comics.</span>
			<input type="text" class="input-large" name="specialty" id="specialty" placeholder="Specialty">
			<script type="text/javascript">
				$(document).ready(function() {
					$("#specialty").tokenInput("/ajax/fetch_tags", {
						theme: "facebook",
						preventDuplicates: true,
						allowNewTokens: true,
						tokenValue: "name"
					});
				});
			</script>
		</div>
	</div>
	<div class="control-group">
		<div class="controls">
			<button type="submit" class="btn">Submit</button>
		</div>
	</div>
</form>
	
</div>