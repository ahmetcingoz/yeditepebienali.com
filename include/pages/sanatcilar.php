<?php

	$artists = $_SERVER['DOCUMENT_ROOT'] . '/json/category/artist.json';

	$artists = _decode_json($artists);

	$sort = array();

	foreach ($artists as $category_key => $category_value) {

		foreach ($category_value as $artist_key => $artist_value) {

			$sort[$artist_key] = $artist_key;

		}

	}

	$collator = new Collator('tr_TR');	
			
	$collator->sort($sort);

	sort($sort, SORT_LOCALE_STRING);

	$number = count($sort);

?>


<div class="promo portfolio wow fadeInUp">
	<div class="max-container">
		<div class="img background-animation">
			<img src="/images/placehold/1770x240.png" alt="image description">
		</div>
		<ol class="breadcrumb">
			<!--<li><a></a></li>
			<li><a href="<?php echo '/' . _seo(_translate('subcategory', $article[1])) ?>"><?php echo _translate('subcategory', $article[1]) ?></a></li>-->
			<li class="active"><?php echo _translate('category', $category_key) ?></li>
		</ol>			
		<div class="holder">
			<div class="frame">
				<div class="box">
					<div class="heading">
						<h1><?php echo _uppercase(_translate('subcategory', $category_key)) ?></h1>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<main id="main" role="main">
	<div class="container">
		<div class="row">
			<ul class="artist">
						
			
				
				

<?php 
		
	$tr = array('ş','Ş','ı','I','İ','ğ','Ğ','ü','Ü','ö','Ö','Ç','ç');
			
	for ($i = 0; $i < $number; $i++) {

		$substr = substr($sort[$i], 0, 2);
		
		if ($i == 0) {

			echo '<h2>' . $sort[$i][0] . '</h2>';

		} else if ($sort[$i - 1][0] <> $sort[$i][0]) {

			if (in_array($substr, $tr)) {

				echo '<h2>' . $substr . '</h2>';
				
			} else {

				echo '<h2>' . $sort[$i][0] . '</h2>';

			}				

		}

		echo '<li><a href="' . _seo($sort[$i]) . '">' . $sort[$i] . '</a></li>';

	}

?>			
		
			</ul>
		</div>	
	</div>	
</main>


<style>
	#main a {color:#252525 !important;}
	.breadcrumb {border-radius: 0px !important; font-size: 12px;}
	.breadcrumb a {color:#e8b75f !important;}

	.promo {margin-bottom: 0px !important; padding: 0px !important; margin-top: 0px;}
	.promo .heading {overflow: visible !important;}
	.promo .heading h1 {color: #e8b75f !important; padding-left: 75px; padding-right: 75px; padding-bottom: 5px; padding-top: 15px; border-top: 1px solid #e8b75f;}
	
	.artist {width: 100%}
	.artist li {width: 25%; float: left; margin-bottom: 7px;}
	.artist h2 {width: 100%; display: block; float: left; margin-bottom: 25px; margin-top: 25px;}
	
	@media only screen and (max-width: 1000px) {
		.artist li {width: 33.33%; float: left;}
	}
	
	@media only screen and (max-width: 1000px) {
		.artist li {width: 50%; float: left;}
	}	

</style>
