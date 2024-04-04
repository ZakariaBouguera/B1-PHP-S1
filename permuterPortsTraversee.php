<?php
	echo "Saisir le nom du port de départ : ";
	$portDepart = trim(fgets(STDIN));

	echo "Saisir le nom du port d'arrivée : ";
	$portArrivee = trim(fgets(STDIN));

	echo "Port de départ : ", $portDepart, "\n";
	echo "Port d'arrivée : ", $portArrivee, "\n";

	$temp = $portDepart;
	$portDepart = $portArrivee;
	$portArrivee = $temp;

	echo "Après permutation :\n";
	echo "Port de départ : ", $portDepart, "\n";
	echo "Port d'arrivée : ", $portArrivee, "\n";
?>

