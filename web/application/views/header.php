<a href="<?php echo base_url(); ?>"><img src="<?php echo base_url('assets/img/logo.png'); ?>" id="logo" /></a>
<div class="btn-group pull-right" id="header-btns">
<?php echo $this->header_navi; ?>
</div>

<div id="sub_header">
<div class="navbar">
  <div class="navbar-inner">
  <div class="container">
  <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
         <span class="icon-bar"></span>
         <span class="icon-bar"></span>
         <span class="icon-bar"></span>
  </button>
  
  <div class="nav-collapse collapse">
  <?php echo $this->navbar_links; ?>

	<?php if ($this->header_search_present) { ?>
	<form class="navbar-search pull-left">
		<div class="input-append">
			<input class="search-query" placeholder="Search for Art or Artists" type="text" />
			<button class="btn" type="submit">Search</button>
		</div>
	</form>
	<?php } ?>
	
	<p class="navbar-text">
		<?php echo $this->header_page_title; ?>
	</p>
	</div>
	</div>
	</div>
</div>
</div>
