<?php $venues_json = _decode_json($_SERVER['DOCUMENT_ROOT'] . '/json/landing-page/venues.json');

	foreach ($venues_json as $key => $value) {

	if ($key == $_SESSION['language']) { ?> 

		<div class="info team">
			<div class="txt-frame wow fadeInUp" data-wow-delay="0.6s">
				
				<?php 
		
					$i = 1; $one = 1; $two = 1; $three = 1; $four = 1;

					foreach ($value as $f_key => $f_value) {
						
						if ($f_key == 'category') { 
							
							foreach ($f_value as $s_key => $s_value) { ?> 
				
							<ul class="text-box team<?php echo $i++; ?>">
								<li>
									<h2><a href="<?php echo _seo($s_key) ?>"><?php echo $s_key ?></a></h2>
									<span><?php echo _uppercase($s_value[2])?></span>
								</li>
								<li>
									<p><?php echo $s_value[3] ?></p>
								</li>
							</ul>				
							
							<?php }
							
						}
						
					}
				
				?>

				<div class="img-holder wow fadeInUp" data-wow-delay="0.5s">
					
				<?php 
					
					foreach ($value as $f_key => $f_value) {
						
						if ($f_key == 'category') { 
							
							foreach ($f_value as $s_key => $s_value) { ?> 
				
								<div class="box box<?php echo $one++ ?>">
									<div class="img"><a href="<?php echo _seo(_translate('venues', $s_key)) ?>" class="team<?php echo $two++ ?>-opener"><img src="<?php echo $s_value[0] ?>" alt="image description"></a></div>
									<div class="txt-box">
										<h3><a href="#" class="team<?php echo $three++ ?>-opener"><?php echo $s_key ?></a></h3>
										<span class="designation"><?php echo _uppercase($s_value[2])?></span>
									</div>
								</div>			
							
							<?php }
							
						}
						
					}					
					
					
				?>
					
				</div>
			</div>
			<div class="img-frame">
				<div class="image wow fadeInRight" data-wow-delay="0.6s">
					<a href="<?php echo $value['href'][0] ?>">
						<?php 

							foreach ($value as $f_key => $f_value) {

								if ($f_key == 'category') { 

									foreach ($f_value as $s_key => $s_value) { ?> 

										<img src="<?php echo $s_value[1] ?>" alt="image description" class="team<?php echo $four++ ?>-img">		

									<?php }

								}

							}					

						?>						
					</a>
				</div>
				<div class="text wow fadeInRight" data-wow-delay="0.3s">
					<h2 class="tild"><?php echo $value['title'][0] ?></h2>
					<span class="num"><?php echo $value['number'][0] ?></span>
					<a href="<?php echo $value['href'][0] ?>" class="more"><?php echo _uppercase(_translate('word','tümünü gör'))?></a>
				</div>
			</div>	
		</div>
	</div>
	
	<?php } 

} ?>

