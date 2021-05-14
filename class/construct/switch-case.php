<?php

	function _switch_page () {
		
		$header_json = $_SERVER['DOCUMENT_ROOT'] . '/json/header.json';
		
		$header_json = _decode_json($header_json);

		if(!isset( $_GET['page'])) {$page = 'default';} else {$page = $_GET['page'];}		
				
		switch($page) {

			case 'default';

				_include_once('default');

			break;	
				
		}
		
		/* İBRAHİM */
		
		switch($page) {

			case 'rename';

				global $rename_path;
				
				_rename($rename_path);
				
			break;	
				
		}		
		
		foreach ($header_json as $category_key => $category_value) {
			
			switch($page) {

				case _seo(_translate('category', $category_key, 'true'));

					_include_once('category');

				break;	

			}
			
			if (is_array($category_value)) {

				foreach ($category_value as $subcategory) {

					switch($page) {

						case _seo(_translate('subcategory', $subcategory, 'true'));
							
							_include_once('subcategory');

						break;	

					}
				
				}
				
			}

		}
		
		$articles = $_SERVER['DOCUMENT_ROOT'] . '/json/category/category.json';
		
		$articles = _decode_json($articles);
		
		foreach ($articles as $category_key => $category_value) {
			
			foreach ($category_value as $subcategory_key => $subcategory_value) {
				
				foreach ($subcategory_value as $date_key => $date_value) {
					
					foreach ($date_value as $article_key => $article_value) {
						
						switch($page) {
								
							case _seo(_translate('subcategory', $article_key, 'true')) . '-' . $date_key;
																
								$article_array = [$category_key, $subcategory_key, $date_key, $article_key, $article_value, $date_value];

								_include_once('article', $article_array);

							break;	

						}						
						
					}
					
				}
				
			}
			
		}
		
		$artists = $_SERVER['DOCUMENT_ROOT'] . '/json/category/artist.json';

		$artists = _decode_json($artists);
		
		foreach ($artists as $category_key => $category_value) {

			foreach ($category_value as $artist_key => $artist_value) {

				switch($page) {

					case _seo($artist_key);

						$artist_array = [$artist_key, $artist_value];

						_include_once('artist', $artist_array);

					break;	

				}						

			}

		}
		
	}


?>





















				
