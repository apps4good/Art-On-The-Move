<!DOCTYPE html>
<html>

	<head>
		<title><?php echo $page_title; ?></title>
		<?php $this->load->view('scripts'); ?>

	</head>

	<body>

			<div id="header" class="navbar-fixed-top" >
				<?php $this->load->view('header'); ?>
			</div>
			
			<div id="page">
				<div class="container">
					<div class="row">
						<div class="span8 offset2" id="content">
							<?php echo $content; ?>
						</div>
					</div>
				</div>
		
			<div id="footer">
				<?php $this->load->view('footer'); ?>
			</div>
		</div>

	</body>

</html>