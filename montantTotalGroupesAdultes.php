<?php
	
	define( "CONV_NBA_M" , 17) ;
	
	echo "Traversée Quiberon-Le Palais 3 Juillet 2021 "," \n" , "Saisir le nombre d'adulte Participant :" ;
	
	$NBA = fgets( STDIN ); 
	
	$M= 17 * $NBA;
		
	echo "Le montant total pour un groupe de ", $NBA , "personnes adultes" , " est de :", $M , " €"," \n";
?>
