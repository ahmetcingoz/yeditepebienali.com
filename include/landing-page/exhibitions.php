<?php 

	$exhibitions_json = _decode_json($_SERVER['DOCUMENT_ROOT'] . '/json/landing-page/exhibitions.json');

	foreach ($exhibitions_json as $key => $value) {

		if ($key == $_SESSION['language']) { ?>

			<div class="info work">
				<div class="txt-frame wow fadeInLeft" data-wow-delay="0.6s">
					<h2 class="tild"><?php echo $value['title'][0]; ?></h2>
					<span class="num"><?php echo $value['number'][0]; ?></span>
					<ul class="filter">
						<li class="active"><a href="#"><?php echo ucwords(_translate('word', 'hepsi')) ?></a></li>
						
						<?php 
									
							foreach ($value as $f_key => $f_value) {
								
								if ($f_key == 'category') {
									
									foreach ($f_value as $s_key => $s_value) { ?>
										
										<li><a href="#" data-filter=".<?php echo _seo($s_key) ?>"><?php echo $s_key ?></a></li>
										
								<?php }
									
								}
								
							}
			
						?> 
						
					</ul>
					<a href="<?php echo $value['href'][0]; ?>" class="more"><?php echo _translate('word', 'tümünü gör') ?></a>
				</div>
				<div class="img-frame">
					<div class="img-area" id="masonry-container">
						
						<?php 
									
							foreach ($value as $f_key => $f_value) {
								
								if ($f_key == 'category') {
									
									foreach ($f_value as $s_key => $s_value) { ?>
										
										<div class="item <?php echo $s_value[3] . ' ' . _seo($s_key); ?> wow fadeInUp" data-wow-delay="0.6s">
											<img src="<?php echo $s_value[2] ?>" alt="image description">
											<div class="caption">
												<div class="c1">
													<div class="c2">
														<strong class="title"><?php echo $s_value[0] ?></strong>
														<p><?php echo $s_value[1] ?></p>
														<ul class="icons">
															<li><a href="<?php echo $s_value[2] ?>" class="lightbox"><i class="icon-resize-full-alt"></i> <span>resize</span></a></li>
															<!--<li><a href="#"><i class="icon-attach"></i> <span>attach</span></a></li>-->
														</ul>
													</div>
												</div>
											</div>
										</div>
										
								<?php }
									
								}
								
							}
			
						?> 
						
					</div>
				</div>
			</div>
			
		<?php } 
	
	}

?>