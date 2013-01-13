<?php
if(count($items) > 0) {

	echo '<div class="row-fluid" id="fluid_grid">';

	foreach($items as $item)
	{
?>
	<div>
		<div class="fluid_grid_item">
		<a href="/data/art_pics/<?php echo $item->ap_url; ?>"
			title="<?php echo $item->ap_title; ?>" rel="lightbox">
			<img src="/data/art_pics/<?php echo $item->ap_url; ?>" class="img-polaroid" />
		</a>
		</div>
	</div>

<?php
	}
} else {
	echo '<div id="empty">No items have been added yet.</div>';
}
?>
