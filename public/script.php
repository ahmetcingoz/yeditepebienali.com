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
