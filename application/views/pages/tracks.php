<section class="container">
	<section class="content-lg">
		<ul class="suggest-me-track">
			<li><span class="suggest-me-track"><img src="<?=base_url();?>assets/graphics/suggest-track.png" width="75px" height="75px" /></span><a href="<?=base_url();?>index.php/tracks/suggest_track">SUGGEST ME A TRACK!</a></li>
		</ul>
		<?php
		$allTracks = new track();
		$allTracks = $allTracks -> getWithCondition(array('status' => 'yes'));

		foreach ($allTracks as $track) 
		{
			?>
			
		<section id="tracks">
			<section class="half-one">
				<section class="course-info">
					<h5>Intermediate</h5>
					<p class="points">Points: <?=$track->track_points;?></p>
					<h2 class="course-name"><?=$track -> track_title;?></h2>
					<h5><?=$track->tiny_intro;?></h5>
					<p class="desc"><?=$track->track_description;?></p>
	<!-- 				<section class="rating"><p>Rating: <?=$track->getOverAllRating();?> (<?=$track->numberOfRatings();?>)</p></section> -->
				</section>
				<section class="buttons">
					<button type="button" class="default">Start Track</button>
					<button href="<?=base_url('index.php/tracks/explore/' . $track -> track_id);?>" type="button" class="default">Explore</button>
				</section>
			</section>
		</section>
		<?php

	}

	?>
</section>
</section>

<section class="clear"></section>