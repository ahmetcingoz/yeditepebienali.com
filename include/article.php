<?php //print_r($article);

	foreach  ($article as $category_key => $category_value) {
		
		if (!is_array($category_value)) {
		
			//echo $category_value;
			
		} else {
			
			//print_r($category_value);
			
		}
		
	}

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
						<h1><?php echo _uppercase(_translate('category', $article[0])) ?></h1>
						<h2><?php echo _translate('subcategory', $article[1]) ?></h2>
					</div>
				</div>
			</div>
		</div>
		<ol class="breadcrumb">
			<li><a><?php echo _translate('category', $article[0]) ?></a></li>
			<li><a href="<?php echo '/' . _seo(_translate('subcategory', $article[1])) ?>"><?php echo _translate('subcategory', $article[1]) ?></a></li>			
			<li class="active"><?php echo _translate('article', $article[3]) ?></li>
		</ol>			
	</div>
</div>

<main id="main" role="main">
	<div class="container">
		<div class="row">
			<div class="col-xs-12">
				<!-- gallery -->
				<div class="gallery">
					<div class="img"><img src="http://placehold.it/770x570" alt="image description"></div>
					<div class="text">
						<h2><?php echo _translate('article', $article[3]) ?></h2>
						<dl>
							<dt>Client:</dt>
							<dd>DANIEL CRAWLER</dd>
							<dt>Date:</dt>
							<dd><time datetime="2016-08-06 20:00">09-08-2015</time></dd>
							<dt>Location:</dt>
							<dd>United States</dd>
							<dt>Author:</dt>
							<dd>KaWhi Leonard</dd>
						</dl>
						<p><?php echo _translate('article', $article[4][$_SESSION['language']]) ?></p>												
					</div>
				</div>
				<!-- project-area -->
				<div class="masonry-holder">
					<h2>Related protects</h2>
					<ul class="masonry add">
						<li>
							<div class="holder">
								<div class="img">
									<img src="http://placehold.it/350x260" alt="image description">
								</div>
								<div class="caption">
									<div class="c1">
										<div class="c2">
											<strong class="title">Amber Bottle</strong>
											<p>Branding Identity</p>
											<ul class="icons">
												<li><a href="#"><i class="icon-resize-full-alt"></i> <span>resize</span></a></li>
												<li><a href="#"><i class="icon-attach"></i> <span>attach</span></a></li>
											</ul>
										</div>
									</div>
								</div>
							</div>
						</li>
						<li>
							<div class="holder">
								<div class="img">
									<img src="http://placehold.it/350x260" alt="image description">
								</div>
								<div class="caption">
									<div class="c1">
										<div class="c2">
											<strong class="title">Amber Bottle</strong>
											<p>Branding Identity</p>
											<ul class="icons">
												<li><a href="#"><i class="icon-resize-full-alt"></i> <span>resize</span></a></li>
												<li><a href="#"><i class="icon-attach"></i> <span>attach</span></a></li>
											</ul>
										</div>
									</div>
								</div>
							</div>
						</li>
						<li>
							<div class="holder">
								<div class="img">
									<img src="http://placehold.it/350x260" alt="image description">
								</div>
								<div class="caption">
									<div class="c1">
										<div class="c2">
											<strong class="title">Amber Bottle</strong>
											<p>Branding Identity</p>
											<ul class="icons">
												<li><a href="#"><i class="icon-resize-full-alt"></i> <span>resize</span></a></li>
												<li><a href="#"><i class="icon-attach"></i> <span>attach</span></a></li>
											</ul>
										</div>
									</div>
								</div>
							</div>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</main>

<style>
	#main a {color:#252525 !important;}
	.breadcrumb {border-radius: 0px !important; font-size: 12px;}
	.breadcrumb a {color:#e8b75f !important;}
	h4 {text-align: center; color: #e8b760; border-bottom: 2px solid #e8b760; padding-top: 5px;  padding-bottom: 5px; margin-bottom: 25px;}
	.promo {margin-bottom: 0px !important; padding: 0px !important;}
</style>
