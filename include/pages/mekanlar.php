<!-- promo -->
<div class="promo">
	<div class="max-container">
		<div class="img">
			<img src="http://placehold.it/1770x240" alt="image description">
		</div>
		<div class="holder">
			<div class="frame">
				<div class="box">
					<div class="heading">
						<h1>Full width</h1>
						<h2>Blog List</h2>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- contain main informative part of the site -->
<main id="main" role="main">
	<div class="container">
		<div class="row">
			<div class="col-xs-12">
				<!-- article holder -->
				<div class="article-holder">
					
					<?php 
					
						$odd = 0;
					
						function _odd_even($number){
							
							if ($number % 2 == 0) {
								
								return true;
								
							} 
							
						}					
					
						$artists = $_SERVER['DOCUMENT_ROOT'] . '/json/category/venues.json';

						$artists = _decode_json($artists);

						foreach ($artists as $category_key => $category_value) {

							foreach ($category_value as $date_key => $date_value) {
								
								foreach ($date_value as $venues_key => $venues_value) { 
								
								if (_odd_even($odd++) == true) { ?>

								<article class="article">
									<div class="image wow fadeInLeft" data-wow-delay="0.6s">
										<img src="http://placehold.it/570x440" alt="image description">
									</div>
									<div class="text wow fadeInRight" data-wow-delay="0.6s">
										<!--<strong class="title"><?php echo _translate('venues', $venues_key) ?></strong>-->
										<div class="txt">
											<h2><?php echo _translate('venues', $venues_key) ?></h2>
											<p>
												<?php 
									
												$word_count = $venues_value[$_SESSION['language']];
												
												$word_count = explode(' ', $word_count);
																					   
												for ($i = 0; $i <= 24; $i++) {
													
													echo $word_count[$i] . ' ';
													
												}
												 
												echo '...';
																					   
												?>
											
											</p>
											<a class="more" href="<?php echo _seo(_translate('venues', $venues_key)) ?>">
												<span><?php echo _translate('word', 'devamı') ?></span>
												<i class="icon-right-thin"></i>
											</a>
										</div>
									</div>
								</article>					
					
								<?php } else { ?>
									
								<article class="article">
									<div class="text wow fadeInLeft" data-wow-delay="0.6s">
										<!--<strong class="title"><?php echo _translate('venues', $venues_key) ?></strong>-->
										<div class="txt">
											<h2><?php echo _translate('venues', $venues_key) ?></h2>
											
												<p>
												<?php 
									
												$word_count = $venues_value[$_SESSION['language']];
												
												$word_count = explode(' ', $word_count);
																					   
												for ($i = 0; $i <= 24; $i++) {
													
													echo $word_count[$i] . ' ';
													
												}
												 
												echo '...';
																					   
												?>
											
											</p>
											<a class="more" href="<?php echo _seo(_translate('venues', $venues_key)) ?>">
												<span><?php echo _translate('word', 'devamı') ?></span>
												<i class="icon-right-thin"></i>
											</a>
										</div>
									</div>
									<div class="image wow fadeInRight" data-wow-delay="0.6s">
										<img src="http://placehold.it/570x440" alt="image description">
									</div>
								</article>										
									
								<?php } ?>

							<?php }

							}

						}

					?>					
					
			</div>
		</div>
	</div>
</main>
	
					<!-- article -->
	