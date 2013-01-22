<div class="row-fluid">
	<ul class="thumbnails">
		<li class="span12">
			<div class="thumbnail">
				<img src="http://placehold.it/300x200" alt="">
				<div class="caption">
					<h3>Daryl Lukas</h3>
					<ul class="nav nav-tabs nav-stacked">
						<li>
							<a href="#" >Profile</a>
						</li>
						<li>
							<a href="#" >Galleries</a>
						</li>
						<li>
							<a href="#" >Wall</a>
						</li>
					</ul>
					<p style="text-align: right;">
						<?php
						if ($this->sess_uid != $user->uid && $this->sess_is_logged_in) {
							echo '<a href="#" class="btn btn-success">Add to Favourites</a>';
						}
						?>
					</p>
				</div>
			</div>
		</li>
	</ul>
</div>