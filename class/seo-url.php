<?php

	function _seo($url) {
		
		$tr = array('ş','Ş','ı','I','İ','ğ','Ğ','ü','Ü','ö','Ö','Ç','ç','(',')','/',':',',');
		$en = array('s','s','i','i','i','g','g','u','u','o','o','c','c','','','-','-','');
		$url = str_replace($tr, $en, $url);
		$url = strtolower($url);
		$url = preg_replace('/&amp;amp;amp;amp;amp;amp;amp;amp;amp;.+?;/', '', $url);
		$url = preg_replace('/\s+/', '-', $url);
		$url = preg_replace('|-+|', '-', $url);
		$url = preg_replace('/#/', '', $url);
		$url = preg_replace('/&/', '', $url);
		$url = str_replace('.', '', $url);
		$url = str_replace("'", '', $url);		
		$url = str_replace("â", 'a', $url);		
		$url = str_replace("û", 'u', $url);		
		$url = str_replace("î", 'i', $url);			
		$url = str_replace("Â", 'a', $url);
		$url = str_replace('--', '-', $url);		
		$url = trim($url, '-');
		
		return $url;
		
	}

?>