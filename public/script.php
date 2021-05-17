<script>
	(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

	ga('create', '<?php echo $google_analytics ?>', 'auto');
	ga('send', 'pageview');
</script>

<script src="/assets/js/jquery.js"></script>
<script type="text/javascript" src="/assets/js/plugins.js"></script>
<script type="text/javascript" src="/assets/js/functions.js"></script>
<script type="text/javascript">
jQuery(document).ready(function(){

	// main-slider init
	jQuery('#main-slider').slick({
		adaptiveHeight: true,
		autoplay: true,
		arrows: false,
		speed: 800,
		dots: true,
		fade: true
	});

});
if (navigator.userAgent.match(/IEMobile\/10\.0/)) {
	var msViewportStyle = document.createElement('style')
	msViewportStyle.appendChild(
	document.createTextNode(
	'@-ms-viewport{width:auto!important}'
	)
)
	document.querySelector('head').appendChild(msViewportStyle)
}
</script>
