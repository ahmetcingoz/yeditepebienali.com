<footer id="footer">
	<div class="max-container">
		<div class="f1">
			<div class="holder">
				<strong class="logo-footer">
					<a href="#">
						<!--<i class="icon">#</i>-->
						<span class="img">
							<img alt="Yeditepe Bienali" src="/images/logo-footer-<?php echo $_SESSION['language'] ?>.png">
						</span>
					</a>
				</strong>
				<div class="footer-txt">
					<div class="text">
						<div class="contact">
							<p><?php echo $content['footer']['company'][$_SESSION['language']] ?></p>
							<address><span class="yellow">A :</span><?php echo $content['footer']['address-one'][$_SESSION['language']] ?></address>
							<address><span class="yellow">A :</span><?php echo $content['footer']['address-two'][$_SESSION['language']] ?></address>
							<span class="email"><span class="yellow">E: </span><a href="mailto:<?php echo $content['footer']['email'][$_SESSION['language']] ?>" ><?php echo $content['footer']['email'][$_SESSION['language']] ?></a></span>
							<span class="tel"><span class="yellow">G: </span><a href="tel:+<?php echo $content['footer']['gsm'][$_SESSION['language']] ?>"><?php echo $content['footer']['gsm'][$_SESSION['language']] ?></a></span>
						</div>
					</div>
					<!--<ul class="testimonial">
						<li>
							<p><a href="#"><i class="icon-twitter"></i><span>@Leonard design</span></a> I am so happy because I found this EAGLEEYES, and it just made EAGLEEYES easier. Thanks so much for sharing</p>
						</li>
						<li>
							<p><a href="#"><i class="icon-twitter"></i><span>@Leonard design</span></a> I am so happy because I found this EAGLEEYES, and it just made EAGLEEYES easier. Thanks so much for sharing</p>
						</li>
						<li>
							<p><a href="#"><i class="icon-twitter"></i><span>@Leonard design</span></a> I am so happy because I found this EAGLEEYES, and it just made EAGLEEYES easier. Thanks so much for sharing</p>
						</li>
					</ul>-->
				</div>
			</div>
			<div class="frame">
				<div class="wpcf7">
					<form action="inc/process.php" class="wpcf7-form f-contact-form" enctype="multipart/form-data">
						<h3><?php echo _uppercase(_translate('category','iletişim'))?></h3>
						<div class="rows">
							<span class="wpcf7-form-control-wrap text-field-required">
								<input type="text" name="text-field-required" value="" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required text-field-class wpcf7-use-title-as-watermark" size="12" placeholder="<?php echo ucwords(_translate('form','ad - soyad'))?>">
							</span>
						</div>
						<div class="rows">
							<span class="wpcf7-form-control-wrap Emailfield">
								<input type="email" name="Emailfield" value="" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email email-class wpcf7-use-title-as-watermark" size="12" placeholder="<?php echo ucwords(_translate('form','e-posta'))?>" />
							</span>
						</div>
						<div class="rows">
							<span class="wpcf7-form-control-wrap textarea">
								<textarea name="textarea" class="wpcf7-form-control wpcf7-textarea textarea-class wpcf7-use-title-as-watermark" rows="9" cols="39" placeholder="<?php echo ucwords(_translate('form','yorum'))?>"></textarea>
							</span>
						</div>
						<input id="submit" type="submit" value="<?php echo _translate('form', 'gönder') ?>">
					</form>
					<div class="done-massage">
						<strong>Thank you!</strong> We have received your message.
					</div>
				</div>
			</div>
		</div>
		<div class="f2">
			<!-- sub-nav -->
			<ul class="sub-nav">
				
				<?php 
				
				foreach ($content['footer']['footer-links'] as $footer_key => $footer_value) { ?>

					<li><a href="<?php echo '/' . _seo(_translate('footer', $footer_key)) ?>"><?php echo _uppercase(_translate('footer', $footer_key)) ?></a></li>

				<?php } ?>
				
			</ul>
			<span class="copyright"><a href="#"><?php echo $content['footer']['site'][$_SESSION['language']] ?></a> <?php echo $content['footer']['copyright'][$_SESSION['language']] ?></span>
		</div>
	</div>
	<div id="company" class="max-container">
		<div>
			<span><?php echo $content['footer']['contributors'][$_SESSION['language']] ?></span>
			<ul>
				<li><a><img src="../images/footer/katki-verenler/01.png"</a></li>
				<li><a><img src="../images/footer/katki-verenler/02.png"</a></li>		
				<li><a><img src="../images/footer/katki-verenler/03.png"</a></li>
				<li><a><img src="../images/footer/katki-verenler/04.png"</a></li>
				<li><a><img src="../images/footer/katki-verenler/05.png"</a></li>
				<li><a><img src="../images/footer/katki-verenler/06.png"</a></li>
				<li><a><img src="../images/footer/katki-verenler/07.png"</a></li>
				<li><a><img src="../images/footer/katki-verenler/08.png"</a></li>
				<li><a><img src="../images/footer/katki-verenler/09.png"</a></li>
				<li><a><img src="../images/footer/katki-verenler/10.png"</a></li>	
			</ul>
		</div>
		<div>
			<span><?php echo $content['footer']['supporters'][$_SESSION['language']] ?></span>	
			<ul>
				<li><a><img src="../images/footer/destek-verenler/01.jpg"</a></li>
				<li><a><img src="../images/footer/destek-verenler/02.jpg"</a></li>		
				<li><a><img src="../images/footer/destek-verenler/03.jpg"</a></li>
				<li><a><img src="../images/footer/destek-verenler/04.png"</a></li>
				<li><a><img src="../images/footer/destek-verenler/05.jpg"</a></li>
				<li><a><img src="../images/footer/destek-verenler/06.png"</a></li>
				<li><a><img src="../images/footer/destek-verenler/07.jpg"</a></li>
				<li><a><img src="../images/footer/destek-verenler/08.jpg"</a></li>
				<li><a><img src="../images/footer/destek-verenler/09.png"</a></li>
				<li><a><img src="../images/footer/destek-verenler/10.jpg"</a></li>	
				<li><a><img src="../images/footer/destek-verenler/11.png"</a></li>				
				<li><a><img src="../images/footer/destek-verenler/12.jpg"</a></li>							
				<li><a><img src="../images/footer/destek-verenler/13.jpg"</a></li>										
				<li><a><img src="../images/footer/destek-verenler/14.jpg"</a></li>													
			</ul>
		</div>
	</div>	
</footer>

<style>
	
	#company {background-color: #FFF !important; width: 100%; display: block; padding-top: 10px !important; padding-bottom: 50px !important;}
	#company span {display: block; width: 100%; border-bottom: 1px solid #e8b760; margin-bottom: 10px; float: left; color: #000 !important;}	
	#company div {width: 100%; float: left; padding-left:0px; padding-right:0px;}
	#company li {float: left; margin-left: 25px; height: 45px; margin-bottom: 10px;}
	#company img {height: 100%; max-width: 100%;}

</style>

