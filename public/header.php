<header id="header" class="sticky-header">
	<div class="max-container">
		<div id="header_tck">
			<ul class="fl">
				<li><a href="https://www.tccb.gov.tr/" target="_blank"><img src="../images/tccb_<?php echo $_SESSION['language'] ?>.png"</a></li>
			</ul>					
			<ul class="fr">
				<li style="margin-right: 10px;"><a href="https://www.fatih.bel.tr/" target="_blank"><img src="../images/fatih_<?php echo $_SESSION['language'] ?>.png"</a></li>
				<li><a href="http://www.ktsv.com.tr/" target="_blank"><img src="../images/ktsv_tr.png"</a></li>
			</ul>					
		</div>
	</div>
	<div class="max-container">
		<strong class="logo">
			<a href="/">
				<span class="img">
					<img src="/images/logo_<?php echo $_SESSION['language'] ?>.png" alt="Yeditepe Bienali">
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
				<img style="width: 20px;" src="../images/globe_icon.svg"/><a style="font-size: 15px; margin-left: 5px" href="#">TR</a>
			</div>
		</div>
	</div>
</header>
	
<style>
	
	.fl {float: left;}
	.fr {float: right;}
	
	ul {list-style-type: none; padding: 0px; margin: 0px;}
	
	#header_tck {margin-top:0px; display:block; float: left; width: 100%; border-bottom: 2px solid #e8b760; padding-bottom: 10px; margin-bottom: 10px;}
	
	#header_tck ul li {float: left;}
	
	@media only screen and (max-width: 630px) {

		#header_tck ul {width: 50%;}		
		#header_tck ul li {width: calc(50% - 10px);}
		#header_tck img {width: 100%;}
	
	}
	
	
</style>