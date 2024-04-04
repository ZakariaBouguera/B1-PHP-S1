<?php
 Define("NB_SIEGES" , 40) ;
 for ( $numsiege = 1 ; $numsiege <= NB_SIEGES ; $numsiege = $numsiege + 1 ){
	 if ($numsiege % 3 ==0){
		 echo "Siège numéro " , $numsiege, "\n";
	 }
 }
?>

