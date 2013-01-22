<button class="btn btn-success dropdown-toggle" data-toggle="dropdown">
	<?php echo $display_name; ?>
	<span class="caret"></span>
</button>
<ul class="dropdown-menu">
	<li>
		<a href="#">Add new art</a>
	</li>
	<li>
		<a href="/artist/profile/?id=<?php echo $this->sess_uid; ?>">My Profile</a>
	</li>
	<li class="divider"></li>
	<li>
		<a href="/settings">Settings</a>
	</li>
	<li>
		<a href="/logout">Logout</a>
	</li>
</ul>
