<?php 

	$year_title = 'yeditepe bienali';

	$json = $_SERVER['DOCUMENT_ROOT'] . '/json/category/exhibitions.json';

	$json = _decode_json($json); 

	$page = str_replace('-', ' ', $page);

echo $json['sergiler'];

//print_r($json);



?> 

<div class="promo portfolio">
	<div class="max-container">
		<div class="img">
			<img src="http://placehold.it/1770x240" alt="image description">
		</div>
		<div class="holder">
			<div class="frame">
				<div class="box">
					<div class="heading">
						<h1>portfolio grid 3</h1>
						<h2>portfolio</h2>
					</div>
				</div>
			</div>
		</div>
		<ol class="breadcrumb">
			<li><a href="#"><?php echo 'home'; ?> Home</a></li>
			<li><a href="#">Library</a></li>
			<li class="active">Data</li>
		</ol>			
	</div>
</div>

<main id="main" role="main">
	<div class="container">
		<div class="row">
			<div class="col-xs-12">

				<?php

					foreach ($json as $category => $subcategory) {

						foreach ($subcategory as $subcategory_key => $subcategory_value) {

							if ($page == $subcategory_key) {

								$i = count($subcategory_value);

								foreach ($subcategory_value as $subcategory_date_key => $subcategory_date_value) {

									if ($i > 1) { ?>

									<h4><?php echo _uppercase(_translate('title', $year_title)) . ' ' . $subcategory_date_key; ?></h4>
									
									<?php } ?>

										<!-- masonry-holder -->
										<div class="masonry-holder">
											<!-- <ul class="links filter">
												<li class="active"><a href="#">All</a></li>

												<?php 

													foreach ($subcategory_date_value as $article_key => $article_value) { ?>

														<li><a href="#" data-filter=".<?php echo _seo($article_key)?>"><?php echo $article_key ?></a></li>


												<?php } ?>

											</ul> -->

											<!-- masonry -->
											<ul class="masonry grid3" id="masonry-container">

												<?php 

													foreach ($subcategory_date_value as $article_key => $article_value) { ?>

												<li class="item <?php echo _seo($article_key) ?> wow fadeInUp" data-wow-delay="0.1s">
													<div class="holder">
														<div class="img">
															<img alt="image description" src="http://placehold.it/365x271">
														</div>
														<div class="caption">
															<div class="c1">
																<div class="c2">
																	<strong class="title"><?php echo $article_key ?></strong>
																	<p><?php if (array_key_exists('location', $article_value)) {echo $article_value['location'];} ?></p>
																	<ul class="icons">
																		<li><a href="images/img1.jpg" class="lightbox"><i class="icon-resize-full-alt"></i> <span>resize</span></a></li>
																		<!--<li><a href="portfolio-detail.html"><i class="icon-attach"></i> <span>attach</span></a></li>-->
																	</ul>
																</div>
															</div>
														</div>
													</div>
												</li>

												<?php } ?>



											</ul>
											<!--<a href="#" class="more">LOAD MORE</a>-->
										</div>


								<?php }

							} 

						}

					}

				?>
				
			</div>
		</div>
	</div>
</main>

<style>
	.breadcrumb {border-radius: 0px !important; font-size: 12px;}
	.breadcrumb a {color:#e8b75f !important;}
	h4 {text-align: center; background-color:#252525; color: #FFF; padding-top: 5px;  padding-bottom: 5px; margin-bottom: 25px;}
	.promo {margin-bottom: -30px !important; padding: 0px !important;}
	
</style>
								