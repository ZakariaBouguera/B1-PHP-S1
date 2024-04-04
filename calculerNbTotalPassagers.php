<?php
	$nbpasstotal=0 ;
	$nbPassagers = array ( "35","10","22","52","15","58","8","73") ;
	for ( $i=0 ; $i < count ( $nbPassagers) ; $i += 1 ) {
		$nbpasstotal = $nbpasstotal + $nbPassagers [$i] ;
		
	}
	echo $nbpasstotal , " Passagers transportés le 22/09/2022 \n";

?>
