<?php
	echo "confirmez-vous la modification (oui/non) ? \n\n";
	$utilisateur = strtolower(rtrim(fgets(STDIN)));
	while ($utilisateur != "oui" and $utilisateur != "non"){
		
		echo "confirmez-vous la modification (oui/non) ? \n\n";
		$utilisateur = strtolower(rtrim(fgets(STDIN)));
	}
	if ($utilisateur == "oui"){
		echo "Modification en cours ...";
	}
	elseif ($utilisateur == "non"){
		echo "Modification annulée.";
	}

?>

