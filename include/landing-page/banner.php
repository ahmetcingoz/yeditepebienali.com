<?php

	$banner_json = _decode_json($_SERVER['DOCUMENT_ROOT'] . '/json/landing-page/banner.json');

	foreach ($banner_json as $key => $value) {

		if ($key == $_SESSION['language']) {?>

		<div class="visual">
			<div class="max-container">
				<div class="slideshow" id="main-slider">			

			<?php foreach ($value as $f_key => $f_value) { ?>

				<div class="slide">
					<div class="caption">
						<div class="text">

							<span class="txt"><?php echo $f_value['title'][0]; ?></span>

							<?php $title = explode(' ', $f_value['title'][1]); $count = count($title); ?>

							<h1><span class="icon">#</span><span class="light"><?php echo $title[0] ?></span> <span class="add"> <?php if ($count > 1) {echo $title[1];}  if ($count > 2) {echo ' ' . $title[2];} ?> </span> <span class="add2"><?php if ($count > 3) {echo $title[3];} ?></span></h1>

						</div>
					</div>
					<div class="image">
						<img src="<?php echo $f_value['image'][0] ?>" alt="image description">
					</div>
					<span class="box"></span>

					<?php include $_SERVER['DOCUMENT_ROOT'] . '/public/social-media.php' ?> 

				</div>

			<?php } ?>

				</div>
			</div>
		</div>								

		<?php }

	} 

?>
