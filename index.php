<?php 
if (!isset($Langue)) {
$Langue = explode(',',$_SERVER['HTTP_ACCEPT_LANGUAGE']);
$Langue = strtolower(substr(chop($Langue[0]),0,2));
}
if($Langue == 'fr'){
	header('Location: pages/fr/index.php');
}
else{
	if($Langue == 'en'){
		header('Location: pages/en/index.php');
	}
	if($Langue == 'nl'){
		header('Location: pages/nl/index.php');
	}
}
 ?>