<?php

	function _under_construction ($erkajans = null) {
					
		$page = isset($_GET['page']) ? $_GET['page'] : null;

		switch($page) {	

			case 'administration';

				$_SESSION ['administration'] = 'true';

				header('Location: /');

			break;

		}
		
		if (!empty($erkajans) || $erkajans == 'true') {	

			switch($page) {	

				case 'erkajans';
					
					$_SESSION ['erkajans'] = 'true';

					header('Location: /');

				break;

			}

		} 

		switch($page) {	
				
			case _seo(_translate('sayfa', 'yapım aşamasında'));
							
				echo _translate('sayfa', 'yapım aşamasında');
								
			break;	

		}
		
	}
?>