<?php

		$artists = $_SERVER['DOCUMENT_ROOT'] . '/json/category/artist.json';
		
		$artists = _decode_json($artists);

		$order = array ('A', 'B', 'C', 'Ç', 'D', 'E', 'F', 'G', 'M');

		$sort = array();

		foreach ($artists as $artist_key => $artist_value) {
			
			$sort[$artist_key] = $artist_key;
			
		}

		sort($sort);

		$number = count($sort);

		for ($i = 0; $i < $number; $i++) {
			
			if ($i == 0) {
				
				echo $sort[$i][0] . '<br>';
				
			} else if ($sort[$i - 1][0] <> $sort [$i][0]) {
				
				echo $sort[$i][0] . '<br>';
				
			}
			
			echo $sort[$i] . '<br>';

		}
			


?>