<?php 

	$thematic_exhibitions_json = _decode_json($_SERVER['DOCUMENT_ROOT'] . '/json/landing-page/thematic-exhibitions.json');

	foreach ($thematic_exhibitions_json as $key => $value) {

	if ($key == $_SESSION['language']) { ?> 

		<div class="info testimonial">
			<div class="txt-frame wow fadeInLeft" data-wow-delay="0.6s">
				<h2 class="tild"><?php echo $value['title'][0] ?></h2>
				<span class="num"><?php echo $value['number'][0] ?></span>
				<a href="<?php echo $value['href'][0] ?>" class="more">view all</a>
			</div>
			<div class="img-frame wow fadeInUp" data-wow-delay="0.6s">
				<div class="slider">
					<div class="mask">
						
						<?php foreach ($value as $f_key => $f_value) { 
						
						if ($f_key == 'category') { 
						
							foreach ($f_value as $s_key => $s_value) { ?>
								
							<div class="slide">
								<blockquote>
									<q><?php echo $s_value[1]; ?></q>
									<cite>
										<span class="heading4"><?php echo $s_key ?></span>
										<!--<span class="designation">Creative Director</span>-->
									</cite>
								</blockquote>
								<div class="images">
									<img src="<?php echo $s_value[0] ?>" alt="image description">
								</div>
							</div>		
								
								
							<?php }
						
							} 
	
						} ?>
						
					</div>
					<div class="pagination">
						<ul class="mask-inner">
							
						<?php foreach ($value as $f_key => $f_value) { 
						
						if ($f_key == 'category') { 
						
							foreach ($f_value as $s_key => $s_value) { ?>
								
							<li>
								<a href="#"><img src="<?php echo $s_value[0] ?>" alt="image description"></a>
							</li>
								
							<?php }
						
							} 
	
						} ?>
							
						</ul>
					</div>
				</div>
			</div>			
		</div>	
	<?php } ?>

<?php } ?>

	
