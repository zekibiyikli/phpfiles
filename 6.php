<?php
	
	$gun="Çarşsadadamba";

	switch ($gun) {
		case 'Pazartesi':
			echo "1. Gün";
			break;
		case 'Salı':
			echo "2. Gün";
			break;
		case 'Çarşamba':
			echo "3. Gün";
			break;
		case 'Perşembe':
			echo "4. Gün";
			break;
		case 'Cuma':
			echo "5. Gün";
			break;
		case 'Cumartesi':
			echo "6. Gün";
			break;
		case 'Pazar':
			echo "7. Gün";
			break;						
		default:
			echo "Hiç";
			break;
	}

?>