<header id="header" class="sticky-header">
	<div class="max-container">
		<div id="header_tck">
			<ul class="fl">
				<li><a href="https://www.tccb.gov.tr/" target="_blank"><img src="../images/tccb-<?php echo $_SESSION['language'] ?>.png"</a></li>
			</ul>					
			<ul class="fr">
				<li style="margin-right: 10px;"><a href="https://www.fatih.bel.tr/" target="_blank"><img src="../images/fatih-<?php echo $_SESSION['language'] ?>.png"</a></li>
				<li><a href="http://www.ktsv.com.tr/" target="_blank"><img src="../images/ktsv-<?php echo $_SESSION['language'] ?>.png"</a></li>
			</ul>					
		</div>
	</div>
	<div class="max-container">
		<strong class="logo">
			<a href="/">
				<span class="img">
					<img src="/images/logo-<?php echo $_SESSION['language'] ?>.png" alt="Yeditepe Bienali">
				</span>
			</a>
		</strong>
		<div class="align-right">
			<nav class="navbar navbar-default">
				<div class="container-fluid">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						</button>
					</div>
					
					<?php $header = _header(); ?>

				</div>
			</nav>
			<div class="search-area">
				<!--<div class="search-box">
					<a class="search" href="#"><i class="icon-search"><span>search</span></i></a>
					<input type="search" placeholder="Search">
				</div>-->
				<!--<a href="#" class="mail"><i class="icon-mail"><span>mail</span></i></a>-->
				<ul class="language">
					<li><span style="color:#e8b75f;" class="material-icons md-18">language</span></li>
					
				<?php foreach ($language as $language_key) {
	
					if ($_SESSION['language'] <> $language_key) {?>
						
						<li><a href="/<?php echo $language_key ?>" style="font-size: 15px; margin-left: 5px"><?php echo _uppercase($language_key) ?></a></li>
						
					<?php }
	
				} ?>
				</ul>
			</div>
		</div>
	</div>
</header>
	
<style>
	
	.align-right .search-area {width:auto !important;}
	
	.fl {float: left;}
	.fr {float: right;}
	.language li { float: left;}
	ul {list-style-type: none; padding: 0px; margin: 0px;}
	
	#header_tck {margin-top:0px; display:block; float: left; width: 100%; border-bottom: 2px solid #e8b760; padding-bottom: 10px; margin-bottom: 10px;}
	
	#header_tck ul li {float: left;}
	
	@media only screen and (max-width: 630px) {

		#header_tck ul {width: 50%;}		
		#header_tck ul li {width: calc(50% - 10px);}
		#header_tck img {width: 100%;}
	
	}
	
	
</style>