<?php 


//var_dump($article);


?>

<main id="main" role="main">
	<div class="container">
		<div class="row">
			<div class="col-lg-9 col-sm-8 col-xs-12 col-lg-push-3 col-sm-push-4 content">
				<div class="post wow fadeInUp" data-wow-delay="0.6s">
					<div class="image-box">
						<div class="blog-slider">
							<div class="slide">
								<a href="#"><img src="http://placehold.it/870x485" alt="image description"></a>
							</div>
						</div>
					</div>
					<div class="text-area">
						
						<?php if (array_key_exists('date-' . $_SESSION['language'], $article[2])) { ?> 
							<h2><?php echo $article[2]['date-' . $_SESSION['language']] ?></h2>
						<?php } ?>
						
						<h3><?php echo _uppercase(_translate('article', $article[1])); ?></h3>

						<?php if (array_key_exists($_SESSION['language'], $article[2])) { ?> 
							<?php echo $article[2][$_SESSION['language']] ?>
						<?php } ?>
						
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-sm-4 col-xs-12 col-lg-pull-9 col-sm-pull-8 sidebar">
				<div class="widget wow fadeInUp" data-wow-delay="0.6s">
					<h2><?php echo _uppercase(_translate('subcategory', $article[0])) ?></h2>
					<ul class="categories">
						<?php 
	
							foreach ($article[3] as $article_key => $article_value) { ?>

								<li><a href="<?php echo '/'.  _seo(_translate('subcategory', $article[0])) . '/' .  _seo(_translate('article', $article_key)); ?>"><?php echo _translate('article', $article_key); ?></a></li>

							<?php } ?>
						
					</ul>
				</div>
			</div>
		</div>
	</div>
</main>

<style>

	p {margin-bottom: 20px !important;}

</style>