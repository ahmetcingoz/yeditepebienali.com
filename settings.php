<?php 

	$content = $_SERVER['DOCUMENT_ROOT'] . '/json/content.json';
	$content = _decode_json($content);

	$rename_path = 'images/articles/sanatcilar/';

	/* HEAD */
	$title = 'Yeditepe Bienali';
	$description_tr = "";
	$description_tr = "";
	$keywords_tr = "";
	$keywords_en = "";


	/* LANDING PAGE */
	$slider_autoplayspeed = 5000;
	$slider_fadespeed = 1000;

	/* LANGUAGE */
	$language = array ('tr', 'en');

	/* SETTINGS */
	$erkajans = 'true';
	$under_construction = 'true';

	/* GOOGLE ANALYTICS */
	$google_analytics = 'UA-1289368-70';

?>