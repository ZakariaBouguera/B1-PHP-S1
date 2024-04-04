<?php
echo"Saisir le nom du port : ";
$port = rtrim( fgets (STDIN ));

	switch($port){
		case "quiberon":
		case "sauzon":
		case "le palais":
			$dept = "mobihan";
			break;

		case "piriac-sur-mer":
		case "pornic":
			$dept = "Loire-Atlantique";
			break;		
			
		case "concarneau":
		case "douarnenez":
			$dept = "finistere";
			break;	

		case "ile-d'yeu":
			$dept = "vendee";
			break;	
			
		default:
			$dept = "Port non recensé";
		
}

	if($dept == "Port non recensé"){
		echo "Port non recensé\n";
	}
	else{ echo "Département : " , $dept, "\n";
}
 ?>

