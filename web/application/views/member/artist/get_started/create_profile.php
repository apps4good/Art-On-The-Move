<div class="row-fluid">
<form class="form-horizontal" action="/artist/get_started">
<legend>Create Profile</legend>
	<div class="control-group">
		<label class="control-label" for="gender">Gender</label>
		<div class="controls">
		<select name="type" id="gender">
			<option value="Male">Male</option>
			<option value="Female">Female</option>
		</select>
		</div>
	</div>
	<div class="control-group">
		<label class="control-label" for="addr">Address</label>
		<div class="controls">
			<input type="text" id="addr" placeholder="Address">
		</div>
	</div>
	<div class="control-group">
		<label class="control-label" for="password">City</label>
		<div class="controls">
			<input type="text" id="city" placeholder="City">
		</div>
	</div>
	<div class="control-group">
		<label class="control-label" for="region">Region</label>
		<div class="controls">
		<select name="type" id="region">
			<option value="1">an Artist</option>
			<option value="2">an Art Lover</option>
		</select>
		</div>
	</div>
	<div class="control-group">
		<label class="control-label" for="region">Which categories do you fall under?</label>
		<div class="controls">
		<select name="type" id="region">
			<option value="1">Paintings/Drawings</option>
			<option value="2">Crafts</option>
		</select>
		</div>
	</div>
	<div class="control-group">
		<label class="control-label" for="specialty">I specialize in</label>
		<div class="controls">
			<span class="help-block">Comma-separated list. E.g., graffiti, african, comics.</span>
			<input type="text" class="input-large" id="specialty" placeholder="Specialty">
			<script type="text/javascript">
				$(document).ready(function() {
					$("#specialty").tokenInput([
						{id: 7, name: "Ruby"},
						{id: 11, name: "Python"},
						{id: 13, name: "JavaScript"},
						{id: 17, name: "ActionScript"},
						{id: 19, name: "Scheme"},
						{id: 23, name: "Lisp"},
						{id: 29, name: "C#"},
						{id: 31, name: "Fortran"},
						{id: 37, name: "Visual Basic"},
						{id: 41, name: "C"},
						{id: 43, name: "C++"},
						{id: 47, name: "Java"}
					], {
						theme: "facebook",
						preventDuplicates: true
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