<?php
	
	define( "CONV_KMH_NOEUDS" , 1.852) ;
	
	echo " Saisir la vitesse en Km/h :" ;
	
	$vitesseKmh = fgets( STDIN ); 
	
	$vitesseNoeuds= $vitesseKmh / 1.852 ;
	
	
	echo "Résultat de la convertion : ", $vitesseNoeuds , " noeuds\n" ;
?>

