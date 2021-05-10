<?php 

	$live_performances_json = _decode_json($_SERVER['DOCUMENT_ROOT'] . '/json/landing-page/live-performances.json');

	foreach ($live_performances_json as $key => $value) {

		if ($key == $_SESSION['language']) { ?> 

		<div class="info blogs">
			<div class="img-frame">
		
			<?php 
				
				foreach ($value as $f_key => $f_value) {

					if ($f_key == 'category') { 

						$count = count($f_value); 

						$i = 1;		

						foreach ($f_value as $s_key => $s_value) { ?> 
				
							<?php if ($i++ == 2) { ?>
							
								<div class="txt-holder right wow fadeInUp" data-wow-delay="0.6s">
									<div class="txts">
										<div class="txt-box">
											<h3><?php echo $s_key ?></h3>
											<p><?php echo $s_value[1]; ?></p>
											<a href="<?php echo $s_value[2] ?>" class="continue"><span>CONTINUE</span> <i class="icon-right-thin"></i></a>
										</div>
									</div>
									<div class="images">
										<img src="<?php echo $s_value[0] ?>" alt="image description">
										<span class="sub-caption"></span>
									</div>
								</div>		
				
							
							<?php } else { ?>

								<div class="txt-holder wow fadeInUp" data-wow-delay="0.6s">
									<div class="images">
										<img src="<?php echo $s_value[0] ?>" alt="image description">
										<span class="sub-caption"></span>
									</div>
									<div class="txts">
										<div class="txt-box">
											<h3><?php echo $s_key ?></h3>
											<p><?php echo $s_value[1]; ?></p>
											<a href="<?php echo $s_value[2] ?>" class="continue"><span>CONTINUE</span> <i class="icon-right-thin"></i></a>
										</div>
									</div>
								</div>		
							
							<?php } 

						}

					}

				}					
				
			?>
	
			</div>
			<div class="txt-frame wow fadeInRight" data-wow-delay="0.6s">
				<h2 class="tild"><?php echo $value['title'][0] ?></h2>
				<span class="num"><?php echo $value['number'][0] ?></span>
				<a href="<?php echo $value['href'][0] ?>" class="more">view all</a>
			</div>
		</div>				

	<?php } 

	} 

?>