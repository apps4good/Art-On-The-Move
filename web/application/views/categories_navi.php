<div  class="well">
	<ul class="nav nav-list">
		<li class="nav-header">
			Browse
		</li>
		<li>
			<a href="/" >All</a>
		</li>
		<?php
		foreach ($categories as $c) {
			echo '<li><a href="/?category=' . $c -> categ_id . '">' . $c -> categ_name . '</a></li>';
		}
		?>

		<li class="nav-header">
			Favourites
		</li>
		<li>
			<a href="#">Art</a>
		</li>
		<li>
			<a href="#">Artists</a>
		</li>
	</ul>
</div>