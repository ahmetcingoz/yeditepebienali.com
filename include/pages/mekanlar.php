<?php

	$venues_json = $_SERVER['DOCUMENT_ROOT'] . '/json/category/venues.json';

	$venues_json = _decode_json($venues_json);

?>
<div class="promo">
	<div class="max-container">
		<div class="img">
			<img src="http://placehold.it/1770x240" alt="image description">
		</div>
		<div class="holder">
			<div class="frame">
				<div class="box">
					<div class="heading">
						<h2><?php //echo _uppercase(_translate('category', $venues_json)) ?></h2>
					</div>
				</div>
			</div>
		</div>
		<ol class="breadcrumb">
			<li class="active"><?php //echo _translate('venues', $article[2]) ?></li>
		</ol>
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

						foreach ($venues_json as $category_key => $category_value) {

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
	
<style>
	#main a {color:#252525 !important;}
	.breadcrumb {border-radius: 0px !important; font-size: 12px;}
	.breadcrumb a {color:#e8b75f !important;}

	.promo {margin-bottom: 0px !important; padding: 0px !important; margin-top: 0px;}
	.promo .heading {overflow: visible !important;}
	.promo .heading h1 {color: #e8b75f !important; padding-left: 75px; padding-right: 75px; padding-bottom: 5px; padding-top: 15px; border-bottom: 1px solid #e8b75f;}
	
	.container {margin-bottom: 50px;}
	
	.artist {width: 100%; padding-left: 15px; padding-right: 15px;}
	.artist li {width: 25%; float: left; margin-bottom: 7px;}
	.artist li a {font-size: 15px;}
	.artist li a:hover {text-decoration:none !important; border-bottom: 1px solid #e8b75f; }	
	.artist h2 {width: 100%; display: block; float: left; margin-bottom: 25px; margin-top: 25px; color:#e8b75f; border-bottom: 1px solid #e8b75f}

	@media only screen and (max-width: 1000px) {
		.promo {display: none;}
		.artist li {width: 33.33%; float: left;}
	}	
	
	@media only screen and (max-width: 600px) {
		.nav {margin-top: 50px;}
		.container {margin-top: 25px;}
		.artist li {width: 50%; float: left;}
	}	

</style>