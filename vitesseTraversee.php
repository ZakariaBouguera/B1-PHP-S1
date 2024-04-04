<?php
echo "Saisir la vitesse :\n";
$vitesse = rtrim( fgets( STDIN ) ) ;

if( $vitesse ==0 ){
	echo "Vitesse :" , $vitesse , " noeud.\n";
}
elseif($vitesse ==1 ){
	echo "Vitesse :" , $vitesse , " noeud.\n";
}
elseif($vitesse >1 ){
	echo "Vitesse :" , $vitesse , " noeuds.\n";	
}
else{
	echo "Vitesse 0 noeud.\n";
}
?>

