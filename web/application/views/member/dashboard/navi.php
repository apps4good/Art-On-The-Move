<div class="row-fluid">
	<script type="text/javascript" >
		$(document).ready(function() {
			$("<?php echo $active_link; ?>").attr("class", "active");
		});
	</script>
	<div class="well well-large">
		<ul class="nav nav-list" id="dashboard">
			<li class="nav-header">Settings</li>
			<li id="account"><a href="/settings/account"><i class="icon-user"></i> Account</a></li>
			<li id="password"><a href="/settings/password"><i class="icon-lock"></i> Password</a></li>
			<li><a href="/logout"><i class="icon-off"></i> Logout</a></li>
		</ul>
	</div>
</div>