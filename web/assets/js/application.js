var win = $(window);

// side bar
$('#navi').affix({
		offset: {
		top: function() { return win.width() <= 980 ? 180 : 100 },
		bottom: 70
	}
});

$('.dropdown-toggle').dropdown();

/*var base_url = "<?php echo base_url(); ?>";
$("#specialty").fcbkcomplete({
	// json_url: base_url + "ajax/get_places",
	addontab: true,
	maxitems: 5,
	maxshownitems: 10,
	input_min_size: 1,
	height: 10,
	width: 210,
	cache: true,
	newel: true
});
*/