<?php $images = _content ('images/articles/' . $article[0] . '/' . $article[2] . '/' . _seo($article[1]) . '/' . _seo($article[3]) . '/'); ?>

<?php $random_background = array_rand($images, 2); ?>
<?php $random_image = array_rand($images, 3); ?>

<div class="promo portfolio wow fadeInUp">
	<div class="max-container">
		<div class="img background-animation">
			<!--<img src="<?php // echo $images[$random_background[0]] ?>" alt="image description">-->
		</div>
		<ol class="breadcrumb">
			<li><a><?php echo _translate('category', $article[0]) ?></a></li>
			<li><a href="<?php echo '/' . _seo(_translate('subcategory', $article[1])) ?>"><?php echo _translate('subcategory', $article[1]) ?></a></li>			
			<li class="active"><?php echo _translate('article', $article[3]) ?></li>
		</ol>			
		<div class="holder">
			<div class="frame">
				<div class="box">
					<div class="heading">
						<h1><?php echo _uppercase(_translate('subcategory', $article[1])) ?></h1>
						<h2><?php echo _translate('category', $article[0]) ?></h2>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<main id="main" role="main">
	<div class="container">
		<div class="row">
			<div class="col-xs-12">
				<!-- gallery -->
				<div class="gallery">
					
					<div class="img wow fadeInDown"><img src="<?php echo $images[$random_image[0]] ?>" alt="image description"></div>
					
					<div class="text">
						<h2 class="wow fadeInUp"><?php echo _uppercase(_translate('article', $article[3])) ?></h2>
						<dl class="wow fadeInUp">
							<dt><span style="color:#e8b75f;" class="material-icons md-18">event</span></dt>
							<dd><time><?php echo $article[4]['date'][0] ?></time></dd>
							<dt><span style="color:#e8b75f;" class="material-icons md-18">notifications_none</span></dt>
							<dd><time><?php echo $article[4]['date'][1] ?></time></dd>
							<dt><span style="color:#e8b75f;" class="material-icons md-18">place</span></dt>
							<dd><a target="_blank" href="<?php echo _seo(_translate('venues', $article[4]['location'])) ?>"><?php echo _translate('venues', $article[4]['location']) ?></a></dd>
							<dt><span style="color:#e8b75f;" class="material-icons md-18">filter_vintage</span></dt>
							<dd>
							<?php foreach ($article[4]['artist'] as $artist) { ?>
								<a target="_blank" href="<?php echo _seo($artist) ?>"><?php echo $artist ?></a>
							<?php } ?>
							</dd>
						</dl>
						<p class="wow fadeInUp"><?php echo _translate('article', $article[4][$_SESSION['language']]) ?> <?php echo $article[4]['participation' . '-' .  $_SESSION['language']] ?> </p>
						<p class="wow fadeInUp"><?php foreach ($article[4]['participation'] as $student) {echo ' • ' . $student;}  ?></p>
					</div>
				</div>
				
				<?php 
	
					/* $image_authors = explode(' • ',$article[4]['participation']);
	
					print_r($image_authors);*/
				
				?>
				
				<!-- project-area -->
				
				<div class="masonry-holder bienal-images">
					<h2><?php echo _uppercase(_translate('title', 'eserler')) ?></h2>
					<ul class="masonry add">

					<?php 

					if (array_key_exists('images', $article[4])) {

						foreach ($article[4]['images'] as $image_key) {

							$image_title = $image_key;

							$image_key = _seo($image_key) . '.jpg';
														
							foreach ($images as $image) {

								if ($image_key == basename($image)) { ?>

									<li>
										<div class="holder wow fadeInUp">
											<div class="img">
												<img src="<?php echo $image ?>" alt="image description">
											</div>
											<div class="caption">
												<div class="c1">
													<div class="c2">
														<a><strong class="title"><?php echo $image_title ?></strong></a>
														<!--<a><p><?php //echo _translate('venues', $related_value['location']); ?></p></a>-->
														<ul class="icons">
															<li><a href="#"><i class="icon-resize-full-alt"></i> <span>resize</span></a></li>
															<!--<li><a href="#"><i class="icon-attach"></i> <span>attach</span></a></li>-->
														</ul>
													</div>
												</div>
											</div>
										</div>
									</li>	

							<?php }

							}

						} 

					} 
						
					?>

					</ul>
				</div>								
				
				<div class="masonry-holder">
					<h2></h2>
					<ul class="masonry add">
						
						<?php $i = 0 ?>

						<?php foreach ($article[5] as $related_key => $related_value) { 
						
							if (_translate('article', $related_key) <> _translate('article', $article[3])) { ?>
						
							<?php $i++; if ($i < 7) { ?>

								<li>
									<div class="holder">
										<div class="img wow fadeInUp">
											<img src="/images/placehold/350x260.png" alt="image description">
										</div>
										<div class="caption">
											<div class="c1">
												<div class="c2">
													<a href="<?php echo _seo(_translate('article', $related_key)); ?>"><strong class="title"><?php echo _translate('article', $related_key); ?></strong></a>
													<a href="<?php echo _seo(_translate('venues', $related_value['location'])) ?>"><p><?php echo _translate('venues', $related_value['location']); ?></p></a>
													<ul class="icons">
														<li><a href="#"><i class="icon-resize-full-alt"></i> <span>resize</span></a></li>
														<!--<li><a href="#"><i class="icon-attach"></i> <span>attach</span></a></li>-->
													</ul>
												</div>
											</div>
										</div>
									</div>
								</li>						
										
						
							<?php } 
							
							}
						
						} ?>
						
					</ul>
				</div>
			</div>
		</div>
	</div>
</main>

<style>
	.promo .heading h1 {color: #e8b75f !important; padding-left: 75px; padding-right: 75px; padding-bottom: 5px; padding-top: 5px; background-color: #FFF; border: 1px solid #e8b75f;}
	.bienal-images li {width: 25% !important;}
	.bienal-images .holder {display: flex; height:18vw;}
	.bienal-images .holder .img {
		display: flex;
		flex-wrap: nowrap;
		flex-direction: column;
		justify-content: center;
		align-items: center;
	}	
	.bienal-images img {max-width: 100% !important; max-height: 100% !important;}
	.gallery dl dt {padding: 0px !important;}
	.gallery p {margin-bottom: 10px !important;}
	#main a {color:#252525 !important;}
	.breadcrumb {border-radius: 0px !important; font-size: 12px;}
	.breadcrumb a {color:#e8b75f !important;}
	h4 {text-align: center; color: #e8b760; border-bottom: 2px solid #e8b760; padding-top: 5px;  padding-bottom: 5px; margin-bottom: 25px;}
	.promo {margin-bottom: 0px !important; padding: 0px !important; margin-top: 0px;}

	@media only screen and (max-width: 1000px) {
		.promo {display: none;}
	}	
	
	@media only screen and (max-width: 600px) {
	  .caption {display: none;}
	  .bienal-images li {width: 50% !important;}
	  .bienal-images .holder {display: flex; height:50vw;}	
	}	

	.background-animation {
		/*box-shadow: inset 0px 0px 200px 0px #FFF;*/
		height: 10vw; 
		background-position: center; 
		background-repeat: no-repeat; 
		background-size: cover; 
		background-image:url(<?php echo $images[$random_background[0]] ?>);
		animation-name: background;
		animation-duration: 120s;
		animation-delay: 0s;
		animation-iteration-count: infinite;
	}	
	
@keyframes background {
  0%   {background-position: center;}
  50%  {background-position: bottom;}
  100% {background-position: center;}
}	
	

</style>
