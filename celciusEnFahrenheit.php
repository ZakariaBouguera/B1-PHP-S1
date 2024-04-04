<?php
	
	define( "CONV_C_F" , 1.8) ;
	
	echo " Saisir la température en °C :" ;
	
	$TempC = fgets( STDIN ); 
	
	$TempF= 1.8 * $TempC+32;
	
	
	echo "Température en °F: ", $TempF , " \n";
?>
