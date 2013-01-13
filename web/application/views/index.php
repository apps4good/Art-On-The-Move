<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Art on the Move - A discovery engine for local artwork and artists!</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Daryl" >

    <!-- Le styles -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <style type="text/assets/css">
      body {
        padding-top: 60px;
        padding-bottom: 40px;
      }
    </style>
    <link href="assets/css/bootstrap-responsive.css" rel="stylesheet">

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Le fav and touch icons -->
    <link rel="shortcut icon" href="ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="ico/apple-touch-icon-57-precomposed.png">
        
    <!-- LightBox CSS -->
  	<link rel="stylesheet" href="assets/css/lightbox.css" type="text/css" media="screen" />

  </head>

  <body>
    <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
          <a class="brand" href="#">Art on the Move!</a>
          <div class="nav-collapse collapse">
            <ul class="nav">
              <li class="active"><a href="#">Expo</a></li>
              <li><a href="#about">Categories</a></li>
              <li><a href="#contact">Artists</a></li>
            </ul>
            <form class="navbar-form pull-right">
              <input class="span3" type="text" placeholder="Search..">
              <button type="submit" class="btn">Search</button>
            </form>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>

    <div class="container">

      <!-- Main hero unit for a primary marketing message or call to action -->
      <div class="hero-unit" style="background-image:url('assets/img/header.png'); background-size:cover; background-position:center 45px; background-repeat:no-repeat; background-color:#fff;">
        <p>Are you a Zambian artist? Sign up and upload photos to show case your work.<br/>Art collectors & art lovers continue browsing and enjoy Zamnian Art at its best.</p>
        <br/><br/><br/><br/><br/><br/><br/><br/><br/>
        <p><a class="btn btn-primary btn-large">Sign Up! &raquo;</a></p>
      </div>
		

      <!-- Example row of columns -->
      <script type="text/javascript" >
			var alreadyloading = false;
			var nextpage = 2;
			 
			$(window).scroll(function() {
			    if ($('body').height() <= ($(window).height() + $(window).scrollTop())) {
			        if (alreadyloading == false) {
			            var url = "ajax/get_expo_items/"+nextpage+".html";
			            alreadyloading = true;
			            $.post(url, function(data) {
			                $('#galleryThumbsCol').children().last().after(data);
			                alreadyloading = false;
			                nextpage++;
			            });
			        }
			    }
			});
	</script>
      <div class="row">
        <?php
        	$row_count = 1;
        	foreach($items as $item) {
        		if ($row_count == 1) {
        			echo '<div class="span3">';
        		}
        ?>
		        <?php /* echo $item->ap_title; */ ?>
		        <p><a href="<?php echo $item->ap_url_sample; ?>" title="<?php echo $item->ap_title; ?>" rel="lightbox[roadtrip]">
				<img src="<?php echo $item->ap_url_sample; ?>" /></a></p>
		        <p><a class="btn" href="<?php echo $item->ap_url_sample; ?>" title="<?php echo $item->ap_title; ?>" rel="lightbox[roadtrip]">
			    View details &raquo; </a></p>
     		<?php
     				if($row_count == 4 || $item == $items[(count($items) - 1)]) {
     					echo '</div>';
     					$row_count = 0;     					
     				}
     				$row_count++;
     			}
        	?>

        	</div>

      <hr>

      <footer>
        <p>&copy; Company 2012</p>
      </footer>

    </div> <!-- /container -->

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="assets/js/jquery-1.7.2.min.js"></script>
    <script src="assets/js/bootstrap-transition.js"></script>
    <script src="assets/js/bootstrap-alert.js"></script>
    <script src="assets/js/bootstrap-modal.js"></script>
    <script src="assets/js/bootstrap-dropdown.js"></script>
    <script src="assets/js/bootstrap-scrollspy.js"></script>
    <script src="assets/js/bootstrap-tab.js"></script>
    <script src="assets/js/bootstrap-tooltip.js"></script>
    <script src="assets/js/bootstrap-popover.js"></script>
    <script src="assets/js/bootstrap-button.js"></script>
    <script src="assets/js/bootstrap-collapse.js"></script>
    <script src="assets/js/bootstrap-carousel.js"></script>
    <script src="assets/js/bootstrap-typeahead.js"></script>
    
    <!-- Light Box JS -->
	 <script src="assets/js/lightbox.js"></script>

  </body>
</html>
