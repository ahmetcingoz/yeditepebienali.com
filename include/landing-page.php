<main id="main">

	<?php include_if_exist_language('banner'); ?>

	<div class="max-container">
		<div class="info-holder">
			
			<?php 
	
				include_if_exist_language('exhibitions');
				include_if_exist_language('venues');
				include_if_exist_language('thematic-exhibitions');
				include_if_exist_language('live-performances');
				include_if_exist_language('publications');

				include_once $_SERVER['DOCUMENT_ROOT'] . '/include/landing-page/datas.php';			

			?>
			
		</div>
	</div>
</main>