<ul class="nav nav-tabs nav-stacked">
	<li><a href="/" >All</a></li>
<?php
	foreach ($categories as $c)
	{
		echo '<li><a href="/?category='.$c->categ_id.'">'.$c->categ_name.'</a></li>';
	}
?>
</ul>