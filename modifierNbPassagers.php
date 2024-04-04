<?php

	$nbPassagers = array ( "35","10","22","52","15","58","8","73") ;
	for ( $i=0 ; $i < count( $nbPassagers) ; $i += 1 ) {
		echo ceil ($nbPassagers [$i] / 10 )*10, " Passagers \n"; 
		
	}
	

?>
